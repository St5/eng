<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category  Cgi
 * @package   Cgi_Eurogast
 * @author    CGI <info.de@cgi.com>
 * @copyright 2016 CGI
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://www.de.cgi.com/
 */


namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{

    const COUNT_WORLD = 5;
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $words = collect(app('db')->select("SELECT * FROM words ORDER BY RAND() LIMIT ".self::COUNT_WORLD));
        $mainWorld = $words->get(rand(0,self::COUNT_WORLD-1));

        return view('home', ['words' => $words, 'mainWorld' => $mainWorld]);
    }
}
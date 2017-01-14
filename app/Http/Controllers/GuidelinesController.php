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

class GuidelinesController extends Controller
{

    const COUNT_WORLD = 4;
    const TABLE_WORDS_NAME = 'words';
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getStep(Request $request)
    {
        $ecludeIds = $request->input('ids');
        $modules = $request->input('module', 1);
        $mainWorld = DB::table(self::TABLE_WORDS_NAME)
                ->whereNotIn('id', $ecludeIds)
                ->whereIn('module', $modules)
                ->take(1);
        $words = DB::table(self::TABLE_WORDS_NAME)
            ->whereNotIn('id', [$mainWorld->id()])
            ->whereIn('module', $modules)
            ->take(self::COUNT_WORLD);

        $words->put($mainWorld);

        return view('home', ['words' => $words, 'mainWorld' => $mainWorld]);
    }
}
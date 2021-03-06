<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Boost config.
 *
 * @package   theme_boost
 * @copyright 2016 Frédéric Massart
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/theme/boost/lib.php');

$THEME->name = 'booster';
$THEME->sheets = [''];
$THEME->editor_sheets = [''];

$THEME->parents = ['boost'];

// Call main theme scss from parent- including the selected preset.
$THEME->scss = function($theme) {
    return theme_boost_get_main_scss_content($theme);
};

// Docking is not currently supported in Boost family themes.
$THEME->enable_dock = false;

// Call css/scss processing functions from Boost.
$THEME->csstreepostprocessor = 'theme_boost_css_tree_post_processor';
$THEME->prescsscallback = 'theme_boost_get_pre_scss';
$THEME->extrascsscallback = 'theme_boost_get_extra_scss';

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Additional theme options.
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->undeletableblocktypes = '';

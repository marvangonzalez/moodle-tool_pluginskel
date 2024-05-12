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
 * Provides tool_pluginskel\local\skel\lib_php_file class.
 *
 * @package     tool_pluginskel
 * @subpackage  skel
 * @copyright   2016 Alexandru Elisei <alexandru.elisei@gmail.com>, David Mudrák <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_pluginskel\local\skel;

use coding_exception;

/**
 * Class representing the lib.php file.
 *
 * @copyright   2016 Alexandru Elisei <alexandru.elisei@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class lib_php_file extends php_library_file {

    /**
     * Set the data to be eventually rendered.
     *
     * @param array $data
     */
    public function set_data(array $data) {

        parent::set_data($data);

        $this->data['self']['component_name_all_caps'] = \core_text::strtoupper($this->data['component_name']);
    }

    /**
     * Adds a feature supported by the plugin.
     *
     * @param string $feature The feature name.
     */
    public function add_supported_feature($feature) {

        if (empty($this->data)) {
            throw new coding_exception('Skeleton data not set');
        }

        if (empty($this->data['self']['supports'])) {
            $this->data['self']['supports'] = array();
        }

        $this->data['self']['supports'][] = $feature;
    }
    

    public function pruebita() {
        // Incluir el archivo mypage_logic.php si aún no se ha incluido
        include_once __DIR__ . '/mypage_logic.php';
        
        // Crear una instancia de la clase donde se encuentra testMyPage, si es necesario
        $instancia_mypage_logic = new \tool_pluginskel\local\skel\lib_php_file();  // Suponiendo que lib_php_file es la clase que contiene testMyPage
    
        // Llamar al método testMyPage usando la instancia creada
        $instancia_mypage_logic->testMyPage();
    }
    

}

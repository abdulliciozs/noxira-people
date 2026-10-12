<?php

/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * This program is modified by Noxira People on 2026-10-12.
 *
 * OrangeHRM is free software: you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with OrangeHRM.
 * If not, see <https://www.gnu.org/licenses/>.
 */

namespace OrangeHRM\CorporateBranding\Dto;

final class NoxiraThemeDefaults
{
    public const SHOW_SOCIAL_MEDIA_ICONS = false;

    public static function getVariables(): array
    {
        return [
            'primaryColor' => '#34436B',
            'primaryFontColor' => '#FFFFFF',
            'secondaryColor' => '#168C8A',
            'secondaryFontColor' => '#FFFFFF',
            'primaryGradientStartColor' => '#696BD8',
            'primaryGradientEndColor' => '#34436B',
        ];
    }
}


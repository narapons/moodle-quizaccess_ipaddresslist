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
 * Checking access to quiz by list of IP adresses defined by admin.
 *
 * @package    quizaccess_ipaddresslist
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = '許可するIPアドレスを追加';
$string['allowedsubnets'] = '許可されたIPアドレス';
$string['allowedsubnets_help'] = '問題の受験を、ユーザーのIPアドレスによって特定の場所に制限される場合があります。場所と対応するIPアドレスのリストは、サイト管理者によって定義されます。この場所のチェックを無効にするには、全ての選択を外してください。';
$string['editsubnet'] = '許可するIPアドレスを編集';
$string['managesubnets'] = '許可するIPアドレスの管理';
$string['pluginname'] = '許可するIPアドレス';
$string['privacy:metadata'] = 'このプラグインは個人情報を保存しません。';
$string['subnet'] = 'IP subnet';
$string['subnetwrong'] = 'この問題は許可された場所からのみ受験できます。';
$string['subnet_help'] = '１つのIPアドレスまたは複数をカンマ区切りで指定します。

例:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';


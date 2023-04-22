<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_stack', language 'zh_cn', version '4.1'.
 *
 * @package     qtype_stack
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanothernode'] = '增加一个节点';
$string['answernote'] = '回答备注';
$string['answertest'] = '回答检验';
$string['assumepositive'] = '假定正数';
$string['assumereal'] = '假定实数';
$string['autosimplify'] = '自动化简';
$string['autosimplifyprt'] = '自动化简';
$string['boxsize'] = '输入框大小';
$string['checkanswertype'] = '检查输入的类型';
$string['complexno'] = 'sqrt(-1)的含义和显示';
$string['defaultprtcorrectfeedback'] = '回答正确，真棒！';
$string['defaultprtincorrectfeedback'] = '答案错误。';
$string['defaultprtpartiallycorrectfeedback'] = '你的回答仅部分正确。';
$string['feedbackstyle'] = 'PRT反馈样式';
$string['feedbackvariables'] = '反馈变量';
$string['inputheading'] = '输入: {$a}';
$string['inputname'] = '输入名称';
$string['inputremovedconfirmbelow'] = '输入\'{$a}\'已被删除，请在下方确认。';
$string['inputstatusnamescore'] = '得分';
$string['inputtype'] = '输入类型';
$string['insertspaces'] = '仅为空格加入"*"号';
$string['insertstars'] = '加入"*"号';
$string['insertstarsassumesinglechar'] = '假设单字符变量名并加入"*"号';
$string['insertstarsno'] = '不加入"*"号';
$string['insertstarsspaces'] = '为隐含乘法和空格加入"*"号';
$string['insertstarsspacessinglechar'] = '假设单字符变量名并为隐含乘法和空格加入"*"号';
$string['insertstarsyes'] = '仅为隐含乘法加入"*"号';
$string['inversetrig'] = '反三角函数';
$string['logicsymbol'] = '逻辑符号';
$string['matrixparens'] = '矩阵括号的默认形状';
$string['multiplicationsign'] = '乘号';
$string['mustverify'] = '学生必须核实';
$string['next'] = '下一步';
$string['nextcannotbeself'] = '一个节点不能链接到自己作为下一个节点。';
$string['nodehelp_help'] = '###答案检验
答案检验用于比较两个表达式，以确定它们是否满足某些数学标准。

### SAns
这是答案检验函数的第一个参数。 在非对称测试中，这被认为是 "学生的答案"，尽管它可以是任何有效的CAS表达式，并且可能取决于问题变量或反馈变量。

### TAns
这是答案检验函数的第二个参数。 在非对称测试中，这被认为是 "教师的答案"，尽管它可以是任何有效的CAS表达式，并可能取决于问题变量或反馈变量。

### 检验选项
这个字段使答案检验能接受一个选项，如一个变量或一个数字精度。

### 沉默
当设置为 "是 "时，任何由答案检验自动生成的反馈将被抑制，并且不显示给学生。 枝中的反馈字段不受此选项的影响。';
$string['nodex'] = '节点 {$a}';
$string['nodexfalsefeedback'] = '节点 {$a} 为假的反馈';
$string['nodextruefeedback'] = '节点 {$a}为真的反馈';
$string['nodexwhenfalse'] = '当节点 {$a} 为假';
$string['nodexwhentrue'] = '当节点 {$a}为真';
$string['options'] = '选项';
$string['penalty'] = '罚分';
$string['pluginnameadding'] = '增加一道STACK试题';
$string['pluginnameediting'] = '编辑一道STACK试题';
$string['prtcorrectfeedback'] = '正确时的标准反馈';
$string['prtheading'] = '潜在响应树 (PRT): {$a}';
$string['prtincorrectfeedback'] = '错误时的标准反馈';
$string['prtpartiallycorrectfeedback'] = '部分正确时的标准反馈';
$string['prtremovedconfirmbelow'] = '潜在响应树\'{$a}\'已被删除。请在下方确认。';
$string['prtwillbecomeactivewhen'] = '当学生回答 {$a} 后，该潜在响应树将启用。';
$string['questionnote'] = '试题备注';
$string['questionsimplify'] = '试题级别化简';
$string['questiontext_help'] = '试题文本是CAS文本（CASText）。 这是学生实际看到的 "试题"。 你必须把输入 (input) 元素和验证 (validation) 字符串放在这个字段中，而且只能放在这个字段中。 例如，使用"[[input:ans1]] [[validation:ans1]]"。';
$string['questionvalue'] = '试题分值';
$string['questionvaluepostive'] = '试题分值必须为非负值。';
$string['questionvariables'] = '试题变量';
$string['questionvariables_help'] = '这个字段允许你定义和操纵CAS变量，例如，为创建（试题的）随机变体。 这些变量都可以用于试题的所有其他部分。';
$string['requirelowestterms'] = '要求最简';
$string['score'] = '分数';
$string['scoremode'] = '模式';
$string['showvalidation'] = '显示验证';
$string['sqrtsign'] = '根号符号';
$string['teachersanswer'] = '参考答案';
$string['testoptions'] = '检验选项';
$string['testoptionsrequired'] = '此项检验的检验选项为必填。';

<?php
$viewdefs ['Documents'] =
    array(
        'EditView' =>
            array(
                'templateMeta' =>
                    array(
                        'form' =>
                            array(
                                'enctype' => 'multipart/form-data',
                                'hidden' =>
                                    array(
                                        0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
                                        1 => '<input type="hidden" name="contract_id" value="{$smarty.request.contract_id}">',
                                    ),
                            ),
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
{sugar_getscript file="modules/Documents/documents.js"}',
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'LBL_DOCUMENT_INFORMATION' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'lbl_document_information' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'filename',
                                                'displayParams' =>
                                                    array(
                                                        'onchangeSetFileNameTo' => 'document_name',
                                                    ),
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 => 'document_name',
                                        1 =>
                                            array(
                                                'name' => 'revision',
                                                'customCode' => '<input name="revision" type="text" value="{$fields.revision.value}" {$DISABLED}>',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 => 'category_id',
                                        1 => 'subcategory_id',
                                    ),
                                3 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'users_documents_1_name',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'anmol_applications_documents_1_name',
                                            ),
                                    ),
                                4 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'anmol_applicationss_documents_1_name',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
?>

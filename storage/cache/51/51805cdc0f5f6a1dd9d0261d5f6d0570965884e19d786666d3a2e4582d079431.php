<?php

/* extension/module/oc_prom_yml.twig */
class __TwigTemplate_30e94bef3de92616be5c8394e8e29c1eef11522a29ef3a97bef1e7d52b267b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ol class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ol>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["is_activated"]) ? $context["is_activated"] : null)) {
            // line 20
            echo "            ";
            if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
                // line 21
                echo "                <div class=\"alert alert-danger alert-dismissible\"><i
                            class=\"fas fa-exclamation-circle\"></i> ";
                // line 22
                echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
                echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
            }
            // line 26
            echo "            
                    <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h3 class=\"panel-title\">";
            // line 28
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</h3></div>
            <div class=\"panel-body\">
                    ";
            // line 30
            if (array_key_exists("prom_category_warning", $context)) {
                // line 31
                echo "                        <div class=\"alert-danger prom-cat-warning\">";
                echo (isset($context["prom_category_warning"]) ? $context["prom_category_warning"] : null);
                echo " <a id=\"load_prom_cats\"
                                                                                                  href=\"";
                // line 32
                echo (isset($context["main_href"]) ? $context["main_href"] : null);
                echo "\">Загрузить</a>
                        </div>
                    ";
            }
            // line 35
            echo "                    <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\">
                        
                        <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"
                            \">";
            // line 39
            echo (isset($context["general_tab"]) ? $context["general_tab"] : null);
            echo "</a></li>
                        <li><a href=\"#tab-export\" data-toggle=\"tab\"
                            >";
            // line 41
            echo (isset($context["export_tab"]) ? $context["export_tab"] : null);
            echo "</a></li>
                        <li
                        \"><a href=\"#tab-attributes\" data-toggle=\"tab\"
                        >";
            // line 44
            echo (isset($context["attributes_tab"]) ? $context["attributes_tab"] : null);
            echo "</a></li>
                        <li
                        \"><a href=\"#tab-options\" data-toggle=\"tab\"
                        >";
            // line 47
            echo (isset($context["options_tab"]) ? $context["options_tab"] : null);
            echo "</a></li>
                    </ul>
                        <div class=\"tab-content\">

                            <div class=\"tab-pane active\" id=\"tab-general\">
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\"
                                           for=\"input-company-name\">";
            // line 54
            echo (isset($context["entry_activation_token"]) ? $context["entry_activation_token"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"module_oc_prom_yml_license_token\"
                                               value=\"";
            // line 57
            echo (isset($context["license_token"]) ? $context["license_token"] : null);
            echo "\"
                                               placeholder=\"";
            // line 58
            echo (isset($context["entry_activation_token"]) ? $context["entry_activation_token"] : null);
            echo "\" id=\"input-license-token\"
                                               class=\"form-control\"/>
                                    </div>

                                </div>

                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\"
                                           for=\"input-company-name\">";
            // line 66
            echo (isset($context["entry_company_name"]) ? $context["entry_company_name"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"module_oc_prom_yml_company_name\"
                                               value=\"";
            // line 69
            echo (isset($context["company_name"]) ? $context["company_name"] : null);
            echo "\"
                                               placeholder=\"";
            // line 70
            echo (isset($context["entry_company_name"]) ? $context["entry_company_name"] : null);
            echo "\" id=\"input-company-name\"
                                               class=\"form-control\"/>
                                        ";
            // line 72
            if ((isset($context["error_company_name"]) ? $context["error_company_name"] : null)) {
                // line 73
                echo "                                            <div class=\"invalid-tooltip\">";
                echo (isset($context["error_company_name"]) ? $context["error_company_name"] : null);
                echo "</div>
                                        ";
            }
            // line 75
            echo "                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\"
                                           for=\"input-currency\">";
            // line 79
            echo (isset($context["currency_text"]) ? $context["currency_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_oc_prom_yml_currency\" id=\"input-currency\"
                                                class=\"form-control\">
                                            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 84
                echo "                                                ";
                if (($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["currency_code"]) ? $context["currency_code"] : null))) {
                    // line 85
                    echo "                                                    <option value=\"";
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                    echo "\"
                                                            selected=\"selected\">";
                    // line 86
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                    echo "</option>
                                                ";
                } else {
                    // line 88
                    echo "                                                    <option value=\"";
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                    echo "</option>
                                                ";
                }
                // line 90
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\"
                                    >";
            // line 96
            echo (isset($context["export_file_text"]) ? $context["export_file_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <a href=\"";
            // line 98
            echo (isset($context["export_file"]) ? $context["export_file"] : null);
            echo "\" class=\"export-href\">";
            echo (isset($context["export_file"]) ? $context["export_file"] : null);
            echo "</a>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\"
                                    >";
            // line 103
            echo (isset($context["export_address_text"]) ? $context["export_address_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <a href=\"";
            // line 105
            echo (isset($context["export_href"]) ? $context["export_href"] : null);
            echo "\" class=\"export-href\">";
            echo (isset($context["export_href"]) ? $context["export_href"] : null);
            echo "</a>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
            // line 109
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_oc_prom_yml_status\" id=\"input-status\" class=\"form-control\">
                                            ";
            // line 112
            if ((isset($context["status"]) ? $context["status"] : null)) {
                // line 113
                echo "                                                <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                <option value=\"0\">";
                // line 114
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                            ";
            } else {
                // line 116
                echo "                                                <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
                // line 117
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                                            ";
            }
            // line 119
            echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-export\">

                                <div class=\"form-group row\">
 
                                    <label class=\"col-sm-2 control-label\">";
            // line 127
            echo (isset($context["categories_text"]) ? $context["categories_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 129
            echo (isset($context["categories_tooltip"]) ? $context["categories_tooltip"] : null);
            echo "\"></span>
                                </label>

                                    <div class=\"col-sm-10 cats-list\">
                                        <span class=\"cat-help\">";
            // line 133
            echo (isset($context["category_help"]) ? $context["category_help"] : null);
            echo "</span>
                                        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 135
                echo "                                            <div class=\"checkbox row-fluid category\">
                                                <div class=\"cat-row\">
                                                    <label class=\"form-check\">

                                                        <input type=\"checkbox\"
                                                               name=\"categories[";
                // line 140
                echo $this->getAttribute($context["category"], "category_id", array(), "array");
                echo "][upload_to_prom]\" ";
                echo ((($this->getAttribute($context["category"], "upload_to_prom", array(), "array") == 1)) ? ("checked") : (""));
                echo "
                                                               value=\"1\"
                                                               class=\"form-check-input\"/>
                                                        ";
                // line 143
                echo $this->getAttribute($context["category"], "name", array(), "array");
                echo "

                                                    </label>
                                                    <i class=\"fa fa-toggle-down prom-cat-arrow\"></i>
                                                </div>
                                                <table class=\"table table-striped table-bordered table-hover prom-cat-table\">
                                                    <tbody>
                                                    <tr>

                                                        <input type=\"hidden\" id=\"prom_cat_id\"
                                                               name=\"categories[";
                // line 153
                echo $this->getAttribute($context["category"], "category_id", array(), "array");
                echo "][prom_cat_id]\"
                                                               value=\"";
                // line 154
                echo $this->getAttribute($context["category"], "prom_cat_id", array(), "array");
                echo "\"/>

                                                        <td class=\"text-left\">
                                                            <span class=\"prom-cat-text\">";
                // line 157
                echo (isset($context["prom_category_text"]) ? $context["prom_category_text"] : null);
                echo "</span>:
                                                            <input type=\"text\"
                                                                   name=\"categories[";
                // line 159
                echo $this->getAttribute($context["category"], "category_id", array(), "array");
                echo "][prom_cat_name]\"
                                                                   value=\"";
                // line 160
                echo $this->getAttribute($context["category"], "prom_cat", array(), "array");
                echo "\"
                                                                   size=\"40\"
                                                                   maxlength=\"50\"
                                                                   class=\"form-control input-sm prom-cat-input\">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\"
                                           for=\"input-keyword-field\">";
            // line 177
            echo (isset($context["keywords_from_fields_text"]) ? $context["keywords_from_fields_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_oc_prom_yml_keywords_field\" id=\"input-keyword-field\"
                                                class=\"form-control\">
                                            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields_to_prom_keywords"]) ? $context["fields_to_prom_keywords"] : null));
            foreach ($context['_seq'] as $context["field_code"] => $context["field"]) {
                // line 182
                echo "                                                ";
                if (((isset($context["field_code_to_prom_keyword"]) ? $context["field_code_to_prom_keyword"] : null) == $context["field_code"])) {
                    // line 183
                    echo "                                                    <option value=\"";
                    echo $context["field_code"];
                    echo "\"
                                                            selected=\"selected\">";
                    // line 184
                    echo $context["field"];
                    echo "</option>
                                                ";
                } else {
                    // line 186
                    echo "                                                    <option value=\"";
                    echo $context["field_code"];
                    echo "\">";
                    echo $context["field"];
                    echo "</option>
                                                ";
                }
                // line 188
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_code'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    
                                    <label class=\"col-sm-2 control-label\">";
            // line 194
            echo (isset($context["products_have_main_cats_text"]) ? $context["products_have_main_cats_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 196
            echo (isset($context["products_have_main_cats_tooltip"]) ? $context["products_have_main_cats_tooltip"] : null);
            echo "\">
                                    </span>
                                </label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"checkbox\">
                                        <label><input type=\"checkbox\"
                                                      name=\"module_oc_prom_yml_products_have_main_cats\" ";
            // line 202
            echo ((((isset($context["products_have_main_cats"]) ? $context["products_have_main_cats"] : null) == 1)) ? ("checked") : (""));
            echo "
                                            value=\"1\"></label>
                                    </div>
                                         
                                    </div>
                                </div>

                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\">";
            // line 210
            echo (isset($context["upload_discounts_with_products_text"]) ? $context["upload_discounts_with_products_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"checkbox\">
                                        <label><input type=\"checkbox\"
                                                      name=\"module_oc_prom_yml_upload_product_discounts\" ";
            // line 214
            echo ((((isset($context["upload_products_discounts"]) ? $context["upload_products_discounts"] : null) == 1)) ? ("checked") : (""));
            echo "
                                            value=\"1\"></label>
                                    </div>
                                       
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\">";
            // line 221
            echo (isset($context["upload_attr_with_products_text"]) ? $context["upload_attr_with_products_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"checkbox\">
                                        <label><input type=\"checkbox\"
                                                      name=\"module_oc_prom_yml_upload_product_discounts\" ";
            // line 225
            echo ((((isset($context["upload_products_attrs"]) ? $context["upload_products_attrs"] : null) == 1)) ? ("checked") : (""));
            echo "
                                            value=\"1\"></label>
                                    </div>
                                       
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\">";
            // line 232
            echo (isset($context["not_upload_products_without_text"]) ? $context["not_upload_products_without_text"] : null);
            echo "</label>

                                    <div class=\"col-sm-10\" style=\"height: 50px; overflow: hidden;\">

                                        <div class=\"checkbox row-fluid\">

                                            <label class=\"form-check\">

                                                <input type=\"checkbox\"
                                                       name=\"module_oc_prom_yml_not_allowed_products_empty_fields[]\" ";
            // line 241
            echo ((twig_in_filter("image", (isset($context["not_allowed_products_empty_fields"]) ? $context["not_allowed_products_empty_fields"] : null))) ? ("checked") : (""));
            echo "
                                                       value=\"image\"
                                                       class=\"form-check-input\"/>
                                                ";
            // line 244
            echo (isset($context["images_text"]) ? $context["images_text"] : null);
            echo "

                                            </label>

                                        </div>

                                        <div class=\"checkbox row-fluid\">

                                            <label class=\"form-check\">

                                                <input type=\"checkbox\"
                                                       name=\"module_oc_prom_yml_not_allowed_products_empty_fields[]\" ";
            // line 255
            echo ((twig_in_filter("price", (isset($context["not_allowed_products_empty_fields"]) ? $context["not_allowed_products_empty_fields"] : null))) ? ("checked") : (""));
            echo "
                                                       value=\"price\"
                                                       class=\"form-check-input\"/>
                                                ";
            // line 258
            echo (isset($context["prices_text"]) ? $context["prices_text"] : null);
            echo "

                                            </label>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-attributes\">
                                <div class=\"form-group row\">

                                    <label class=\"col-sm-2 control-label\">";
            // line 271
            echo (isset($context["attrs_for_export_text"]) ? $context["attrs_for_export_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 273
            echo (isset($context["attrs_for_export_tooltip"]) ? $context["attrs_for_export_tooltip"] : null);
            echo "\"></span>
                                </label>
 

                                    <div class=\"col-sm-10 attrs-list\">
                                        <span class=\"attr-help\">";
            // line 278
            echo (isset($context["attr_help"]) ? $context["attr_help"] : null);
            echo "</span>
                                        ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attr_group"] => $context["data"]) {
                // line 280
                echo "                                            <div class=\"checkbox row-fluid\">
                                                <div>
                                                    <b>";
                // line 282
                echo $context["attr_group"];
                echo "</b>
                                                </div>
                                                ";
                // line 284
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), $context["attr_group"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 285
                    echo "                                                    <div>
                                                        <label class=\"form-check\">

                                                            <input type=\"checkbox\"
                                                                   name=\"module_oc_prom_yml_exported_attributes[]\"
                                                                   value=\"";
                    // line 290
                    echo $this->getAttribute($context["attribute"], "attr_id", array(), "array");
                    echo "\"
                                                                    ";
                    // line 291
                    echo ((twig_in_filter($this->getAttribute($context["attribute"], "attr_id", array(), "array"), (isset($context["exported_attributes"]) ? $context["exported_attributes"] : null))) ? ("checked") : (""));
                    echo "
                                                                   class=\"form-check-input\"/>
                                                            ";
                    // line 293
                    echo $this->getAttribute($context["attribute"], "name", array(), "array");
                    echo "

                                                        </label>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attr_group'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-options\">
                                <div class=\"form-group row\">
                                     
                                    <label class=\"col-sm-2 control-label\">";
            // line 307
            echo (isset($context["color_options_text"]) ? $context["color_options_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 309
            echo (isset($context["color_options_tooltip"]) ? $context["color_options_tooltip"] : null);
            echo "\"></span>
                                </label>

                                    <div class=\"col-sm-10 options-list\">
                                        ";
            // line 313
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 314
                echo "                                            <div class=\"checkbox row-fluid\">
                                                <div>
                                                    <label class=\"form-check\">

                                                        <input type=\"checkbox\"
                                                               name=\"module_oc_prom_yml_color_option[]\"
                                                               value=\"";
                // line 320
                echo $this->getAttribute($context["option"], "option_id", array(), "array");
                echo "\"
                                                                ";
                // line 321
                echo ((twig_in_filter($this->getAttribute($context["option"], "option_id", array(), "array"), (isset($context["color_options"]) ? $context["color_options"] : null))) ? ("checked") : (""));
                echo "
                                                               class=\"form-check-input\"/>
                                                        ";
                // line 323
                echo $this->getAttribute($context["option"], "name", array(), "array");
                echo "

                                                    </label>

                                                </div>

                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                   

                                    <label class=\"col-sm-2 control-label\">
                                    ";
            // line 338
            echo (isset($context["size_options_text"]) ? $context["size_options_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 340
            echo (isset($context["size_options_tooltip"]) ? $context["size_options_tooltip"] : null);
            echo "\"></span>
                                    <br/>
                                    ";
            // line 342
            echo (isset($context["size_options_unit_text"]) ? $context["size_options_unit_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 344
            echo (isset($context["size_options_unit_tooltip"]) ? $context["size_options_unit_tooltip"] : null);
            echo "\"></span>
                                </label>

                                    <div class=\"col-sm-10 options-list\">
                                        ";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 349
                echo "                                            <div class=\"checkbox row-fluid\">
                                                <div class=\"size-row\">
                                                    <label class=\"form-check\">

                                                        <input type=\"checkbox\"
                                                               name=\"module_oc_prom_yml_size_option[";
                // line 354
                echo $this->getAttribute($context["option"], "option_id", array(), "array");
                echo "]\"
                                                               value=\"";
                // line 355
                echo $this->getAttribute($context["option"], "option_id", array(), "array");
                echo "\"
                                                                ";
                // line 356
                echo ((twig_in_filter($this->getAttribute($context["option"], "option_id", array(), "array"), (isset($context["size_options"]) ? $context["size_options"] : null))) ? ("checked") : (""));
                echo "
                                                               class=\"form-check-input\"/>
                                                        ";
                // line 358
                echo $this->getAttribute($context["option"], "name", array(), "array");
                echo "
                                                    </label>
                                                    <select name=\"module_oc_prom_yml_size_option_unit[";
                // line 360
                echo $this->getAttribute($context["option"], "option_id", array(), "array");
                echo "]\"
                                                            class=\"size-select\">
                                                        <option value=\"\" selected=\"selected\">Нет</option>
                                                        ";
                // line 363
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["size_units"]) ? $context["size_units"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["size_unit"]) {
                    // line 364
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["size_options_unit"]) ? $context["size_options_unit"] : null), $this->getAttribute($context["option"], "option_id", array(), "array"), array(), "array") == $this->getAttribute($context["size_unit"], "code", array(), "array"))) {
                        // line 365
                        echo "                                                                <option value=\"";
                        echo $this->getAttribute($context["size_unit"], "code", array(), "array");
                        echo "\"
                                                                        selected>";
                        // line 366
                        echo $this->getAttribute($context["size_unit"], "name", array(), "array");
                        echo "</option>
                                                            ";
                    } else {
                        // line 368
                        echo "                                                                <option value=\"";
                        echo $this->getAttribute($context["size_unit"], "code", array(), "array");
                        echo "\">";
                        echo $this->getAttribute($context["size_unit"], "name", array(), "array");
                        echo "</option>
                                                            ";
                    }
                    // line 370
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size_unit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 371
                echo "                                                    </select>
                                                </div>


                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                   
                                 <label class=\"col-sm-2 control-label\">";
            // line 382
            echo (isset($context["change_prod_name_depends_option_text"]) ? $context["change_prod_name_depends_option_text"] : null);
            echo "
                                    <span data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"";
            // line 384
            echo (isset($context["change_prod_name_depends_option_tooltip"]) ? $context["change_prod_name_depends_option_tooltip"] : null);
            echo "\"></span>
                                </label>
                                    <div class=\"col-sm-10\">
 <div class=\"checkbox\">
                                        <label><input type=\"checkbox\"
                                                      name=\"module_oc_prom_yml_change_prod_name_depends_option\" ";
            // line 389
            echo ((((isset($context["change_prod_name_depends_option"]) ? $context["change_prod_name_depends_option"] : null) == 1)) ? ("checked") : (""));
            echo "
                                            value=\"1\"></label>
                                    </div>
 
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-2 col-form-label\">";
            // line 396
            echo (isset($context["main_img_from_option_text"]) ? $context["main_img_from_option_text"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"checkbox\">
                                        <label><input type=\"checkbox\"
                                                      name=\"module_oc_prom_yml_main_img_from_option\" ";
            // line 400
            echo ((((isset($context["main_img_from_option"]) ? $context["main_img_from_option"] : null) == 1)) ? ("checked") : (""));
            echo "
                                            value=\"1\"></label>
                                    </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        ";
        } else {
            // line 412
            echo "            <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\"
                           for=\"input-company-name\">";
            // line 415
            echo (isset($context["entry_activation_token"]) ? $context["entry_activation_token"] : null);
            echo "</label>
                    <div class=\"col-sm-8\">
                        <input type=\"text\" name=\"module_oc_prom_yml_license_token\"
                               placeholder=\"";
            // line 418
            echo (isset($context["entry_activation_token"]) ? $context["entry_activation_token"] : null);
            echo "\" id=\"input-license-token\"
                               class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
            // line 422
            echo (isset($context["activation_btn"]) ? $context["activation_btn"] : null);
            echo "</button>
                    </div>
                </div>
            </form>
        ";
        }
        // line 427
        echo "    </div>
</div>
<script>

    //PRom Category
    \$(document).ready(function () {

        \$(\"#load_prom_cats\").on('click', function () {
            \$.ajax({
                url: 'index.php?route=extension/module/oc_prom_yml/loadPromCategories&user_token=";
        // line 436
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
                dataType: 'json',
                success: function (json) {

                    location.reload();
                }
            });
        });

        \$('.prom-cat-input').autocomplete({

            'source': function (request, response) {

                \$.ajax({
                    url: 'index.php?route=extension/module/oc_prom_yml/autocompleteProm&user_token=";
        // line 450
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + \$(this).val(),

                    dataType: 'json',
                    success: function (json) {

                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['category_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$(this).val(item['label']);
                \$(this).closest(\"tr\").find(\"#prom_cat_id\").val(item['value']);
            }
        });

    });
</script>
";
        // line 472
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/oc_prom_yml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 472,  890 => 450,  873 => 436,  862 => 427,  854 => 422,  847 => 418,  841 => 415,  834 => 412,  819 => 400,  812 => 396,  802 => 389,  794 => 384,  789 => 382,  782 => 377,  771 => 371,  765 => 370,  757 => 368,  752 => 366,  747 => 365,  744 => 364,  740 => 363,  734 => 360,  729 => 358,  724 => 356,  720 => 355,  716 => 354,  709 => 349,  705 => 348,  698 => 344,  693 => 342,  688 => 340,  683 => 338,  674 => 331,  660 => 323,  655 => 321,  651 => 320,  643 => 314,  639 => 313,  632 => 309,  627 => 307,  618 => 300,  611 => 298,  600 => 293,  595 => 291,  591 => 290,  584 => 285,  580 => 284,  575 => 282,  571 => 280,  567 => 279,  563 => 278,  555 => 273,  550 => 271,  534 => 258,  528 => 255,  514 => 244,  508 => 241,  496 => 232,  486 => 225,  479 => 221,  469 => 214,  462 => 210,  451 => 202,  442 => 196,  437 => 194,  430 => 189,  424 => 188,  416 => 186,  411 => 184,  406 => 183,  403 => 182,  399 => 181,  392 => 177,  384 => 171,  367 => 160,  363 => 159,  358 => 157,  352 => 154,  348 => 153,  335 => 143,  327 => 140,  320 => 135,  316 => 134,  312 => 133,  305 => 129,  300 => 127,  290 => 119,  285 => 117,  280 => 116,  275 => 114,  270 => 113,  268 => 112,  262 => 109,  253 => 105,  248 => 103,  238 => 98,  233 => 96,  226 => 91,  220 => 90,  212 => 88,  207 => 86,  202 => 85,  199 => 84,  195 => 83,  188 => 79,  182 => 75,  176 => 73,  174 => 72,  169 => 70,  165 => 69,  159 => 66,  148 => 58,  144 => 57,  138 => 54,  128 => 47,  122 => 44,  116 => 41,  111 => 39,  103 => 35,  97 => 32,  92 => 31,  90 => 30,  85 => 28,  81 => 26,  74 => 22,  71 => 21,  68 => 20,  66 => 19,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ol class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li class="breadcrumb-item"><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if is_activated %}*/
/*             {% if error_warning %}*/
/*                 <div class="alert alert-danger alert-dismissible"><i*/
/*                             class="fas fa-exclamation-circle"></i> {{ error_warning }}*/
/*                     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                 </div>*/
/*             {% endif %}*/
/*             */
/*                     <div class="panel panel-default">*/
/*             <div class="panel-heading"><h3 class="panel-title">{{ text_edit }}</h3></div>*/
/*             <div class="panel-body">*/
/*                     {% if prom_category_warning is defined %}*/
/*                         <div class="alert-danger prom-cat-warning">{{ prom_category_warning }} <a id="load_prom_cats"*/
/*                                                                                                   href="{{ main_href }}">Загрузить</a>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module">*/
/*                         */
/*                         <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab"*/
/*                             ">{{ general_tab }}</a></li>*/
/*                         <li><a href="#tab-export" data-toggle="tab"*/
/*                             >{{ export_tab }}</a></li>*/
/*                         <li*/
/*                         "><a href="#tab-attributes" data-toggle="tab"*/
/*                         >{{ attributes_tab }}</a></li>*/
/*                         <li*/
/*                         "><a href="#tab-options" data-toggle="tab"*/
/*                         >{{ options_tab }}</a></li>*/
/*                     </ul>*/
/*                         <div class="tab-content">*/
/* */
/*                             <div class="tab-pane active" id="tab-general">*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label"*/
/*                                            for="input-company-name">{{ entry_activation_token }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="module_oc_prom_yml_license_token"*/
/*                                                value="{{ license_token }}"*/
/*                                                placeholder="{{ entry_activation_token }}" id="input-license-token"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/* */
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label"*/
/*                                            for="input-company-name">{{ entry_company_name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="module_oc_prom_yml_company_name"*/
/*                                                value="{{ company_name }}"*/
/*                                                placeholder="{{ entry_company_name }}" id="input-company-name"*/
/*                                                class="form-control"/>*/
/*                                         {% if error_company_name %}*/
/*                                             <div class="invalid-tooltip">{{ error_company_name }}</div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label"*/
/*                                            for="input-currency">{{ currency_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <select name="module_oc_prom_yml_currency" id="input-currency"*/
/*                                                 class="form-control">*/
/*                                             {% for currency in currencies %}*/
/*                                                 {% if(currency['code'] == currency_code) %}*/
/*                                                     <option value="{{ currency['code'] }}"*/
/*                                                             selected="selected">{{ currency['code'] }}</option>*/
/*                                                 {% else %}*/
/*                                                     <option value="{{ currency['code'] }}">{{ currency['code'] }}</option>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label"*/
/*                                     >{{ export_file_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <a href="{{ export_file }}" class="export-href">{{ export_file }}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label"*/
/*                                     >{{ export_address_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <a href="{{ export_href }}" class="export-href">{{ export_href }}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <select name="module_oc_prom_yml_status" id="input-status" class="form-control">*/
/*                                             {% if status %}*/
/*                                                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                 <option value="0">{{ text_disabled }}</option>*/
/*                                             {% else %}*/
/*                                                 <option value="1">{{ text_enabled }}</option>*/
/*                                                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                             {% endif %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab-export">*/
/* */
/*                                 <div class="form-group row">*/
/*  */
/*                                     <label class="col-sm-2 control-label">{{ categories_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ categories_tooltip }}"></span>*/
/*                                 </label>*/
/* */
/*                                     <div class="col-sm-10 cats-list">*/
/*                                         <span class="cat-help">{{ category_help }}</span>*/
/*                                         {% for category in categories %}*/
/*                                             <div class="checkbox row-fluid category">*/
/*                                                 <div class="cat-row">*/
/*                                                     <label class="form-check">*/
/* */
/*                                                         <input type="checkbox"*/
/*                                                                name="categories[{{ category['category_id'] }}][upload_to_prom]" {{ category['upload_to_prom'] == 1 ? 'checked' : '' }}*/
/*                                                                value="1"*/
/*                                                                class="form-check-input"/>*/
/*                                                         {{ category['name'] }}*/
/* */
/*                                                     </label>*/
/*                                                     <i class="fa fa-toggle-down prom-cat-arrow"></i>*/
/*                                                 </div>*/
/*                                                 <table class="table table-striped table-bordered table-hover prom-cat-table">*/
/*                                                     <tbody>*/
/*                                                     <tr>*/
/* */
/*                                                         <input type="hidden" id="prom_cat_id"*/
/*                                                                name="categories[{{ category['category_id'] }}][prom_cat_id]"*/
/*                                                                value="{{ category['prom_cat_id'] }}"/>*/
/* */
/*                                                         <td class="text-left">*/
/*                                                             <span class="prom-cat-text">{{ prom_category_text }}</span>:*/
/*                                                             <input type="text"*/
/*                                                                    name="categories[{{ category['category_id'] }}][prom_cat_name]"*/
/*                                                                    value="{{ category['prom_cat'] }}"*/
/*                                                                    size="40"*/
/*                                                                    maxlength="50"*/
/*                                                                    class="form-control input-sm prom-cat-input">*/
/*                                                         </td>*/
/*                                                     </tr>*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/* */
/*                                             </div>*/
/*                                         {% endfor %}*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label"*/
/*                                            for="input-keyword-field">{{ keywords_from_fields_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <select name="module_oc_prom_yml_keywords_field" id="input-keyword-field"*/
/*                                                 class="form-control">*/
/*                                             {% for field_code,field in fields_to_prom_keywords %}*/
/*                                                 {% if(field_code_to_prom_keyword == field_code) %}*/
/*                                                     <option value="{{ field_code }}"*/
/*                                                             selected="selected">{{ field }}</option>*/
/*                                                 {% else %}*/
/*                                                     <option value="{{ field_code }}">{{ field }}</option>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     */
/*                                     <label class="col-sm-2 control-label">{{ products_have_main_cats_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ products_have_main_cats_tooltip }}">*/
/*                                     </span>*/
/*                                 </label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="checkbox">*/
/*                                         <label><input type="checkbox"*/
/*                                                       name="module_oc_prom_yml_products_have_main_cats" {{ products_have_main_cats == 1 ? 'checked' : '' }}*/
/*                                             value="1"></label>*/
/*                                     </div>*/
/*                                          */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label">{{ upload_discounts_with_products_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="checkbox">*/
/*                                         <label><input type="checkbox"*/
/*                                                       name="module_oc_prom_yml_upload_product_discounts" {{ upload_products_discounts == 1 ? 'checked' : '' }}*/
/*                                             value="1"></label>*/
/*                                     </div>*/
/*                                        */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label">{{ upload_attr_with_products_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="checkbox">*/
/*                                         <label><input type="checkbox"*/
/*                                                       name="module_oc_prom_yml_upload_product_discounts" {{ upload_products_attrs == 1 ? 'checked' : '' }}*/
/*                                             value="1"></label>*/
/*                                     </div>*/
/*                                        */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label">{{ not_upload_products_without_text }}</label>*/
/* */
/*                                     <div class="col-sm-10" style="height: 50px; overflow: hidden;">*/
/* */
/*                                         <div class="checkbox row-fluid">*/
/* */
/*                                             <label class="form-check">*/
/* */
/*                                                 <input type="checkbox"*/
/*                                                        name="module_oc_prom_yml_not_allowed_products_empty_fields[]" {{ ('image' in not_allowed_products_empty_fields ? 'checked' : '') }}*/
/*                                                        value="image"*/
/*                                                        class="form-check-input"/>*/
/*                                                 {{ images_text }}*/
/* */
/*                                             </label>*/
/* */
/*                                         </div>*/
/* */
/*                                         <div class="checkbox row-fluid">*/
/* */
/*                                             <label class="form-check">*/
/* */
/*                                                 <input type="checkbox"*/
/*                                                        name="module_oc_prom_yml_not_allowed_products_empty_fields[]" {{ ('price' in not_allowed_products_empty_fields ? 'checked' : '') }}*/
/*                                                        value="price"*/
/*                                                        class="form-check-input"/>*/
/*                                                 {{ prices_text }}*/
/* */
/*                                             </label>*/
/* */
/*                                         </div>*/
/* */
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab-attributes">*/
/*                                 <div class="form-group row">*/
/* */
/*                                     <label class="col-sm-2 control-label">{{ attrs_for_export_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ attrs_for_export_tooltip }}"></span>*/
/*                                 </label>*/
/*  */
/* */
/*                                     <div class="col-sm-10 attrs-list">*/
/*                                         <span class="attr-help">{{ attr_help }}</span>*/
/*                                         {% for attr_group,data in attributes %}*/
/*                                             <div class="checkbox row-fluid">*/
/*                                                 <div>*/
/*                                                     <b>{{ attr_group }}</b>*/
/*                                                 </div>*/
/*                                                 {% for attribute in attributes[attr_group] %}*/
/*                                                     <div>*/
/*                                                         <label class="form-check">*/
/* */
/*                                                             <input type="checkbox"*/
/*                                                                    name="module_oc_prom_yml_exported_attributes[]"*/
/*                                                                    value="{{ attribute['attr_id'] }}"*/
/*                                                                     {{ attribute['attr_id'] in exported_attributes ? 'checked' : '' }}*/
/*                                                                    class="form-check-input"/>*/
/*                                                             {{ attribute['name'] }}*/
/* */
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         {% endfor %}*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab-options">*/
/*                                 <div class="form-group row">*/
/*                                      */
/*                                     <label class="col-sm-2 control-label">{{ color_options_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ color_options_tooltip }}"></span>*/
/*                                 </label>*/
/* */
/*                                     <div class="col-sm-10 options-list">*/
/*                                         {% for option in options %}*/
/*                                             <div class="checkbox row-fluid">*/
/*                                                 <div>*/
/*                                                     <label class="form-check">*/
/* */
/*                                                         <input type="checkbox"*/
/*                                                                name="module_oc_prom_yml_color_option[]"*/
/*                                                                value="{{ option['option_id'] }}"*/
/*                                                                 {{ option['option_id'] in color_options ? 'checked' : '' }}*/
/*                                                                class="form-check-input"/>*/
/*                                                         {{ option['name'] }}*/
/* */
/*                                                     </label>*/
/* */
/*                                                 </div>*/
/* */
/*                                             </div>*/
/*                                         {% endfor %}*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                    */
/* */
/*                                     <label class="col-sm-2 control-label">*/
/*                                     {{ size_options_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ size_options_tooltip }}"></span>*/
/*                                     <br/>*/
/*                                     {{ size_options_unit_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ size_options_unit_tooltip }}"></span>*/
/*                                 </label>*/
/* */
/*                                     <div class="col-sm-10 options-list">*/
/*                                         {% for option in options %}*/
/*                                             <div class="checkbox row-fluid">*/
/*                                                 <div class="size-row">*/
/*                                                     <label class="form-check">*/
/* */
/*                                                         <input type="checkbox"*/
/*                                                                name="module_oc_prom_yml_size_option[{{ option['option_id'] }}]"*/
/*                                                                value="{{ option['option_id'] }}"*/
/*                                                                 {{ option['option_id'] in size_options ? 'checked' : '' }}*/
/*                                                                class="form-check-input"/>*/
/*                                                         {{ option['name'] }}*/
/*                                                     </label>*/
/*                                                     <select name="module_oc_prom_yml_size_option_unit[{{ option['option_id'] }}]"*/
/*                                                             class="size-select">*/
/*                                                         <option value="" selected="selected">Нет</option>*/
/*                                                         {% for size_unit in size_units %}*/
/*                                                             {% if(size_options_unit[option['option_id']] == size_unit['code']) %}*/
/*                                                                 <option value="{{ size_unit['code'] }}"*/
/*                                                                         selected>{{ size_unit['name'] }}</option>*/
/*                                                             {% else %}*/
/*                                                                 <option value="{{ size_unit['code'] }}">{{ size_unit['name'] }}</option>*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                 </div>*/
/* */
/* */
/*                                             </div>*/
/*                                         {% endfor %}*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                    */
/*                                  <label class="col-sm-2 control-label">{{ change_prod_name_depends_option_text }}*/
/*                                     <span data-toggle="tooltip" title=""*/
/*                                           data-original-title="{{ change_prod_name_depends_option_tooltip }}"></span>*/
/*                                 </label>*/
/*                                     <div class="col-sm-10">*/
/*  <div class="checkbox">*/
/*                                         <label><input type="checkbox"*/
/*                                                       name="module_oc_prom_yml_change_prod_name_depends_option" {{ change_prod_name_depends_option == 1 ? 'checked' : '' }}*/
/*                                             value="1"></label>*/
/*                                     </div>*/
/*  */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group row">*/
/*                                     <label class="col-sm-2 col-form-label">{{ main_img_from_option_text }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="checkbox">*/
/*                                         <label><input type="checkbox"*/
/*                                                       name="module_oc_prom_yml_main_img_from_option" {{ main_img_from_option == 1 ? 'checked' : '' }}*/
/*                                             value="1"></label>*/
/*                                     </div>*/
/*                                          */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             <form action="{{ action }}" method="post">*/
/*                 <div class="form-group row">*/
/*                     <label class="col-sm-2 col-form-label"*/
/*                            for="input-company-name">{{ entry_activation_token }}</label>*/
/*                     <div class="col-sm-8">*/
/*                         <input type="text" name="module_oc_prom_yml_license_token"*/
/*                                placeholder="{{ entry_activation_token }}" id="input-license-token"*/
/*                                class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-2">*/
/*                         <button type="submit" class="btn btn-primary">{{ activation_btn }}</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* <script>*/
/* */
/*     //PRom Category*/
/*     $(document).ready(function () {*/
/* */
/*         $("#load_prom_cats").on('click', function () {*/
/*             $.ajax({*/
/*                 url: 'index.php?route=extension/module/oc_prom_yml/loadPromCategories&user_token={{ user_token }}',*/
/*                 dataType: 'json',*/
/*                 success: function (json) {*/
/* */
/*                     location.reload();*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('.prom-cat-input').autocomplete({*/
/* */
/*             'source': function (request, response) {*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=extension/module/oc_prom_yml/autocompleteProm&user_token={{ user_token }}&filter_name=' + $(this).val(),*/
/* */
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/* */
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['category_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $(this).val(item['label']);*/
/*                 $(this).closest("tr").find("#prom_cat_id").val(item['value']);*/
/*             }*/
/*         });*/
/* */
/*     });*/
/* </script>*/
/* {{ footer }}*/

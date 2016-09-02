<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_dd6ab12b553c400cb5fbf353999deac283373c7914bbaf72137aa7d8644fe4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) ? ("red") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) ? ("yellow") : (""))));
            // line 9
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()));
            // line 10
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecated Calls</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Silenced Errors</b>
                <span class=\"sf-toolbar-status\">";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo "
        ";
            // line 31
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "status" => (isset($context["status_color"]) ? $context["status_color"] : null)));
            echo "
    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) ? ("error") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 37
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()))) {
            // line 40
            echo "            <span class=\"count\">
                <span>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors", array())) : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 44
        echo "    </span>
";
    }

    // line 47
    public function block_panel($context, array $blocks = array())
    {
        // line 48
        echo "    <h2>Log Messages</h2>

    ";
        // line 50
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs", array()))) {
            // line 51
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 55
            echo "        ";
            // line 56
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 58
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "type", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array()), array(0 => twig_constant("E_DEPRECATED"), 1 => twig_constant("E_USER_DEPRECATED"))))) {
                    // line 59
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge((isset($context["deprecation_logs"]) ? $context["deprecation_logs"] : null), array(0 => $context["log"]));
                    // line 60
                    echo "            ";
                } elseif (($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "scream", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["log"], "context", array()), "scream", array()) == true))) {
                    // line 61
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge((isset($context["silenced_logs"]) ? $context["silenced_logs"] : null), array(0 => $context["log"]));
                    // line 62
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 63
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge((isset($context["debug_logs"]) ? $context["debug_logs"] : null), array(0 => $context["log"]));
                    // line 64
                    echo "            ";
                } else {
                    // line 65
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge((isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : null), array(0 => $context["log"]));
                    // line 66
                    echo "            ";
                }
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge\">";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : null)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 74
            if (twig_test_empty((isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : null))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["info_and_error_logs"]) ? $context["info_and_error_logs"] : null), "info", true);
                echo "
                    ";
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 90
            if (twig_test_empty((isset($context["deprecation_logs"]) ? $context["deprecation_logs"] : null))) {
                // line 91
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 95
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["deprecation_logs"]) ? $context["deprecation_logs"] : null), "deprecation", false, true);
                echo "
                    ";
            }
            // line 97
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 101
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["debug_logs"]) ? $context["debug_logs"] : null)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 104
            if (twig_test_empty((isset($context["debug_logs"]) ? $context["debug_logs"] : null))) {
                // line 105
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 109
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["debug_logs"]) ? $context["debug_logs"] : null), "debug");
                echo "
                    ";
            }
            // line 111
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced Errors <span class=\"badge\">";
            // line 115
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 118
            if (twig_test_empty((isset($context["silenced_logs"]) ? $context["silenced_logs"] : null))) {
                // line 119
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 123
                echo "                        ";
                echo $context["helper"]->getrender_table((isset($context["silenced_logs"]) ? $context["silenced_logs"] : null), "silenced");
                echo "
                    ";
            }
            // line 125
            echo "                </div>
            </div>

        </div>
    ";
        }
    }

    // line 132
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "    ";
            $context["helper"] = $this;
            // line 134
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, (isset($context["logs"]) ? $context["logs"] : null)), "channel", array(), "any", true, true);
            // line 135
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 139
            echo (((isset($context["show_level"]) ? $context["show_level"] : null)) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 140
            if ((isset($context["channel_is_defined"]) ? $context["channel_is_defined"] : null)) {
                echo "<th>Channel</th>";
            }
            // line 141
            echo "                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 147
                echo "                ";
                $context["css_class"] = (((isset($context["is_deprecation"]) ? $context["is_deprecation"] : null)) ? ("") : (((twig_in_filter($this->getAttribute(                // line 148
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((twig_in_filter($this->getAttribute(                // line 149
$context["log"], "priorityName", array()), array(0 => "NOTICE", 1 => "WARNING"))) ? ("status-warning") : (""))))));
                // line 151
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : null), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\">
                        ";
                // line 153
                if ((isset($context["show_level"]) ? $context["show_level"] : null)) {
                    // line 154
                    echo "                            <span class=\"colored text-bold nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 156
                echo "                        <span class=\"text-muted nowrap newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 159
                if ((isset($context["channel_is_defined"]) ? $context["channel_is_defined"] : null)) {
                    // line 160
                    echo "                        <td class=\"font-normal text-small text-bold nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 162
                echo "
                    <td class=\"font-normal\">";
                // line 163
                echo $context["helper"]->getrender_log_message((isset($context["category"]) ? $context["category"] : null), $this->getAttribute($context["loop"], "index", array()), $context["log"], (isset($context["is_deprecation"]) ? $context["is_deprecation"] : null));
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "        </tbody>
    </table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 170
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, $__is_deprecation__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 171
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message", array()), "html", null, true);
            echo "

    ";
            // line 173
            if ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : null)) {
                // line 174
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 175
                echo "        ";
                $context["stack_id"] = ((("sf-call-stack-" . (isset($context["category"]) ? $context["category"] : null)) . "-") . (isset($context["log_index"]) ? $context["log_index"] : null));
                // line 176
                echo "
        ";
                // line 177
                if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "errorCount", array(), "any", true, true)) {
                    // line 178
                    echo "            <span class=\"text-small text-bold\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array()), "errorCount", array()), "html", null, true);
                    echo " times)</span>
        ";
                }
                // line 180
                echo "
        ";
                // line 181
                if ((isset($context["stack"]) ? $context["stack"] : null)) {
                    // line 182
                    echo "            <button class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, (isset($context["stack_id"]) ? $context["stack_id"] : null), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide stack trace\">Show stack trace</button>
        ";
                }
                // line 184
                echo "
        ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 186
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 187
                            echo "                <ul class=\"sf-call-stack hidden\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["stack_id"]) ? $context["stack_id"] : null), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 189
                        echo "
            ";
                        // line 190
                        if ($this->getAttribute($context["call"], "class", array(), "any", true, true)) {
                            // line 191
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($context["call"], "class", array())) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array())));
                            // line 192
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", array(), "any", true, true)) {
                            // line 193
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array()));
                            // line 194
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", array(), "any", true, true)) {
                            // line 195
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", array());
                            // line 196
                            echo "            ";
                        } else {
                            // line 197
                            echo "                ";
                            $context["from"] = "-";
                            // line 198
                            echo "            ";
                        }
                        // line 199
                        echo "
            ";
                        // line 200
                        $context["file_name"] = ((($this->getAttribute($context["call"], "file", array(), "any", true, true) && $this->getAttribute($context["call"], "line", array(), "any", true, true))) ? (twig_last($this->env, twig_split_filter($this->env, twig_replace_filter($this->getAttribute($context["call"], "file", array()), array("\\" => "/")), "/"))) : (""));
                        // line 201
                        echo "
            <li>
                ";
                        // line 203
                        echo (isset($context["from"]) ? $context["from"] : null);
                        echo "
                ";
                        // line 204
                        if ((isset($context["file_name"]) ? $context["file_name"] : null)) {
                            // line 205
                            echo "                    <span class=\"text-small\">(called from ";
                            echo $this->env->getExtension('code')->formatFile($this->getAttribute($context["call"], "file", array()), $this->getAttribute($context["call"], "line", array()), (isset($context["file_name"]) ? $context["file_name"] : null));
                            echo ")</span>
                ";
                        }
                        // line 207
                        echo "            </li>

            ";
                        // line 209
                        if (($context["index"] == (twig_length_filter($this->env, (isset($context["stack"]) ? $context["stack"] : null)) - 1))) {
                            // line 210
                            echo "                </ul>
            ";
                        }
                        // line 212
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "    ";
            } else {
                // line 214
                echo "        ";
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array())))) {
                    // line 215
                    echo "            ";
                    $context["context_id"] = ((("context-" . (isset($context["category"]) ? $context["category"] : null)) . "-") . (isset($context["log_index"]) ? $context["log_index"] : null));
                    // line 216
                    echo "            ";
                    $context["context_dump"] = $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array()));
                    // line 217
                    echo "
            <div class=\"metadata\">
                <strong>Context</strong>:

                ";
                    // line 221
                    if ((twig_length_filter($this->env, (isset($context["context_dump"]) ? $context["context_dump"] : null)) > 120)) {
                        // line 222
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["context_dump"]) ? $context["context_dump"] : null), 0, 120), "html", null, true);
                        echo " ...

                    <a class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 224
                        echo twig_escape_filter($this->env, (isset($context["context_id"]) ? $context["context_id"] : null), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide full context\">Show full context</a>

                    <div id=\"";
                        // line 226
                        echo twig_escape_filter($this->env, (isset($context["context_id"]) ? $context["context_id"] : null), "html", null, true);
                        echo "\" class=\"context\">
                        <pre>";
                        // line 227
                        echo twig_escape_filter($this->env, (isset($context["context_dump"]) ? $context["context_dump"] : null), "html", null, true);
                        echo "</pre>
                    </div>
                ";
                    } else {
                        // line 230
                        echo "                    ";
                        echo twig_escape_filter($this->env, (isset($context["context_dump"]) ? $context["context_dump"] : null), "html", null, true);
                        echo "
                ";
                    }
                    // line 232
                    echo "            </div>
        ";
                }
                // line 234
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 234,  617 => 232,  611 => 230,  605 => 227,  601 => 226,  596 => 224,  590 => 222,  588 => 221,  582 => 217,  579 => 216,  576 => 215,  573 => 214,  570 => 213,  563 => 212,  559 => 210,  557 => 209,  553 => 207,  547 => 205,  545 => 204,  541 => 203,  537 => 201,  535 => 200,  532 => 199,  529 => 198,  526 => 197,  523 => 196,  520 => 195,  517 => 194,  514 => 193,  511 => 192,  508 => 191,  506 => 190,  503 => 189,  497 => 187,  494 => 186,  489 => 185,  486 => 184,  480 => 182,  478 => 181,  475 => 180,  469 => 178,  467 => 177,  464 => 176,  461 => 175,  458 => 174,  456 => 173,  450 => 171,  435 => 170,  418 => 166,  401 => 163,  398 => 162,  392 => 160,  390 => 159,  383 => 156,  377 => 154,  375 => 153,  369 => 151,  367 => 149,  366 => 148,  364 => 147,  347 => 146,  340 => 141,  336 => 140,  332 => 139,  326 => 135,  323 => 134,  320 => 133,  305 => 132,  296 => 125,  290 => 123,  284 => 119,  282 => 118,  276 => 115,  270 => 111,  264 => 109,  258 => 105,  256 => 104,  250 => 101,  244 => 97,  238 => 95,  232 => 91,  230 => 90,  223 => 87,  217 => 81,  211 => 79,  205 => 75,  203 => 74,  197 => 71,  192 => 68,  186 => 67,  183 => 66,  180 => 65,  177 => 64,  174 => 63,  171 => 62,  168 => 61,  165 => 60,  162 => 59,  159 => 58,  154 => 57,  151 => 56,  149 => 55,  143 => 51,  141 => 50,  137 => 48,  134 => 47,  129 => 44,  123 => 41,  120 => 40,  118 => 39,  113 => 37,  106 => 36,  103 => 35,  96 => 31,  93 => 30,  87 => 27,  77 => 22,  67 => 17,  63 => 15,  61 => 14,  58 => 13,  53 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}*/
/*         {% set icon %}*/
/*             {% set status_color = collector.counterrors ? 'red' : collector.countdeprecations ? 'yellow' : '' %}*/
/*             {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}*/
/*             {{ include('@WebProfiler/Icon/logger.svg') }}*/
/*             <span class="sf-toolbar-value">{{ error_count }}</span>*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Errors</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}">{{ collector.counterrors|default(0) }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Deprecated Calls</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}">{{ collector.countdeprecations|default(0) }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Silenced Errors</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.countscreams|default(0) }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/logger.svg') }}</span>*/
/*         <strong>Logs</strong>*/
/*         {% if collector.counterrors or collector.countdeprecations %}*/
/*             <span class="count">*/
/*                 <span>{{ collector.counterrors ?: collector.countdeprecations }}</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Log Messages</h2>*/
/* */
/*     {% if collector.logs is empty %}*/
/*         <div class="empty">*/
/*             <p>No log messages available.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {# sort collected logs in groups #}*/
/*         {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}*/
/*         {% for log in collector.logs %}*/
/*             {% if log.context.level is defined and log.context.type is defined and log.context.type in [constant('E_DEPRECATED'), constant('E_USER_DEPRECATED')] %}*/
/*                 {% set deprecation_logs = deprecation_logs|merge([log]) %}*/
/*             {% elseif log.context.scream is defined and log.context.scream == true  %}*/
/*                 {% set silenced_logs = silenced_logs|merge([log]) %}*/
/*             {% elseif log.priorityName == 'DEBUG' %}*/
/*                 {% set debug_logs = debug_logs|merge([log]) %}*/
/*             {% else %}*/
/*                 {% set info_and_error_logs = info_and_error_logs|merge([log]) %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <div class="sf-tabs">*/
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Info. &amp; Errors <span class="badge">{{ info_and_error_logs|length }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if info_and_error_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages of this level.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(info_and_error_logs, 'info', true) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tab">*/
/*                 {# 'deprecation_logs|length' is not used because deprecations are*/
/*                 now grouped and the group count doesn't match the message count #}*/
/*                 <h3 class="tab-title">Deprecations <span class="badge">{{ collector.countdeprecations|default(0) }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if deprecation_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages about deprecated features.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Debug <span class="badge">{{ debug_logs|length }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if debug_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages of this level.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(debug_logs, 'debug') }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tab">*/
/*                 <h3 class="tab-title">Silenced Errors <span class="badge">{{ collector.countscreams|default(0) }}</span></h3>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% if silenced_logs is empty %}*/
/*                         <div class="empty">*/
/*                             <p>There are no log messages of this level.</p>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ helper.render_table(silenced_logs, 'silenced') }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}*/
/*     {% import _self as helper %}*/
/*     {% set channel_is_defined = (logs|first).channel is defined %}*/
/* */
/*     <table class="logs">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ show_level ? 'Level' : 'Time' }}</th>*/
/*                 {% if channel_is_defined %}<th>Channel</th>{% endif %}*/
/*                 <th>Message</th>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*             {% for log in logs %}*/
/*                 {% set css_class = is_deprecation ? ''*/
/*                     : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'*/
/*                     : log.priorityName in ['NOTICE', 'WARNING'] ? 'status-warning'*/
/*                 %}*/
/*                 <tr class="{{ css_class }}">*/
/*                     <td class="font-normal text-small">*/
/*                         {% if show_level %}*/
/*                             <span class="colored text-bold nowrap">{{ log.priorityName }}</span>*/
/*                         {% endif %}*/
/*                         <span class="text-muted nowrap newline">{{ log.timestamp|date('H:i:s') }}</span>*/
/*                     </td>*/
/* */
/*                     {% if channel_is_defined %}*/
/*                         <td class="font-normal text-small text-bold nowrap">{{ log.channel }}</td>*/
/*                     {% endif %}*/
/* */
/*                     <td class="font-normal">{{ helper.render_log_message(category, loop.index, log, is_deprecation) }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endmacro %}*/
/* */
/* {% macro render_log_message(category, log_index, log, is_deprecation = false) %}*/
/*     {{ log.message }}*/
/* */
/*     {% if is_deprecation %}*/
/*         {% set stack = log.context.stack|default([]) %}*/
/*         {% set stack_id = 'sf-call-stack-' ~ category ~ '-' ~ log_index %}*/
/* */
/*         {% if log.context.errorCount is defined %}*/
/*             <span class="text-small text-bold">({{ log.context.errorCount }} times)</span>*/
/*         {% endif %}*/
/* */
/*         {% if stack %}*/
/*             <button class="btn-link text-small sf-toggle" data-toggle-selector="#{{ stack_id }}" data-toggle-alt-content="Hide stack trace">Show stack trace</button>*/
/*         {% endif %}*/
/* */
/*         {% for index, call in stack if index > 1 %}*/
/*             {% if index == 2 %}*/
/*                 <ul class="sf-call-stack hidden" id="{{ stack_id }}">*/
/*             {% endif %}*/
/* */
/*             {% if call.class is defined %}*/
/*                 {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}*/
/*             {% elseif call.function is defined %}*/
/*                 {% set from = call.function|abbr_method %}*/
/*             {% elseif call.file is defined %}*/
/*                 {% set from = call.file %}*/
/*             {% else %}*/
/*                 {% set from = '-' %}*/
/*             {% endif %}*/
/* */
/*             {% set file_name = (call.file is defined and call.line is defined) ? call.file|replace({'\\': '/'})|split('/')|last %}*/
/* */
/*             <li>*/
/*                 {{ from|raw }}*/
/*                 {% if file_name %}*/
/*                     <span class="text-small">(called from {{ call.file|format_file(call.line, file_name)|raw }})</span>*/
/*                 {% endif %}*/
/*             </li>*/
/* */
/*             {% if index == stack|length - 1 %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% if log.context is defined and log.context is not empty %}*/
/*             {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}*/
/*             {% set context_dump = profiler_dump(log.context) %}*/
/* */
/*             <div class="metadata">*/
/*                 <strong>Context</strong>:*/
/* */
/*                 {% if context_dump|length > 120 %}*/
/*                     {{ context_dump[:120] }} ...*/
/* */
/*                     <a class="btn-link text-small sf-toggle" data-toggle-selector="#{{ context_id }}" data-toggle-alt-content="Hide full context">Show full context</a>*/
/* */
/*                     <div id="{{ context_id }}" class="context">*/
/*                         <pre>{{ context_dump }}</pre>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ context_dump }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
<?php
if (!class_exists("WhatsappEstrategia")) {
    class WhatsappEstrategia extends ET_Builder_Module {
        public $slug = "whatsapp_estrategia";
        public $vb_support = "off";

        public function init() {
            $this->name = "WhatsApp Estratégia";
            $this->child_slug = "whatsapp_item";
            $this->child_item_text = __("WhatsApp");
            $this->main_css_element = "%%order_class%%";
        }

        public function get_fields() {
            $fields = array(
                "border_card_color" => array(
                    "label" => __("Cor da borda do botão", "dp_dmb"),
                    "type" => "color",
                    "default" => __(" #FFFFFF", "dp_dmb"),
                    "tab_slug" => "general",
                    "toggle_slug" => "personalizacao",
                    "description" => __("", "dp_dmb"),
                ),
                "background_border_card_color" => array(
                    "label" => __("Cor do background o botão", "dp_dmb"),
                    "type" => "color",
                    "default" => __(" #25d366", "dp_dmb"),
                    "tab_slug" => "general",
                    "toggle_slug" => "personalizacao",
                    "description" => __("", "dp_dmb"),
                ),
            );
            return $fields;
        }

        public function get_settings_modal_toggles() {
            return array(
                "general" => array(
                    "toggles" => array(
                        "layout" => esc_html__("Estrutura", "dp_dmb"),
                        "personalizacao" => esc_html__("Personalização", "dp_dmb"),
                        "depoimentos" => esc_html__("WhatsApp", "dp_dmb"),
                        "background" => false,
                        "admin_label" => esc_html__("Rótulo", "dp_dmb"),
                    ),
                ),
                "advanced" => array(
                    "toggles" => array(
                        "icon" => false,
                    ),
                ),
            );
        }

        public function get_advanced_fields_config() {
            return array(
                'background' => false,
                'borders' => false,
                'box_shadow' => false,
                'button' => false,
                'filters' => false,
                'fonts' => false,
                'margin_padding' => false,
                'max_width' => false,
            );
        }

        public function get_custom_css_fields_config() {
            return array();
        }

        public function before_render() {
            wp_enqueue_style('whatsapp-css', plugin_dir_url(__DIR__) . 'assets/css/whatsapp.css');
            wp_enqueue_script('whatsapp-js', plugin_dir_url(__DIR__) . 'assets/js/whatsapp.js', ['jquery'], '', true);
        }

        protected function _render_module_wrapper($output = '', $render_slug = '') {
            return $output;
        }

        public function render($attrs, $content = null, $render_slug) {
            ob_start();

        ?>
        <style>
            #whatsapp-floating-button {
                background: <?php echo $this->props['background_border_card_color'];
    ?> !important;
    border: 4px solid <?php echo $this->props['border_card_color'];
    ?> !important;
            }
        </style>
            <div id="whatsapp" class="whatsapp">
                <?php echo $this->props['content']; ?>
            </div>
        <?php
            $output = ob_get_clean();
            return $this->_render_module_wrapper($output, $render_slug);
        }
    }

    new WhatsappEstrategia;
}
if (!class_exists("Whatsapp")) {

    class Whatsapp extends ET_Builder_Module
    {

        public $slug = "whatsapp_item";
        public $vb_support = "off";

        public function init()
        {
            $this->name = "Header";
            $this->type = "child";
            $this->child_title_var = "Dados WhatsApp";
            $this->main_css_element = "%%order_class%%";
        }

        public function get_fields()
        {
            $fields = array(
                // "imagem" => array(
                //     "label" => __("Imagem do botão", "dp_dmb"),
                //     "type" => "upload",
                //     "default" => __(" ", "dp_dmb"),
                //     "tab_slug" => "general",
                //     "toggle_slug" => "whatsapp",
                //     "description" => __("Insira a imagem do botão WhatsApp.", "dp_dmb"),
                // ),
                "titulo" => array(
                    "label" => __("CTA do botão", "dp_dmb"),
                    "type" => "text",
                    "default" => __(" ", "dp_dmb"),
                    "tab_slug" => "general",
                    "toggle_slug" => "whatsapp",
                    "description" => __("", "dp_dmb"),
                ),
                "link" => array(
                    "label" => __("Link/URL do grupo de WhatsApp", "dp_dmb"),
                    "type" => "url",
                    "default" => __(" ", "dp_dmb"),
                    "tab_slug" => "general",
                    "toggle_slug" => "whatsapp",
                    "description" => __("Insira o link URL do grupo de WhatsApp.", "dp_dmb"),
                ),               
            );
            return $fields;
        }

        public function get_settings_modal_toggles()
        {
            return array(
                "general" => array(
                    "toggles" => array(
                        "layout" => esc_html__("Layout", "dp_dmb"),
                        "whatsapp" => esc_html__("Whatsapp", "dp_dmb"),
                        "background" => false,
                        "admin_label" => esc_html__("Admin Label", "dp_dmb"),
                    ),
                ),
                "advanced" => array(
                    "toggles" => array(
                        "icon" => false,
                    ),
                ),
            );
        }

        public function get_advanced_fields_config()
        {
            return array(
                'background' => false,
                'borders' => false,
                'box_shadow' => false,
                'button' => false,
                'filters' => false,
                'fonts' => false,
                'margin_padding' => false,
                'max_width' => false,
            );
        }

        public function get_custom_css_fields_config()
        {
            return array();
        }

        protected function _render_module_wrapper($output = '', $render_slug = '')
        {
            return $output;
        }

        public function render($attrs, $content = null, $render_slug)
        {
            ob_start();
            // $imagem = $this->props['imagem'];
            $titulo = $this->props['titulo'];
            $link = $this->props['link'];
        ?>
            <div id="whatsapp-floating-button">
                <a class="whatsapp-content" href="<?php echo $link; ?>" target="_blank">
                    <img width="80" height="80" src="https://gratis.estrategiaconcursos.com.br/wp-content/plugins/whatsapp_estrategia/assets/images/whatsapp-icon-logo.svg" alt="WhatsApp">
                    <span class="titulo-botao"><?php echo $titulo; ?></span>
                </a>
            </div>
        <?php
            $output = ob_get_clean();
            return $this->_render_module_wrapper($output, $render_slug);
        }
    }
    new Whatsapp;
}
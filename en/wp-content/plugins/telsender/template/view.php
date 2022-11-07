<?php
if (!defined('ABSPATH')) {
    exit;
}

use pechenki\Telsender\clasess\log;

$caunt = 0;
//  log::clearLog();

?>

<div class="telsenderSetting">
    <h2>Настройки плагина Telsender </h2>


    <table>


        <tr>
            <td style="width: 80%">


                <form method="post" action="options.php" id="formsetinvendor">

                    <fieldset>
                        <legend><?php _e("Settings", "telsender"); ?></legend>
                        <p><?php _e("To get a token and register your bot, you need to add a bot", "telsender"); ?>
                            <a href="https://telegram.im/BotFather" target="_blank"> @BotFather</a>.

                            <?php _e("Further, according to the instructions of the bot, you will register your own and at the end you will be given a token", "telsender"); ?>

                        </p>
                        <p><?php _e("To find out the chat id", "telsender"); ?> <a id="getUpdates"
                                                                                   href="https://api.telegram.org/bot{token}/getUpdates"><strong>https://api.telegram.org/bot{token}/getUpdates</strong></a>
                        </p>

                        <label>
                            <input value="0" type="hidden" name="tscfwc_enabled" type="checkbox"/>
                            <input value="1" <?php echo checked($this->tscfwc_enabled); ?> name="tscfwc_enabled"
                                   type="checkbox"/>
                            <span>Enabled</span></label>
                        <div>
                            <label>
                                <input type="text" value="<?php echo esc_attr($this->tscfwc_setting_token); ?>"
                                       name="tscfwc_setting_token" placeholder=""/>
                                <span><?php _e("Token", "telsender"); ?></span>
                            </label>
                        </div>
                        <div>
                            <label><input type="text" value="<?php echo esc_attr($this->tscfwc_setting_chatid); ?>"
                                          name="tscfwc_setting_chatid"
                                          placeholder=""/><span> <?php _e('ChatID', 'telsender'); ?></span></label>
                        </div>
                    </fieldset>

                    <?php
                    if ($cf7List) {
                        $this->render('template/contact-form', [
                            'cf7List' => $cf7List
                        ]);
                    }?>


                    <?php

                    if ($wpfList){
                        $this->render('template/wp-forms', [
                            'wpfList' => $wpfList
                        ]);
                    }
                    ?>

                    <?php
                    /** @var string $is_check_wc */
                    /** @var string $list_statuse_wc - list statuses */

                    $this->render('template/woocommerce', [
                        'is_check_wc' => $is_check_wc,
                        'list_statuse_wc' => $list_statuse_wc,
                    ]); ?>

                    <!--******-->


                </form>

                <button class="button-primary" id="telsetingven"> Save</button>

            </td>

            <td style="border-left:1px dashed #ccc;padding-left:20px;max-width: 400px;">
                <?php include 'help.php'; ?>
                <?php include 'list-shortcode-html.php'; ?>

                <a href="https://pechenki.top/telsender.html"><?php _e("More information", "telsender"); ?> </a>
                <hr/>
                <form method="post" action="">
                    <input type="submit" name="curssent" class="button-primary" value="Отправить тестовое слово "/>
                    <button type="button" onclick="telsenderInfo()"><span
                                class="dashicons dashicons-cloud-upload"></span> Tested
                    </button>

                    <div class="result-tested">

                    </div>
                </form>
                <hr/>

                <strong>Автор проекта : Александр

                    <a href="//Pechenki.top" target="_blank">сайт плагина</a>

                </strong>

                <a href="https://pechenki.top/plugin-and-modules/telsenderPro.html" target="_blank">
                    <b>TelsenderPro</b>
                </a>

            </td>

        </tr>

    </table>

</div>


<script>

</script>
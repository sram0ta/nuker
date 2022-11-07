<fieldset>
    <legend> <?php _e("Wp Form", "telsender"); ?> </legend>
    <?php

    echo '<select multiple id="wpforms_list" name="tscfwc_setting_acseswpforms[]" >';
    foreach ($wpfList as $pst): ?>
        <option <?php echo esc_attr( in_array($pst->ID, (array) $this->tscfwc_setting_acseswpforms) ? 'selected' : '') ?>  value="<?php echo esc_attr( $pst->ID ) ?>"><?php echo esc_attr($pst->post_title); ?></option>
    <?php endforeach;

    echo '</select>';
    ?>
</fieldset>

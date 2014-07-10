         <p>PHONE: <?php
            $options = get_option( 'cb_options' );
            echo $options['contacts_phone'];
         ?></p>
         
         <a href="tel:<?php $options = get_option( 'cb_options' ); echo str_replace(' ','', $options['contacts_phone']); ?>"><?php $options = get_option( 'cb_options' ); echo $options['contacts_phone']; ?></a>
         
         <p>EMAIL: <?php
            $options = get_option( 'cb_options' );
            echo $options['contacts_email'];
         ?></p>     
         
         <p>ADDRESS: <?php
            $options = get_option( 'cb_options' );
            echo $options['contacts_address'];
         ?></p>
         
         // remove auto p
         <?php $options = get_option( 'cb_options' ); echo wp_filter_nohtml_kses($options['contacts_address2']); ?>
         
         // remove br, use with google maps shortcode
         <?php $options = get_option( 'cb_options' ); $address=$options['contacts_address']; echo wp_filter_nohtml_kses($address); ?>
          <?php echo do_shortcode('[tb_google_map address="'.$address.'" zoom="12" height="340px"]'); ?>
         
          <p>TWITTER: <?php
            $options = get_option( 'cb_options' );
            echo $options['social_twitter'];
         ?></p>
         
         <p>FACEBOOK: <?php
            $options = get_option( 'cb_options' );
            echo $options['social_facebook'];
         ?></p>
         
         <p>G+: <?php
            $options = get_option( 'cb_options' );
            echo $options['social_google'];
         ?></p>
         
         <p>Linkedin: <?php
            $options = get_option( 'cb_options' );
            echo $options['social_linkedin'];
         ?></p>

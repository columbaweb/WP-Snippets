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
         
         // remove br
         <?php $options = get_option( 'cb_options' ); $address=$options['contacts_address']; echo wp_filter_nohtml_kses($address); ?>
         
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

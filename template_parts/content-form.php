<div id="contact-form">
  <h2 class="site-subtitle">How can I help you?</h2>

  <p><strong>You can contact us using this form day or night, 24 hours a day, 7 days a week, 365 days a
    year.</strong> You will hear back from one of our attorneys the same day or next day.</p>

  <div class="my-form clearfix">
    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
  </div>
</div>

<?php if(ot_get_option('phone_number')): ?>
<div class="disclosure">
  <p>If you would like to speak with a team member immediately, we are available 24/7 via LIVE CHAT — or via
    phone toll-free from 8am – 10pm PST at: <span><?php echo ot_get_option('phone_number') ?></span></p>
</div>
<?php endif; ?>
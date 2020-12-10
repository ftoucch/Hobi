
<footer>
<?php 
$footer_txt = get_theme_mod('HOBI_footer_text','HOBI | Powered By Wordpress');
$footer_txt_col = get_theme_mod('footer_text_color');
?>
<h2 class="footer-text" style="color:<?php echo $footer_txt_col; ?>"> <?php echo $footer_txt ?> </h2>

</footer>

<?php wp_footer();?>
</body>
</html>



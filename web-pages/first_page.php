

<?php $link_name = "second page";?>
<?php $id = 2 ;?>
<?php $company = "johnson & johnson";?>
<a href="/web-pages/second_page.php?id=<?php echo $id;?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name;?></a>
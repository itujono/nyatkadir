<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php
if ($plugins == 'home') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/materialdesignicons.min.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/bulma.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/normalize.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/settings.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/animate.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/revolution-slider.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/owl.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/main.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/responsive.css">
<?php
} elseif ($plugins == 'general_addon') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/materialdesignicons.min.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/bulma.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/normalize.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/settings.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/animate.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/owl.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/main.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/responsive.css">

<?php
} elseif ($plugins == 'gallery') {
    ?>
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/bulma.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/settings.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/responsive.css">
    <?php
} ?>

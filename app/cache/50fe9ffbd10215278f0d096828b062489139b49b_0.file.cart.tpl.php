<?php
/* Smarty version 3.1.29, created on 2016-03-30 15:49:56
  from "/home/greg/NetBeansProjects/FlowerShop/templates/cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc2de40d6175_12704432',
  'file_dependency' => 
  array (
    '50fe9ffbd10215278f0d096828b062489139b49b' => 
    array (
      0 => '/home/greg/NetBeansProjects/FlowerShop/templates/cart.tpl',
      1 => 1458997494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56fc2de40d6175_12704432 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "localstyle", array (
  0 => 'block_188734868756fc2de40cafa8_01929489',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_212529706456fc2de40cf347_22315359',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'localstyle'}  file:cart.tpl */
function block_188734868756fc2de40cafa8_01929489($_smarty_tpl, $_blockParentStack) {
?>

  <link href="css/table-display.css" rel="stylesheet" />
  <style type="text/css">
  </style>
<?php
}
/* {/block 'localstyle'} */
/* {block 'content'}  file:cart.tpl */
function block_212529706456fc2de40cf347_22315359($_smarty_tpl, $_blockParentStack) {
?>


  <h2>My Cart</h2>

  

  <pre>
    <?php echo print_r($_smarty_tpl->tpl_vars['cart_data']->value);?>
  
  </pre>

<?php
}
/* {/block 'content'} */
}

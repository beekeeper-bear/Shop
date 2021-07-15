<?php
/* Smarty version 3.1.39, created on 2021-07-15 14:47:35
  from 'W:\domains\Magazin\new3\views\default\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f02057de45b3_29690954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ddc798205a16f38b696fd688673452d3fbb24f' => 
    array (
      0 => 'W:\\domains\\Magazin\\new3\\views\\default\\cart.tpl',
      1 => 1626349649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f02057de45b3_29690954 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

        <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/fontello.css">
        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/style.css"" />


    </head>
    <body>

<div class="main">

<header>
    <nav class="header-nav">

<ul class="nav justify-content-start header-menu-top ">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Оплата</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Доставка</a>
    </li>
    <li class="nav-item">
        <a class="nav-link icon-phone" href="#">(+38) 097-741-63-30</a>
    </li>
    
</ul>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><spain>Shop Shop</spain></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <form class="mx-auto ">
            <input class="form-control rounded-pill width-search " type="search" placeholder="Поиск" aria-label="Поиск">
           
           
          </form>







  <ul class="navbar-nav ms-auto me-5 mb-lg-0">
        
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">
                <i class="icon-user-o"></i>
              
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Действие</a></li>
              <li><a class="dropdown-item" href="#">Другое действие</a></li>
            </ul>
          </li>
          

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                <i class="icon-basket">20</i>
            </a>
        </li>

        </ul>

        

      </div>
    </div>
  </nav>

        </header>

<section class="main-content">

    <div class="conteiner">

    <div class="row">

   


        <div class=" col-xl-12 col-lg-12 col-sm-12">
        
        
            <div class="product-card mt-4">
                <div class="product-thumb">
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;
echo $_smarty_tpl->tpl_vars['result']->value['img'];?>
" alt=""></a>
                </div>
        
                <div class="product-detalis">
                    <h4><a href="#"><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</a></h4>
        
                    <p><?php echo $_smarty_tpl->tpl_vars['result']->value['lorem'];?>

                    </p>
                </div>
        
                <div class="product-bottom-details"> </div>
        
                <div class="product-links">
                    <div class="product-price text-center">
                        <?php echo $_smarty_tpl->tpl_vars['result']->value['price'];?>
гр.
                    </div>
        
                    <div class="counter__container">
        
                        <button class="minus">
                            <span class="icon-minus">-</span>
                        </button>
        
                        <div class="counter-input">
                            <input class="counter" type="text" value="1" data-max="999999" data-step="1" data-min="1">
                        </div>
        
                        <button class="plus">
                            <span class="icon-plus">+</span>
                        </button>
        
                    </div>
        
                    <div class="button-links ">
                        <button class="btn btn-outline-success pe-1 ps-1 " type="submit">Купить</button>
        
                    </div>
        
        
        
        
                </div>
        
            </div><!-- produkt-card -->
        
        </div>

     

    </div> <!-- row -->

</div>
</section>
<!-- main-content -->


    </div>   <!--  main-- -->

<footer>
        <footer class="footer">
          <div class="container">
        <div class="row">
        <div class="col-md-3 col-6">
         <h4> Информация</h4>
         <ul class="list-unstyled">
             <li><a href="#">Главная</a></li>
             <li><a href="#">О магазине </a></li>
             <li><a href="#">Оплата и доставка</a></li>
             <li><a href="#">Контакты</a></li>
         </ul>
        </div>

        <div class="col-md-3 col-6">
            <h4> Время работы</h4>
            <ul class="list-unstyled">
                <li><a href="#">пн-вс:9:00 - 18:00</a></li>
                <li><a href="#">без перерыва </a></li>
            </ul>
        </div>

            <div class="col-md-3 col-6">
                <h4>Телефоны</h4>
                <ul class="list-unstyled">
                    <li><a href="#">0977416330</a></li>
                    <li><a href="#">0667070775</a></li>
                    <li><a href="#" class="icon-gmail"></a></li>
                </ul>
            </div>

                <div class="col-md-3 col-6">
                    <h4>Мы в сети</h4>
                    <ul class="list-unstyled footer-icons">
                        <li><a href="#" class="icon-facebook-rect"></a></li>
                       
                        <li><a href="#" class="icon-vk"></a></li>
                        <li><a href="#" class="icon-twitter"></a></li>
                       
                
                    </ul>
                </div>

        </div>

          </div>
        </footer>

</footer>
        <?php echo '<script'; ?>
 src="js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}

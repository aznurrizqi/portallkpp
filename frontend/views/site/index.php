<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
            	<?= Html::img('img/slide1.jpg');?>
                <div class="carousel-caption">
                    <h4>Header of Slide 1</h4>
                </div>
            </div>
            <div class="item">
            	<?= Html::img('img/slide2.jpg');?>
                <div class="carousel-caption">
                    <h4>Header of Slide 2</h4>
                </div>
            </div>
            <div class="item">
            	<?= Html::img('img/slide3.jpg');?>
                <div class="carousel-caption">
                    <h4>Header of Slide3</h4>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="lkpp-site">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="search-box">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="service-list">
                	<ul class="nav nav-pills nav-justified">
                        <li class="nav-item active">
                            <a class="nav-link" href="#menu1" data-toggle="tab">PBJ APBN/APBD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu2" data-toggle="tab">PBJ Non APBN/APBD</a>
                        </li>
                    </ul>
                    <div class="tab-content float-right">
                        <div class="tab-pane active centered-pills" role="tabpanel" id="menu1">
                        	<ul class="nav nav-pills nav-modified text-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#menu11" data-toggle="tab">Pelaku Usaha</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu12" data-toggle="tab">PA/KPA</a>
                                </li>
                            </ul>
                            <div class="tab-subcontent float-right">
                                <div class="tab-pane active" role="tabpanel" id="menu11">
                                
                                </div>
                                <div class="tab-pane" role="tabpanel" id="menu12">
                                
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="menu2">
                        
                        </div>
                    </div>
				</div>
            </div>
        </div>

<!--         <div class="row"> -->
<!--             <div class="col-lg-4"> -->
<!--                 <h2>Heading</h2> -->

<!--                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et -->
<!--                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip -->
<!--                     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu -->
<!--                     fugiat nulla pariatur.</p> -->

<!--                 <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p> -->
<!--             </div> -->
<!--             <div class="col-lg-4"> -->
<!--                 <h2>Heading</h2> -->

<!--                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et -->
<!--                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip -->
<!--                     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu -->
<!--                     fugiat nulla pariatur.</p> -->

<!--                 <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p> -->
<!--             </div> -->
<!--             <div class="col-lg-4"> -->
<!--                 <h2>Heading</h2> -->

<!--                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et -->
<!--                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip -->
<!--                     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu -->
<!--                     fugiat nulla pariatur.</p> -->

<!--                 <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p> -->
<!--             </div> -->
<!--         </div> -->

    </div>
</div>

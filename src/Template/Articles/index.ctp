<?php
use Cake\Utility\Text;
?>
<div class="page-heading-two">
    <div class="container">
        <h2>Blog One <span>Something goes here</span></h2>
        <div class="breads">
            Home / <a href="#">Page</a> / <a href="#">Sub Page</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="blog-one">
        <div class="row">
            <!-- Mainbar column -->
            <div class="col-md-8">
            
                <!-- Blog item starts -->
                <?php foreach ($articles as $article): ?>
                <div class="blog-one-item">
                    <!-- blog One Img -->
                    <div class="blog-one-img">
                        <!-- Image -->
                        <a href="#"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                    </div>
                    <!-- blog One Content -->
                    <div class="blog-one-content">
                        <!-- Heading -->
                        <h3>
                        <?= $this->Html->link(__(h($article->title)), ['action' => 'view', $article->id]) ?>
                        </h3>
                        <!-- Blog meta -->
                        <div class="blog-meta">
                            <!-- Date -->
                            <a href="#"><i class="fa fa-calendar"></i> &nbsp; <?= h($article->created) ?></a> &nbsp; 
                            <!-- Author -->
                            <a href="#"><i class="fa fa-user"></i> &nbsp; <?= h($article->user_id) ?></a> &nbsp;
                        </div>
                        <!-- Paragraph -->
                        <p><?= Text::truncate(h($article->body), 250) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- Blog item ends -->
                
                <!-- Pagination -->
                <ul class="pagination">
                    <!-- List -->
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
            </div>
            
            <!-- Sidebar column -->
            <div class="col-md-4">
                <!-- Sidebar -->
                <div class="sidebar">
                
                    <!-- Search Widget -->
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-search color"></i>&nbsp; Search</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content search">
                            <form role="form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type Something">
                                    <span class="input-group-btn">
                                        <button class="btn btn-color" type="button">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Categories Widget -->
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-folder color"></i>&nbsp; Categories</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content categories">
                            <ul class="list-6">
                                <li><a href="#">Web Designing <span class="color">(5)</span></a></li>
                                <li><a href="#">Graphic Design <span class="color">(5)</span></a></li>
                                <li><a href="#">PHP Dev <span class="color">(5)</span></a></li>
                                <li><a href="#">Android Dev <span class="color">(5)</span></a></li>
                                <li><a href="#">Photoshop <span class="color">(5)</span></a></li>
                                <li><a href="#">WordPress <span class="color">(5)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Nav tab widget - popular, recent and comments -->
                    <div class="s-widget">
                        <h5><i class="fa fa-tags color"></i>&nbsp; Nav Tabs</h5>
                        <div class="widget-content tabs">
                            <div class="nav-tabs-two">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                    <li><a href="#recent" data-toggle="tab">Recent</a></li>
                                    <li><a href="#comments" data-toggle="tab">Comments</a></li>
                                </ul>
                                <!-- Tab content -->
                                <div class="tab-content">
                                    <!-- Popular posts -->
                                    <div class="tab-pane fade in active" id="popular">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Voluptates repudiandae sint et molestiae non recusand</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Recent posts -->
                                    <div class="tab-pane fade" id="recent">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Voluptates repudiandae sint et molestiae non recusand</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                        </ul>                                                       
                                    </div>
                                    <!-- Recent comments -->
                                    <div class="tab-pane fade" id="comments">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Voluptates repudiandae sint et molestiae non recusand</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <!-- Item image -->
                                                    <img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" />
                                                    <!-- Item title -->
                                                    <span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tag Widget -->
                    <div class="s-widget">
                        <h5><i class="fa fa-tags color"></i>&nbsp; Tags</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content">
                            <a href="#" class="label label-color">web</a> 
                            <a href="#" class="label label-color">wordpress</a> 
                            <a href="#" class="label label-color">php</a> 
                            <a href="#" class="label label-color">jquery</a> 
                            <a href="#" class="label label-color">java</a> 
                            <a href="#" class="label label-color">photoshop</a> 
                            <a href="#" class="label label-color">windows</a> 
                            <a href="#" class="label label-color">android</a> 
                            <a href="#" class="label label-color">ios</a> 
                            <a href="#" class="label label-color">chrome</a> 
                            <a href="#" class="label label-color">development</a> 
                            <a href="#" class="label label-color">plugin</a> 
                            <a href="#" class="label label-color">personal</a> 
                            <a href="#" class="label label-color">general</a> 
                        </div>
                    </div>
                    
                    <!-- Gallery Widget -->
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-photo color"></i>&nbsp; Gallery</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content gallery">
                            <a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                            <a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                            <a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                            <a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                            <a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                            <a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                        </div>
                    </div>                                  
                    
                    <!-- Social media widget -->
                    <div class="s-widget">
                        <h5><i class="fa fa-share color"></i>&nbsp; Social Media</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content brand-bg">
                            <!-- Social Media Icons -->
                            <a href="#" class="facebook"><i class="fa fa-facebook square-3 rounded-1"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter square-3 rounded-1"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus square-3 rounded-1"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin square-3 rounded-1"></i></a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest square-3 rounded-1"></i></a>
                            <a href="#" class="dropbox"><i class="fa fa-dropbox square-3 rounded-1"></i></a>
                            <a href="#" class="foursquare"><i class="fa fa-foursquare square-3 rounded-1"></i></a>
                            <a href="#" class="flickr"><i class="fa fa-flickr square-3 rounded-1"></i></a>
                            <a href="#" class="github"><i class="fa fa-github square-3 rounded-1"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram square-3 rounded-1"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype square-3 rounded-1"></i></a>
                            <a href="#" class="tumblr"><i class="fa fa-tumblr square-3 rounded-1"></i></a>
                            <a href="#" class="dribbble"><i class="fa fa-dribbble square-3 rounded-1"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube square-3 rounded-1"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

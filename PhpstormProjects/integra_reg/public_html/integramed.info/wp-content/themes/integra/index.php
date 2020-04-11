<?php
get_header();
?>

    <?if(is_front_page()){?>

    <?}?>

    <div class="container-fluid">
        <div class="row">

            <?if(!is_front_page()){?>
                <div id="sidebar-first" class="col-md-3 order-12 order-md-1">
                    <div class="section">
                        <ul class="region region-left">
                            <?php  dynamic_sidebar( 'articles-side-bar' ); ?>
                        </ul>
                        <script type="text/javascript">
                            <!--//--><![CDATA[// ><!--

                            $(function(){
                                    $("body").addClass("left_js");

                                    $(".menu_left_title_320").click(
                                        function(){
                                            $("body").toggleClass("left_mobile_nav");
                                            $("body").removeClass("mobile_nav");
                                            $("body").removeClass("ill_mobile_nav");
                                            $("body").removeClass("simptom_mobile_nav");
                                            return false;
                                        }
                                    );
                                    $(".menu_left_a").click(
                                        function(){
                                            $("body").removeClass("left_mobile_nav");
                                        }
                                    );
                                }
                            );

                            //--><!]]>
                        </script>
                    </div>
                </div>
            <?}?>



            <div id="content" class="col-md-9 order-1 order-md-12 container-fluid" data-template="parts-content-excerpt">
                <div id="main-inner" class="articles-list-main row">


		<?php
		if ( have_posts() ) {


			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/excerpt' );
			}
			?>
			<div class="clearfix"></div>
            <?



		} else {


			get_template_part( 'template-parts/content/excerpt', 'none' );

		}




		?>

                </div>
                <? twentynineteen_the_posts_navigation();?>
            </div>
        </div>
    </div>

<?php



get_footer();

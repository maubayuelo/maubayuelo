<?php get_header(); /*
Template Name: Services page
*/
?>
    <?php get_header(); ?>
    <section id="content" role="main" class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row row-bottom-margin">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
            </header>
            <section class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
            </section>
          </article>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
      </div>
    <?php endwhile; endif; ?>
    </section>
    

        

    
    <!-- Services -->
    <div class="container row-bottom-margin"> 
          <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                      <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/services-web.jpg" class="img-responsive">
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-3 col-xs-3">
                  </div>


                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<?php
						if(ICL_LANGUAGE_CODE=='en'){ ?>
							<h3>Web Development</h3>
                      		<p>Beautiful and functional designs for digital and online applications, responsives websites and CMS (WordPress). Management of each project from the birth of his concept to launch date.</p>
					<?php }
					if(ICL_LANGUAGE_CODE=='fr'){ ?>
							<h3>Conception Web</h3>
                      		<p>Beaux designs et fonctionnels pour les applications numériques et en ligne, de sites Web adaptatives à CMS (WordPress). Gestion de chaque projet à partir de la naissance de son concept jusqu'au jour de lancement.</p>
                	<?php } ?>
                  </div>

          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                      <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/services-id.jpg" class="img-responsive">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<?php
						if(ICL_LANGUAGE_CODE=='en'){ ?>
							<h3>Id &amp; Logo Design</h3>
                      		<p>Identity systems, reasonably flexibles to suit a variety of mediums and always keep a strong presence. Memorable visual identity with the look and feel of your organisation.</p>
					<?php }
					if(ICL_LANGUAGE_CODE=='fr'){ ?>
							<h3>Identité</h3>
                      		<p>Systèmes d'identité raisonnablement flexibles pour s’adapter à une variété de médiums et de conserver une présence toujours solide. Identité visuelle mémorable avec le look and feel de votre institution.</p>
                	<?php } ?>
                  </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                      <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/services-imp.jpg" class="img-responsive">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>


                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<?php
						if(ICL_LANGUAGE_CODE=='en'){ ?>
							<h3>Graphic Design</h3>
                      		<p>High quality and attractive design projects, including à range of products such as posters, business stationery, catalogs, brochures and publications.</p>
					<?php }
					if(ICL_LANGUAGE_CODE=='fr'){ ?>
							<h3>Graphic Design</h3>
                      		<p>Conception de pièces de haute qualité, compris par une gamme de produits comme des affiches, papeterie d'affaires, catalogues, brochures, et publications.</p>
                	<?php } ?>
                  </div>

          </div>
    </div>
    <!-- Services -->


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 process">
      <div class="container row-top-margin">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center row-bottom-margin">
          
			<?php
				if(ICL_LANGUAGE_CODE=='en'){ ?>
					<h2>
						Process
					</h2>
					<h5>
					  Close collaboration leads to great results. Research and refine is important to understand how deliver on your business and your goals. I have outlined a typical work process, which might vary slightly on each project, but the fundamentals are generally the same.
					</h5>
			<?php }
			if(ICL_LANGUAGE_CODE=='fr'){ ?>
					<h2>
						Processus
					</h2>
					<h5>
					  Une collaboration étroite conduit à d'excellents résultats. La recherche et reflechir est important pour comprendre comment livrer un bon projet sur le domaine de votre entreprise. J'ai décrit un processus de travail géneral, ce qui pourrait varier légèrement sur chaque projet, mais les principes fondamentaux sont généralement les mêmes.
					</h5>
			<?php } ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/process.png" alt="" class="img-responsive">
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 process text-center">
      <div class="container row-top-margin row-bottom-margin">
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
        </div>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-center">
			  <h4 style="color:#2E0927">Planning &amp; Research</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-center">
			  <h4 style="color:#D90000">Design &amp; Approvation</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
			  <h4 style="color:#611427">Development  &amp; Production</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
			  <h4 style="color:#FF8C00">Adjustments &amp; Finishing</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
			  <h4 style="color:#04756F">Launch</h4>
			</div>
		<?php }
		if(ICL_LANGUAGE_CODE=='fr'){ ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-center">
			  <h4 style="color:#2E0927">Planification &amp; Recherche</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-center">
			  <h4 style="color:#D90000">Conception &amp; approvation</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
			  <h4 style="color:#611427">Développement &amp; production</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
			  <h4 style="color:#FF8C00">Ajustements &amp; Finition</h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
			  <h4 style="color:#04756F">Lancement</h4>
			</div>
        <?php } ?>
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
        </div>
      </div>
    </div>
  <?php get_footer(); ?>
    <!-- /About -->
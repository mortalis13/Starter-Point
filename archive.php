<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="category-content">

        <header class="page-header">
          <h1 class="page-title">
            <?php if ( is_category() ) : 
                $catLink=get_category_link($cat);
                $catName=get_the_category_by_ID($cat);
                $catClass='cat-'.$cat;

                echo '<div class="category-list-category"><em>
                  <a class="'.$catClass.'" href="'.$catLink . '">'.$catName.'</a></em></div>';
              endif;
            ?>
          </h1>
        </header><!-- .page-header -->

        <div class="total">
          <?php echo __('Total','starter').": ".$wp_query->found_posts; ?>
        </div>
        
        <?php $ppp=get_query_var('posts_per_page'); ?>

        <!-- Posts Per Page filter -->
        
        <form action="<?php echo $catLink ?>" method="post">
          <?php wp_nonce_field('pca_filter_posts_per_page','pca_nonce_field') ?>
          <select name="posts_per_page_filter" id="posts_per_page_filter" onchange="this.form.submit()">
            <option value="5" <?php echo $ppp==5?'selected="selected"':'' ?> >5</option>
            <option value="10" <?php echo $ppp==10?'selected="selected"':'' ?> >10</option>
            <option value="20" <?php echo $ppp==20?'selected="selected"':'' ?> >20</option>
            <option value="-1" <?php echo $ppp==-1?'selected="selected"':'' ?> ><?php _e('All','starter') ?></option>
          </select>
        </form>

        <?php if ( have_posts() ) : ?>
          <?php $links=starter_get_sortable_headers(); ?>

          <div class="table-responsive">
            <table class="articles">
              <thead>
                <th class="date"> 
                  <?php echo $links['date'] ?> 
                </th>
                <th> 
                  <?php echo $links['title'] ?> 
                </th>
                <th class="comments">
                  <?php echo $links['comments'] ?>
                </th>
                <th class="views">
                  <?php echo $links['views'] ?> 
                </th>
                <?php if(is_user_logged_in()){ ?>
                  <th class="edit">
                    <?php _e( 'Edit', 'starter' ); ?>
                  </th>
                <?php } ?>
              </thead>

              <tbody>
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php
                    get_template_part( 'content', 'archive');
                  ?>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
      </div>
        
        <?php else : ?>
          <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

        <?php starter_paging_nav(); ?>
      
    </main><!-- #main -->
  </section><!-- #primary -->
  
<?php get_footer(); ?>

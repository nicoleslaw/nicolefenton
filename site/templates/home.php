<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="home-bio">
        <?php echo @waysofbeing(@strip_p($page->home_bio()->kirbytext())) ?>
      </div>

      <div class="text text--home">

        <figure class="decoration" aria-hidden="true"><img src="/_/images/dec/wave-lg.svg" alt="" /></figure>

        <section id="testimonials" class="list-section testimonial testimonial--home">
          <ul class="testimonial-list">
            <li>
              <blockquote>
                <p>It’s nice to have a good content strategist. I’ve never worked with one before and now I never want to work without. Come with me everywhere Nicole, or I will tail you like a stray dog.</p>
              </blockquote>
              <h3>Frank Chimero, Designer</h3>
            </li>
            <li>
              <blockquote>
                <p>She can help you develop a unique and effective voice to distinguish yourself from everybody else, one that people are eager to listen to and act upon.</p>
              </blockquote>
              <h3>Stewart McCoy, Product Designer</h3>
            </li>
            <li>
              <blockquote>
                <p>Nicole has convinced me that language and content are an integral part of brand and interaction. She has continually given me useful feedback in the visual design process, as well as on early stage concepts.</p>
              </blockquote>
              <h3>Paula Chang, Designer</h3>
            </li>
            <li>
              <blockquote>
                <p>Nicole is an absolute pleasure to work with. She has a strong grasp of both interaction design and written language that can take some of the most complex issues and present them in a friendly, easy to understand light.</p>
              </blockquote>
              <h3>Constantin Koumouzelis, Product Manager</h3>
            </li>
            <li>
              <blockquote>
                <p>I’d hire Nicole to edit something in a second. She’s incredibly straightforward and her writing and interface design ideas are top notch as well.</p>
              </blockquote>
              <h3>Kenny Meyers, Developer</h3>
            </li>
          </ul>

        </section>

        <section class="list-section making-list">
          <h2 class="list-section-title">Making</h2>
          <?php echo $page->making()->kirbytext() ?>
        </section>

        <section class="list-section reading-list">
          <h2 class="list-section-title">Reading</h2>
          <?php echo $page->reading()->kirbytext() ?>
        </section>

      </div>

    </main>

<?php snippet('footer') ?>
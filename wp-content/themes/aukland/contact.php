<?php

/**
* Template Name: Contact Page
*/

get_header(); ?>

<div id="main-content" class="row" data-equalizer><!-- Foundation .row start -->

    <div class="small-12 medium-7 large-8 columns" data-equalizer-watch><!-- Foundation .columns start -->
        <img id="bio-pic" src="<?php bloginfo('template_directory'); ?>/images/bio-pic.jpg">
        <div class="hide-for-small">
          <p id="paragraph-1">It’s been a jam-packed year for Aukland. Since the band’s introductory show in the summer of 2013, the indie-rock outfit has garnered itself a significant number of accomplishments. From sharing the stage with bands and artists including Tokyo Police Club, Hollerado, The Trews, and Alyssa Reid, to making appearances at some of the largest festivals in Ontario, to the recent recording and release of their debut EP, Aukland is carving a name out for itself in the Canadian music scene. Based out of Mississauga and consisting of Jeff Campana [guitar, vocals], Dave Setton [drums, vocals], Sean Sroka [vocals, guitar], and Andrew Thomas [bass, vocals], Aukland is a band whose success can be traced back to their nose-to-the-fretboard ethos.</p>
          <p>In a live setting, the band delivers a fun, energetic live show that truly defies the stereotype that you can’t dance to rock music. Calling on a broad spectrum of influences including Kings of Leon, Arkells, and Foals, Aukland’s live set imparts what it feels like to be a young twenty-something living life in the big city. Thankfully, that energy and spirited attitude translates into their recorded material. With the recent release of their debut EP The Orange Above, Aukland demonstrates a strong song-writing sensibility that strikes a remarkable balance between originality and the tried-and-true, a fine line that many acts are not able to tread nowadays. The songs have infectious, stuck-in-your-head melodies along with hooks that pull the listener in, and yet they don’t fall into the trap of being generic.</p>
          <p>Whether recorded or live, the core of the band has always been the music. While the guys of Aukland may be pretty laid back with respect to many things, the same can’t be said of their attitude towards their music. They’re determined perfectionists that are always searching for that next catchy riff, that addictively groovy bass line, that beat that keeps your foot tapping, and that vocal melody that you won’t be able to get out of your head. With the band heading into the studio in early 2015 to finish recording their debut full-length album, and with more and more shows being booked by the week, it’s safe to say we’re just seeing the beginning of what Aukland has to offer.</p>
        </div>
    </div><!-- Foundation .columns end -->

    <div id="contact-info" class="small-12 medium-5 large-4 columns">
      <h3 id="contact">CONTACT</h3>
      <h5>Management &amp; Bookings</h5>
      <h4 id="lucas">Lucas Canzona</h4>
      <h5><a  id="email" href="mailto:aukland@thesoundofchange.org">aukland@thesoundofchange.org</a></h5>
      <?php dynamic_sidebar('contact-sidebar'); ?>
    </div>

  </div><!-- Foundation .row end -->

<?php get_footer(); ?>


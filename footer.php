    </div><!-- /.container -->
    <div style="margin-bottom: 100px;"></div>
	<div id="contFooter">
        <div class="footer">
            <div class="sectThree">
                <h3>Navigation</h3>
                <ul id="internal">
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/index">Home</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/about">About</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/projects">Projects</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/competitions">Competitions</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/gallery">Gallery</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/contact">Contact</a></li>
                </ul>
                <ul id="external">
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/rover">Mars Rover</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/aerial">Autonomous Aerial</a></li>
                    <li><a href="<? echo esc_url( home_url( '/' ) ); ?>/underwater">Underwater ROV</a></li>
                </ul>
            </div>

            <div class="sectThree">
                <h3>Join Our Mailing List</h3>
                <ul style="margin-top: 20px;">
                    <li>If you would like to join our mailing list, go <a href="https://secure.engr.oregonstate.edu/mailman/listinfo/osurcmembers">here</a>.</li>
                </ul>
            </div>

            <div class="sectThree">
                <h3 style="margin-bottom: 20px;">Meeting Dates</h3>
                <? dynamic_sidebar( 'footer-meeting-dates' ); ?>
            </div>
        </div>
    </div>
  </body>
</html>

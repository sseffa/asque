<?php

View::composer('layout/sidebar', 'Asque\Composers\TagComposer');
View::composer('layout/sidebar', 'Asque\Composers\PostComposer');
View::composer('layout/sidebar', 'Asque\Composers\ArchiveComposer');
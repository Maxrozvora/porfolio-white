<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'image' => array(
        'caption' => 'Image',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'image'
    ),
    'title' => array(
        'caption' => 'Title',
        'type' => 'text'
    ),
    'link' => array(
        'caption' => 'Link',
        'type' => 'text'
    ),
    'description' => array(
        'caption' => 'description',
        'type' => 'text'
    ),
    'id' => array(
        'caption' => 'ID',
        'type' => 'text',
        'default' => 'img{i}'
    )
);
$settings['templates'] = array(
    'outerTpl' => '[+wrapper+]',
    'rowTpl' => '
<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url([[phpthumb? &input=`[+image+]` &options=`w=382,h=300,far=C,bg=fff``]]);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="[+link+]">[+title+]</a></h3>
                                        <span>[+description+]</span>        
                                        <p class="icon">
                                            <span><a href="[+link+]"><i class="icon-eye"></i>View work</a></span>
                                            
                                        </p>                                
                                    </div>
                                </div>
                            </div>
                        </div>

'
);

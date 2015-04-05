  
  <div class="snippets-wrap">
    <p><a href="<?php echo admin_url( 'themes.php?page=theme_options' ) ?>"><?php _e('Return To Options','starter') ?></a></p>

    <h1>Ace Editor CSS Snippets</h1>
    <p class="description">Type a snippet and press Tab or Enter or find a snippet in the autocomplition popup</p>

    <div class="snippet-list">
    
      <table class="snippets-table">
        <thead>
          <tr>
            <th>Snippet</th>
            <th>Code</th>
          </tr>  
        </thead>
        
        <tr>
          <td>.</td>
          <td>${1} {
              ${2}
            }</td>
        </tr>
        <tr>
          <td>!</td>
          <td>!important</td>
        </tr>
        <tr>
          <td>bdi:m+</td>
          <td>-moz-border-image: url(${1}) ${2:0} ${3:0} ${4:0} ${5:0} ${6:stretch} ${7:stretch};</td>
        </tr>
        <tr>
          <td>bdi:m</td>
          <td>-moz-border-image: ${1};</td>
        </tr>
        <tr>
          <td>bdrz:m</td>
          <td>-moz-border-radius: ${1};</td>
        </tr>
        <tr>
          <td>bxsh:m+</td>
          <td>-moz-box-shadow: ${1:0} ${2:0} ${3:0} #${4:000};</td>
        </tr>
        <tr>
          <td>bxsh:m</td>
          <td>-moz-box-shadow: ${1};</td>
        </tr>
        <tr>
          <td>bdi:w+</td>
          <td>-webkit-border-image: url(${1}) ${2:0} ${3:0} ${4:0} ${5:0} ${6:stretch} ${7:stretch};</td>
        </tr>
        <tr>
          <td>bdi:w</td>
          <td>-webkit-border-image: ${1};</td>
        </tr>
        <tr>
          <td>bdrz:w</td>
          <td>-webkit-border-radius: ${1};</td>
        </tr>
        <tr>
          <td>bxsh:w+</td>
          <td>-webkit-box-shadow: ${1:0} ${2:0} ${3:0} #${4:000};</td>
        </tr>
        <tr>
          <td>bxsh:w</td>
          <td>-webkit-box-shadow: ${1};</td>
        </tr>
        <tr>
          <td>@f</td>
          <td>@font-face {
              font-family: ${1};
              src: url(${2});
            }</td>
        </tr>
        <tr>
          <td>@i</td>
          <td>@import url(${1});</td>
        </tr>
        <tr>
          <td>@m</td>
          <td>@media ${1:print} {
              ${2}
            }</td>
        </tr>
        <tr>
          <td>bg+</td>
          <td>background: #${1:FFF} url(${2}) ${3:0} ${4:0} ${5:no-repeat};</td>
        </tr>
        <tr>
          <td>bga</td>
          <td>background-attachment: ${1};</td>
        </tr>
        <tr>
          <td>bga:f</td>
          <td>background-attachment: fixed;</td>
        </tr>
        <tr>
          <td>bga:s</td>
          <td>background-attachment: scroll;</td>
        </tr>
        <tr>
          <td>bgbk</td>
          <td>background-break: ${1};</td>
        </tr>
        <tr>
          <td>bgbk:bb</td>
          <td>background-break: bounding-box;</td>
        </tr>
        <tr>
          <td>bgbk:c</td>
          <td>background-break: continuous;</td>
        </tr>
        <tr>
          <td>bgbk:eb</td>
          <td>background-break: each-box;</td>
        </tr>
        <tr>
          <td>bgcp</td>
          <td>background-clip: ${1};</td>
        </tr>
        <tr>
          <td>bgcp:bb</td>
          <td>background-clip: border-box;</td>
        </tr>
        <tr>
          <td>bgcp:cb</td>
          <td>background-clip: content-box;</td>
        </tr>
        <tr>
          <td>bgcp:nc</td>
          <td>background-clip: no-clip;</td>
        </tr>
        <tr>
          <td>bgcp:pb</td>
          <td>background-clip: padding-box;</td>
        </tr>
        <tr>
          <td>bgc</td>
          <td>background-color: #${1:FFF};</td>
        </tr>
        <tr>
          <td>bgc:t</td>
          <td>background-color: transparent;</td>
        </tr>
        <tr>
          <td>bgi</td>
          <td>background-image: url(${1});</td>
        </tr>
        <tr>
          <td>bgi:n</td>
          <td>background-image: none;</td>
        </tr>
        <tr>
          <td>bgo</td>
          <td>background-origin: ${1};</td>
        </tr>
        <tr>
          <td>bgo:bb</td>
          <td>background-origin: border-box;</td>
        </tr>
        <tr>
          <td>bgo:cb</td>
          <td>background-origin: content-box;</td>
        </tr>
        <tr>
          <td>bgo:pb</td>
          <td>background-origin: padding-box;</td>
        </tr>
        <tr>
          <td>bgpx</td>
          <td>background-position-x: ${1};</td>
        </tr>
        <tr>
          <td>bgpy</td>
          <td>background-position-y: ${1};</td>
        </tr>
        <tr>
          <td>bgp</td>
          <td>background-position: ${1:0} ${2:0};</td>
        </tr>
        <tr>
          <td>bgr</td>
          <td>background-repeat: ${1};</td>
        </tr>
        <tr>
          <td>bgr:n</td>
          <td>background-repeat: no-repeat;</td>
        </tr>
        <tr>
          <td>bgr:x</td>
          <td>background-repeat: repeat-x;</td>
        </tr>
        <tr>
          <td>bgr:y</td>
          <td>background-repeat: repeat-y;</td>
        </tr>
        <tr>
          <td>bgr:r</td>
          <td>background-repeat: repeat;</td>
        </tr>
        <tr>
          <td>bgz</td>
          <td>background-size: ${1};</td>
        </tr>
        <tr>
          <td>bgz:a</td>
          <td>background-size: auto;</td>
        </tr>
        <tr>
          <td>bgz:ct</td>
          <td>background-size: contain;</td>
        </tr>
        <tr>
          <td>bgz:cv</td>
          <td>background-size: cover;</td>
        </tr>
        <tr>
          <td>bg</td>
          <td>background: ${1};</td>
        </tr>
        <tr>
          <td>bg:ie</td>
          <td>filter: progid:DXimagEtransform.microsoft.alphAimagEloader(src='${1}',sizinGmethod='${2:crop}');</td>
        </tr>
        <tr>
          <td>bg:n</td>
          <td>background: none;</td>
        </tr>
        <tr>
          <td>bd+</td>
          <td>border: ${1:1px} ${2:solid} #${3:000};</td>
        </tr>
        <tr>
          <td>bdb+</td>
          <td>border-bottom: ${1:1px} ${2:solid} #${3:000};</td>
        </tr>
        <tr>
          <td>bdbc</td>
          <td>border-bottom-color: #${1:000};</td>
        </tr>
        <tr>
          <td>bdbi</td>
          <td>border-bottom-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdbi:n</td>
          <td>border-bottom-image: none;</td>
        </tr>
        <tr>
          <td>bdbli</td>
          <td>border-bottom-left-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdbli:c</td>
          <td>border-bottom-left-image: continue;</td>
        </tr>
        <tr>
          <td>bdbli:n</td>
          <td>border-bottom-left-image: none;</td>
        </tr>
        <tr>
          <td>bdblrz</td>
          <td>border-bottom-left-radius: ${1};</td>
        </tr>
        <tr>
          <td>bdbri</td>
          <td>border-bottom-right-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdbri:c</td>
          <td>border-bottom-right-image: continue;</td>
        </tr>
        <tr>
          <td>bdbri:n</td>
          <td>border-bottom-right-image: none;</td>
        </tr>
        <tr>
          <td>bdbrrz</td>
          <td>border-bottom-right-radius: ${1};</td>
        </tr>
        <tr>
          <td>bdbs</td>
          <td>border-bottom-style: ${1};</td>
        </tr>
        <tr>
          <td>bdbs:n</td>
          <td>border-bottom-style: none;</td>
        </tr>
        <tr>
          <td>bdbw</td>
          <td>border-bottom-width: ${1};</td>
        </tr>
        <tr>
          <td>bdb</td>
          <td>border-bottom: ${1};</td>
        </tr>
        <tr>
          <td>bdb:n</td>
          <td>border-bottom: none;</td>
        </tr>
        <tr>
          <td>bdbk</td>
          <td>border-break: ${1};</td>
        </tr>
        <tr>
          <td>bdbk:c</td>
          <td>border-break: close;</td>
        </tr>
        <tr>
          <td>bdcl</td>
          <td>border-collapse: ${1};</td>
        </tr>
        <tr>
          <td>bdcl:c</td>
          <td>border-collapse: collapse;</td>
        </tr>
        <tr>
          <td>bdcl:s</td>
          <td>border-collapse: separate;</td>
        </tr>
        <tr>
          <td>bdc</td>
          <td>border-color: #${1:000};</td>
        </tr>
        <tr>
          <td>bdci</td>
          <td>border-corner-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdci:c</td>
          <td>border-corner-image: continue;</td>
        </tr>
        <tr>
          <td>bdci:n</td>
          <td>border-corner-image: none;</td>
        </tr>
        <tr>
          <td>bdf</td>
          <td>border-fit: ${1};</td>
        </tr>
        <tr>
          <td>bdf:c</td>
          <td>border-fit: clip;</td>
        </tr>
        <tr>
          <td>bdf:of</td>
          <td>border-fit: overwrite;</td>
        </tr>
        <tr>
          <td>bdf:ow</td>
          <td>border-fit: overwrite;</td>
        </tr>
        <tr>
          <td>bdf:r</td>
          <td>border-fit: repeat;</td>
        </tr>
        <tr>
          <td>bdf:sc</td>
          <td>border-fit: scale;</td>
        </tr>
        <tr>
          <td>bdf:sp</td>
          <td>border-fit: space;</td>
        </tr>
        <tr>
          <td>bdf:st</td>
          <td>border-fit: stretch;</td>
        </tr>
        <tr>
          <td>bdi</td>
          <td>border-image: url(${1}) ${2:0} ${3:0} ${4:0} ${5:0} ${6:stretch} ${7:stretch};</td>
        </tr>
        <tr>
          <td>bdi:n</td>
          <td>border-image: none;</td>
        </tr>
        <tr>
          <td>bdl+</td>
          <td>border-left: ${1:1px} ${2:solid} #${3:000};</td>
        </tr>
        <tr>
          <td>bdlc</td>
          <td>border-left-color: #${1:000};</td>
        </tr>
        <tr>
          <td>bdli</td>
          <td>border-left-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdli:n</td>
          <td>border-left-image: none;</td>
        </tr>
        <tr>
          <td>bdls</td>
          <td>border-left-style: ${1};</td>
        </tr>
        <tr>
          <td>bdls:n</td>
          <td>border-left-style: none;</td>
        </tr>
        <tr>
          <td>bdlw</td>
          <td>border-left-width: ${1};</td>
        </tr>
        <tr>
          <td>bdl</td>
          <td>border-left: ${1};</td>
        </tr>
        <tr>
          <td>bdl:n</td>
          <td>border-left: none;</td>
        </tr>
        <tr>
          <td>bdlt</td>
          <td>border-length: ${1};</td>
        </tr>
        <tr>
          <td>bdlt:a</td>
          <td>border-length: auto;</td>
        </tr>
        <tr>
          <td>bdrz</td>
          <td>border-radius: ${1};</td>
        </tr>
        <tr>
          <td>bdr+</td>
          <td>border-right: ${1:1px} ${2:solid} #${3:000};</td>
        </tr>
        <tr>
          <td>bdrc</td>
          <td>border-right-color: #${1:000};</td>
        </tr>
        <tr>
          <td>bdri</td>
          <td>border-right-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdri:n</td>
          <td>border-right-image: none;</td>
        </tr>
        <tr>
          <td>bdrs</td>
          <td>border-right-style: ${1};</td>
        </tr>
        <tr>
          <td>bdrs:n</td>
          <td>border-right-style: none;</td>
        </tr>
        <tr>
          <td>bdrw</td>
          <td>border-right-width: ${1};</td>
        </tr>
        <tr>
          <td>bdr</td>
          <td>border-right: ${1};</td>
        </tr>
        <tr>
          <td>bdr:n</td>
          <td>border-right: none;</td>
        </tr>
        <tr>
          <td>bdsp</td>
          <td>border-spacing: ${1};</td>
        </tr>
        <tr>
          <td>bds</td>
          <td>border-style: ${1};</td>
        </tr>
        <tr>
          <td>bds:ds</td>
          <td>border-style: dashed;</td>
        </tr>
        <tr>
          <td>bds:dtds</td>
          <td>border-style: dot-dash;</td>
        </tr>
        <tr>
          <td>bds:dtdtds</td>
          <td>border-style: dot-dot-dash;</td>
        </tr>
        <tr>
          <td>bds:dt</td>
          <td>border-style: dotted;</td>
        </tr>
        <tr>
          <td>bds:db</td>
          <td>border-style: double;</td>
        </tr>
        <tr>
          <td>bds:g</td>
          <td>border-style: groove;</td>
        </tr>
        <tr>
          <td>bds:h</td>
          <td>border-style: hidden;</td>
        </tr>
        <tr>
          <td>bds:i</td>
          <td>border-style: inset;</td>
        </tr>
        <tr>
          <td>bds:n</td>
          <td>border-style: none;</td>
        </tr>
        <tr>
          <td>bds:o</td>
          <td>border-style: outset;</td>
        </tr>
        <tr>
          <td>bds:r</td>
          <td>border-style: ridge;</td>
        </tr>
        <tr>
          <td>bds:s</td>
          <td>border-style: solid;</td>
        </tr>
        <tr>
          <td>bds:w</td>
          <td>border-style: wave;</td>
        </tr>
        <tr>
          <td>bdt+</td>
          <td>border-top: ${1:1px} ${2:solid} #${3:000};</td>
        </tr>
        <tr>
          <td>bdtc</td>
          <td>border-top-color: #${1:000};</td>
        </tr>
        <tr>
          <td>bdti</td>
          <td>border-top-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdti:n</td>
          <td>border-top-image: none;</td>
        </tr>
        <tr>
          <td>bdtli</td>
          <td>border-top-left-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdtli:c</td>
          <td>border-corner-image: continue;</td>
        </tr>
        <tr>
          <td>bdtli:n</td>
          <td>border-corner-image: none;</td>
        </tr>
        <tr>
          <td>bdtlrz</td>
          <td>border-top-left-radius: ${1};</td>
        </tr>
        <tr>
          <td>bdtri</td>
          <td>border-top-right-image: url(${1});</td>
        </tr>
        <tr>
          <td>bdtri:c</td>
          <td>border-top-right-image: continue;</td>
        </tr>
        <tr>
          <td>bdtri:n</td>
          <td>border-top-right-image: none;</td>
        </tr>
        <tr>
          <td>bdtrrz</td>
          <td>border-top-right-radius: ${1};</td>
        </tr>
        <tr>
          <td>bdts</td>
          <td>border-top-style: ${1};</td>
        </tr>
        <tr>
          <td>bdts:n</td>
          <td>border-top-style: none;</td>
        </tr>
        <tr>
          <td>bdtw</td>
          <td>border-top-width: ${1};</td>
        </tr>
        <tr>
          <td>bdt</td>
          <td>border-top: ${1};</td>
        </tr>
        <tr>
          <td>bdt:n</td>
          <td>border-top: none;</td>
        </tr>
        <tr>
          <td>bdw</td>
          <td>border-width: ${1};</td>
        </tr>
        <tr>
          <td>bd</td>
          <td>border: ${1};</td>
        </tr>
        <tr>
          <td>bd:n</td>
          <td>border: none;</td>
        </tr>
        <tr>
          <td>b</td>
          <td>bottom: ${1};</td>
        </tr>
        <tr>
          <td>b:a</td>
          <td>bottom: auto;</td>
        </tr>
        <tr>
          <td>bxsh+</td>
          <td>box-shadow: ${1:0} ${2:0} ${3:0} #${4:000};</td>
        </tr>
        <tr>
          <td>bxsh</td>
          <td>box-shadow: ${1};</td>
        </tr>
        <tr>
          <td>bxsh:n</td>
          <td>box-shadow: none;</td>
        </tr>
        <tr>
          <td>bxz</td>
          <td>box-sizing: ${1};</td>
        </tr>
        <tr>
          <td>bxz:bb</td>
          <td>box-sizing: border-box;</td>
        </tr>
        <tr>
          <td>bxz:cb</td>
          <td>box-sizing: content-box;</td>
        </tr>
        <tr>
          <td>cps</td>
          <td>caption-side: ${1};</td>
        </tr>
        <tr>
          <td>cps:b</td>
          <td>caption-side: bottom;</td>
        </tr>
        <tr>
          <td>cps:t</td>
          <td>caption-side: top;</td>
        </tr>
        <tr>
          <td>cl</td>
          <td>clear: ${1};</td>
        </tr>
        <tr>
          <td>cl:b</td>
          <td>clear: both;</td>
        </tr>
        <tr>
          <td>cl:l</td>
          <td>clear: left;</td>
        </tr>
        <tr>
          <td>cl:n</td>
          <td>clear: none;</td>
        </tr>
        <tr>
          <td>cl:r</td>
          <td>clear: right;</td>
        </tr>
        <tr>
          <td>cp</td>
          <td>clip: ${1};</td>
        </tr>
        <tr>
          <td>cp:a</td>
          <td>clip: auto;</td>
        </tr>
        <tr>
          <td>cp:r</td>
          <td>clip: rect(${1:0} ${2:0} ${3:0} ${4:0});</td>
        </tr>
        <tr>
          <td>c</td>
          <td>color: #${1:000};</td>
        </tr>
        <tr>
          <td>ct</td>
          <td>content: ${1};</td>
        </tr>
        <tr>
          <td>ct:a</td>
          <td>content: attr(${1});</td>
        </tr>
        <tr>
          <td>ct:cq</td>
          <td>content: close-quote;</td>
        </tr>
        <tr>
          <td>ct:c</td>
          <td>content: counter(${1});</td>
        </tr>
        <tr>
          <td>ct:cs</td>
          <td>content: counters(${1});</td>
        </tr>
        <tr>
          <td>ct:ncq</td>
          <td>content: no-close-quote;</td>
        </tr>
        <tr>
          <td>ct:noq</td>
          <td>content: no-open-quote;</td>
        </tr>
        <tr>
          <td>ct:n</td>
          <td>content: normal;</td>
        </tr>
        <tr>
          <td>ct:oq</td>
          <td>content: open-quote;</td>
        </tr>
        <tr>
          <td>coi</td>
          <td>counter-increment: ${1};</td>
        </tr>
        <tr>
          <td>cor</td>
          <td>counter-reset: ${1};</td>
        </tr>
        <tr>
          <td>cur</td>
          <td>cursor: ${1};</td>
        </tr>
        <tr>
          <td>cur:a</td>
          <td>cursor: auto;</td>
        </tr>
        <tr>
          <td>cur:c</td>
          <td>cursor: crosshair;</td>
        </tr>
        <tr>
          <td>cur:d</td>
          <td>cursor: default;</td>
        </tr>
        <tr>
          <td>cur:ha</td>
          <td>cursor: hand;</td>
        </tr>
        <tr>
          <td>cur:he</td>
          <td>cursor: help;</td>
        </tr>
        <tr>
          <td>cur:m</td>
          <td>cursor: move;</td>
        </tr>
        <tr>
          <td>cur:p</td>
          <td>cursor: pointer;</td>
        </tr>
        <tr>
          <td>cur:t</td>
          <td>cursor: text;</td>
        </tr>
        <tr>
          <td>d</td>
          <td>display: ${1};</td>
        </tr>
        <tr>
          <td>d:mib</td>
          <td>display: -moz-inline-box;</td>
        </tr>
        <tr>
          <td>d:mis</td>
          <td>display: -moz-inline-stack;</td>
        </tr>
        <tr>
          <td>d:b</td>
          <td>display: block;</td>
        </tr>
        <tr>
          <td>d:cp</td>
          <td>display: compact;</td>
        </tr>
        <tr>
          <td>d:ib</td>
          <td>display: inline-block;</td>
        </tr>
        <tr>
          <td>d:itb</td>
          <td>display: inline-table;</td>
        </tr>
        <tr>
          <td>d:i</td>
          <td>display: inline;</td>
        </tr>
        <tr>
          <td>d:li</td>
          <td>display: list-item;</td>
        </tr>
        <tr>
          <td>d:n</td>
          <td>display: none;</td>
        </tr>
        <tr>
          <td>d:ri</td>
          <td>display: run-in;</td>
        </tr>
        <tr>
          <td>d:tbcp</td>
          <td>display: table-caption;</td>
        </tr>
        <tr>
          <td>d:tbc</td>
          <td>display: table-cell;</td>
        </tr>
        <tr>
          <td>d:tbclg</td>
          <td>display: table-column-group;</td>
        </tr>
        <tr>
          <td>d:tbcl</td>
          <td>display: table-column;</td>
        </tr>
        <tr>
          <td>d:tbfg</td>
          <td>display: table-footer-group;</td>
        </tr>
        <tr>
          <td>d:tbhg</td>
          <td>display: table-header-group;</td>
        </tr>
        <tr>
          <td>d:tbrg</td>
          <td>display: table-row-group;</td>
        </tr>
        <tr>
          <td>d:tbr</td>
          <td>display: table-row;</td>
        </tr>
        <tr>
          <td>d:tb</td>
          <td>display: table;</td>
        </tr>
        <tr>
          <td>ec</td>
          <td>empty-cells: ${1};</td>
        </tr>
        <tr>
          <td>ec:h</td>
          <td>empty-cells: hide;</td>
        </tr>
        <tr>
          <td>ec:s</td>
          <td>empty-cells: show;</td>
        </tr>
        <tr>
          <td>exp</td>
          <td>expression()</td>
        </tr>
        <tr>
          <td>fl</td>
          <td>float: ${1};</td>
        </tr>
        <tr>
          <td>fl:l</td>
          <td>float: left;</td>
        </tr>
        <tr>
          <td>fl:n</td>
          <td>float: none;</td>
        </tr>
        <tr>
          <td>fl:r</td>
          <td>float: right;</td>
        </tr>
        <tr>
          <td>f+</td>
          <td>font: ${1:1em} ${2:arial},${3:sans-serif};</td>
        </tr>
        <tr>
          <td>fef</td>
          <td>font-effect: ${1};</td>
        </tr>
        <tr>
          <td>fef:eb</td>
          <td>font-effect: emboss;</td>
        </tr>
        <tr>
          <td>fef:eg</td>
          <td>font-effect: engrave;</td>
        </tr>
        <tr>
          <td>fef:n</td>
          <td>font-effect: none;</td>
        </tr>
        <tr>
          <td>fef:o</td>
          <td>font-effect: outline;</td>
        </tr>
        <tr>
          <td>femp</td>
          <td>font-emphasize-position: ${1};</td>
        </tr>
        <tr>
          <td>femp:a</td>
          <td>font-emphasize-position: after;</td>
        </tr>
        <tr>
          <td>femp:b</td>
          <td>font-emphasize-position: before;</td>
        </tr>
        <tr>
          <td>fems</td>
          <td>font-emphasize-style: ${1};</td>
        </tr>
        <tr>
          <td>fems:ac</td>
          <td>font-emphasize-style: accent;</td>
        </tr>
        <tr>
          <td>fems:c</td>
          <td>font-emphasize-style: circle;</td>
        </tr>
        <tr>
          <td>fems:ds</td>
          <td>font-emphasize-style: disc;</td>
        </tr>
        <tr>
          <td>fems:dt</td>
          <td>font-emphasize-style: dot;</td>
        </tr>
        <tr>
          <td>fems:n</td>
          <td>font-emphasize-style: none;</td>
        </tr>
        <tr>
          <td>fem</td>
          <td>font-emphasize: ${1};</td>
        </tr>
        <tr>
          <td>ff</td>
          <td>font-family: ${1};</td>
        </tr>
        <tr>
          <td>ff:c</td>
          <td>font-family: ${1:'monotype corsiva','comic sans MS'},cursive;</td>
        </tr>
        <tr>
          <td>ff:f</td>
          <td>font-family: ${1:capitals,impact},fantasy;</td>
        </tr>
        <tr>
          <td>ff:m</td>
          <td>font-family: ${1:monaco,'courier new'},monospace;</td>
        </tr>
        <tr>
          <td>ff:ss</td>
          <td>font-family: ${1:helvetica,arial},sans-serif;</td>
        </tr>
        <tr>
          <td>ff:s</td>
          <td>font-family: ${1:georgia,'times new roman'},serif;</td>
        </tr>
        <tr>
          <td>fza</td>
          <td>font-size-adjust: ${1};</td>
        </tr>
        <tr>
          <td>fza:n</td>
          <td>font-size-adjust: none;</td>
        </tr>
        <tr>
          <td>fz</td>
          <td>font-size: ${1};</td>
        </tr>
        <tr>
          <td>fsm</td>
          <td>font-smooth: ${1};</td>
        </tr>
        <tr>
          <td>fsm:aw</td>
          <td>font-smooth: always;</td>
        </tr>
        <tr>
          <td>fsm:a</td>
          <td>font-smooth: auto;</td>
        </tr>
        <tr>
          <td>fsm:n</td>
          <td>font-smooth: never;</td>
        </tr>
        <tr>
          <td>fst</td>
          <td>font-stretch: ${1};</td>
        </tr>
        <tr>
          <td>fst:c</td>
          <td>font-stretch: condensed;</td>
        </tr>
        <tr>
          <td>fst:e</td>
          <td>font-stretch: expanded;</td>
        </tr>
        <tr>
          <td>fst:ec</td>
          <td>font-stretch: extra-condensed;</td>
        </tr>
        <tr>
          <td>fst:ee</td>
          <td>font-stretch: extra-expanded;</td>
        </tr>
        <tr>
          <td>fst:n</td>
          <td>font-stretch: normal;</td>
        </tr>
        <tr>
          <td>fst:sc</td>
          <td>font-stretch: semi-condensed;</td>
        </tr>
        <tr>
          <td>fst:se</td>
          <td>font-stretch: semi-expanded;</td>
        </tr>
        <tr>
          <td>fst:uc</td>
          <td>font-stretch: ultra-condensed;</td>
        </tr>
        <tr>
          <td>fst:ue</td>
          <td>font-stretch: ultra-expanded;</td>
        </tr>
        <tr>
          <td>fs</td>
          <td>font-style: ${1};</td>
        </tr>
        <tr>
          <td>fs:i</td>
          <td>font-style: italic;</td>
        </tr>
        <tr>
          <td>fs:n</td>
          <td>font-style: normal;</td>
        </tr>
        <tr>
          <td>fs:o</td>
          <td>font-style: oblique;</td>
        </tr>
        <tr>
          <td>fv</td>
          <td>font-variant: ${1};</td>
        </tr>
        <tr>
          <td>fv:n</td>
          <td>font-variant: normal;</td>
        </tr>
        <tr>
          <td>fv:sc</td>
          <td>font-variant: small-caps;</td>
        </tr>
        <tr>
          <td>fw</td>
          <td>font-weight: ${1};</td>
        </tr>
        <tr>
          <td>fw:b</td>
          <td>font-weight: bold;</td>
        </tr>
        <tr>
          <td>fw:br</td>
          <td>font-weight: bolder;</td>
        </tr>
        <tr>
          <td>fw:lr</td>
          <td>font-weight: lighter;</td>
        </tr>
        <tr>
          <td>fw:n</td>
          <td>font-weight: normal;</td>
        </tr>
        <tr>
          <td>f</td>
          <td>font: ${1};</td>
        </tr>
        <tr>
          <td>h</td>
          <td>height: ${1};</td>
        </tr>
        <tr>
          <td>h:a</td>
          <td>height: auto;</td>
        </tr>
        <tr>
          <td>l</td>
          <td>left: ${1};</td>
        </tr>
        <tr>
          <td>l:a</td>
          <td>left: auto;</td>
        </tr>
        <tr>
          <td>lts</td>
          <td>letter-spacing: ${1};</td>
        </tr>
        <tr>
          <td>lh</td>
          <td>line-height: ${1};</td>
        </tr>
        <tr>
          <td>lisi</td>
          <td>list-style-image: url(${1});</td>
        </tr>
        <tr>
          <td>lisi:n</td>
          <td>list-style-image: none;</td>
        </tr>
        <tr>
          <td>lisp</td>
          <td>list-style-position: ${1};</td>
        </tr>
        <tr>
          <td>lisp:i</td>
          <td>list-style-position: inside;</td>
        </tr>
        <tr>
          <td>lisp:o</td>
          <td>list-style-position: outside;</td>
        </tr>
        <tr>
          <td>list</td>
          <td>list-style-type: ${1};</td>
        </tr>
        <tr>
          <td>list:c</td>
          <td>list-style-type: circle;</td>
        </tr>
        <tr>
          <td>list:dclz</td>
          <td>list-style-type: decimal-leading-zero;</td>
        </tr>
        <tr>
          <td>list:dc</td>
          <td>list-style-type: decimal;</td>
        </tr>
        <tr>
          <td>list:d</td>
          <td>list-style-type: disc;</td>
        </tr>
        <tr>
          <td>list:lr</td>
          <td>list-style-type: lower-roman;</td>
        </tr>
        <tr>
          <td>list:n</td>
          <td>list-style-type: none;</td>
        </tr>
        <tr>
          <td>list:s</td>
          <td>list-style-type: square;</td>
        </tr>
        <tr>
          <td>list:ur</td>
          <td>list-style-type: upper-roman;</td>
        </tr>
        <tr>
          <td>lis</td>
          <td>list-style: ${1};</td>
        </tr>
        <tr>
          <td>lis:n</td>
          <td>list-style: none;</td>
        </tr>
        <tr>
          <td>mb</td>
          <td>margin-bottom: ${1};</td>
        </tr>
        <tr>
          <td>mb:a</td>
          <td>margin-bottom: auto;</td>
        </tr>
        <tr>
          <td>ml</td>
          <td>margin-left: ${1};</td>
        </tr>
        <tr>
          <td>ml:a</td>
          <td>margin-left: auto;</td>
        </tr>
        <tr>
          <td>mr</td>
          <td>margin-right: ${1};</td>
        </tr>
        <tr>
          <td>mr:a</td>
          <td>margin-right: auto;</td>
        </tr>
        <tr>
          <td>mt</td>
          <td>margin-top: ${1};</td>
        </tr>
        <tr>
          <td>mt:a</td>
          <td>margin-top: auto;</td>
        </tr>
        <tr>
          <td>m</td>
          <td>margin: ${1};</td>
        </tr>
        <tr>
          <td>m:4</td>
          <td>margin: ${1:0} ${2:0} ${3:0} ${4:0};</td>
        </tr>
        <tr>
          <td>m:3</td>
          <td>margin: ${1:0} ${2:0} ${3:0};</td>
        </tr>
        <tr>
          <td>m:2</td>
          <td>margin: ${1:0} ${2:0};</td>
        </tr>
        <tr>
          <td>m:0</td>
          <td>margin: 0;</td>
        </tr>
        <tr>
          <td>m:a</td>
          <td>margin: auto;</td>
        </tr>
        <tr>
          <td>mah</td>
          <td>max-height: ${1};</td>
        </tr>
        <tr>
          <td>mah:n</td>
          <td>max-height: none;</td>
        </tr>
        <tr>
          <td>maw</td>
          <td>max-width: ${1};</td>
        </tr>
        <tr>
          <td>maw:n</td>
          <td>max-width: none;</td>
        </tr>
        <tr>
          <td>mih</td>
          <td>min-height: ${1};</td>
        </tr>
        <tr>
          <td>miw</td>
          <td>min-width: ${1};</td>
        </tr>
        <tr>
          <td>op</td>
          <td>opacity: ${1};</td>
        </tr>
        <tr>
          <td>op:ie</td>
          <td>filter: progid:DXimagEtransform.microsoft.alpha(opacity=${1:100});</td>
        </tr>
        <tr>
          <td>op:ms</td>
          <td>-ms-filter: 'progid:DXimagEtransform.microsoft.alpha(opacity=${1:100})';</td>
        </tr>
        <tr>
          <td>orp</td>
          <td>orphans: ${1};</td>
        </tr>
        <tr>
          <td>o+</td>
          <td>outline: ${1:1px} ${2:solid} #${3:000};</td>
        </tr>
        <tr>
          <td>oc</td>
          <td>outline-color: ${1:#000};</td>
        </tr>
        <tr>
          <td>oc:i</td>
          <td>outline-color: invert;</td>
        </tr>
        <tr>
          <td>oo</td>
          <td>outline-offset: ${1};</td>
        </tr>
        <tr>
          <td>os</td>
          <td>outline-style: ${1};</td>
        </tr>
        <tr>
          <td>ow</td>
          <td>outline-width: ${1};</td>
        </tr>
        <tr>
          <td>o</td>
          <td>outline: ${1};</td>
        </tr>
        <tr>
          <td>o:n</td>
          <td>outline: none;</td>
        </tr>
        <tr>
          <td>ovs</td>
          <td>overflow-style: ${1};</td>
        </tr>
        <tr>
          <td>ovs:a</td>
          <td>overflow-style: auto;</td>
        </tr>
        <tr>
          <td>ovs:mq</td>
          <td>overflow-style: marquee;</td>
        </tr>
        <tr>
          <td>ovs:mv</td>
          <td>overflow-style: move;</td>
        </tr>
        <tr>
          <td>ovs:p</td>
          <td>overflow-style: panner;</td>
        </tr>
        <tr>
          <td>ovs:s</td>
          <td>overflow-style: scrollbar;</td>
        </tr>
        <tr>
          <td>ovx</td>
          <td>overflow-x: ${1};</td>
        </tr>
        <tr>
          <td>ovx:a</td>
          <td>overflow-x: auto;</td>
        </tr>
        <tr>
          <td>ovx:h</td>
          <td>overflow-x: hidden;</td>
        </tr>
        <tr>
          <td>ovx:s</td>
          <td>overflow-x: scroll;</td>
        </tr>
        <tr>
          <td>ovx:v</td>
          <td>overflow-x: visible;</td>
        </tr>
        <tr>
          <td>ovy</td>
          <td>overflow-y: ${1};</td>
        </tr>
        <tr>
          <td>ovy:a</td>
          <td>overflow-y: auto;</td>
        </tr>
        <tr>
          <td>ovy:h</td>
          <td>overflow-y: hidden;</td>
        </tr>
        <tr>
          <td>ovy:s</td>
          <td>overflow-y: scroll;</td>
        </tr>
        <tr>
          <td>ovy:v</td>
          <td>overflow-y: visible;</td>
        </tr>
        <tr>
          <td>ov</td>
          <td>overflow: ${1};</td>
        </tr>
        <tr>
          <td>ov:a</td>
          <td>overflow: auto;</td>
        </tr>
        <tr>
          <td>ov:h</td>
          <td>overflow: hidden;</td>
        </tr>
        <tr>
          <td>ov:s</td>
          <td>overflow: scroll;</td>
        </tr>
        <tr>
          <td>ov:v</td>
          <td>overflow: visible;</td>
        </tr>
        <tr>
          <td>pb</td>
          <td>padding-bottom: ${1};</td>
        </tr>
        <tr>
          <td>pl</td>
          <td>padding-left: ${1};</td>
        </tr>
        <tr>
          <td>pr</td>
          <td>padding-right: ${1};</td>
        </tr>
        <tr>
          <td>pt</td>
          <td>padding-top: ${1};</td>
        </tr>
        <tr>
          <td>p</td>
          <td>padding: ${1};</td>
        </tr>
        <tr>
          <td>p:4</td>
          <td>padding: ${1:0} ${2:0} ${3:0} ${4:0};</td>
        </tr>
        <tr>
          <td>p:3</td>
          <td>padding: ${1:0} ${2:0} ${3:0};</td>
        </tr>
        <tr>
          <td>p:2</td>
          <td>padding: ${1:0} ${2:0};</td>
        </tr>
        <tr>
          <td>p:0</td>
          <td>padding: 0;</td>
        </tr>
        <tr>
          <td>pgba</td>
          <td>page-break-after: ${1};</td>
        </tr>
        <tr>
          <td>pgba:aw</td>
          <td>page-break-after: always;</td>
        </tr>
        <tr>
          <td>pgba:a</td>
          <td>page-break-after: auto;</td>
        </tr>
        <tr>
          <td>pgba:l</td>
          <td>page-break-after: left;</td>
        </tr>
        <tr>
          <td>pgba:r</td>
          <td>page-break-after: right;</td>
        </tr>
        <tr>
          <td>pgbb</td>
          <td>page-break-before: ${1};</td>
        </tr>
        <tr>
          <td>pgbb:aw</td>
          <td>page-break-before: always;</td>
        </tr>
        <tr>
          <td>pgbb:a</td>
          <td>page-break-before: auto;</td>
        </tr>
        <tr>
          <td>pgbb:l</td>
          <td>page-break-before: left;</td>
        </tr>
        <tr>
          <td>pgbb:r</td>
          <td>page-break-before: right;</td>
        </tr>
        <tr>
          <td>pgbi</td>
          <td>page-break-inside: ${1};</td>
        </tr>
        <tr>
          <td>pgbi:a</td>
          <td>page-break-inside: auto;</td>
        </tr>
        <tr>
          <td>pgbi:av</td>
          <td>page-break-inside: avoid;</td>
        </tr>
        <tr>
          <td>pos</td>
          <td>position: ${1};</td>
        </tr>
        <tr>
          <td>pos:a</td>
          <td>position: absolute;</td>
        </tr>
        <tr>
          <td>pos:f</td>
          <td>position: fixed;</td>
        </tr>
        <tr>
          <td>pos:r</td>
          <td>position: relative;</td>
        </tr>
        <tr>
          <td>pos:s</td>
          <td>position: static;</td>
        </tr>
        <tr>
          <td>q</td>
          <td>quotes: ${1};</td>
        </tr>
        <tr>
          <td>q:en</td>
          <td>quotes: '\201C' '\201D' '\2018' '\2019';</td>
        </tr>
        <tr>
          <td>q:n</td>
          <td>quotes: none;</td>
        </tr>
        <tr>
          <td>q:ru</td>
          <td>quotes: '\00AB' '\00BB' '\201E' '\201C';</td>
        </tr>
        <tr>
          <td>rz</td>
          <td>resize: ${1};</td>
        </tr>
        <tr>
          <td>rz:b</td>
          <td>resize: both;</td>
        </tr>
        <tr>
          <td>rz:h</td>
          <td>resize: horizontal;</td>
        </tr>
        <tr>
          <td>rz:n</td>
          <td>resize: none;</td>
        </tr>
        <tr>
          <td>rz:v</td>
          <td>resize: vertical;</td>
        </tr>
        <tr>
          <td>r</td>
          <td>right: ${1};</td>
        </tr>
        <tr>
          <td>r:a</td>
          <td>right: auto;</td>
        </tr>
        <tr>
          <td>tbl</td>
          <td>table-layout: ${1};</td>
        </tr>
        <tr>
          <td>tbl:a</td>
          <td>table-layout: auto;</td>
        </tr>
        <tr>
          <td>tbl:f</td>
          <td>table-layout: fixed;</td>
        </tr>
        <tr>
          <td>tal</td>
          <td>text-align-last: ${1};</td>
        </tr>
        <tr>
          <td>tal:a</td>
          <td>text-align-last: auto;</td>
        </tr>
        <tr>
          <td>tal:c</td>
          <td>text-align-last: center;</td>
        </tr>
        <tr>
          <td>tal:l</td>
          <td>text-align-last: left;</td>
        </tr>
        <tr>
          <td>tal:r</td>
          <td>text-align-last: right;</td>
        </tr>
        <tr>
          <td>ta</td>
          <td>text-align: ${1};</td>
        </tr>
        <tr>
          <td>ta:c</td>
          <td>text-align: center;</td>
        </tr>
        <tr>
          <td>ta:l</td>
          <td>text-align: left;</td>
        </tr>
        <tr>
          <td>ta:r</td>
          <td>text-align: right;</td>
        </tr>
        <tr>
          <td>td</td>
          <td>text-decoration: ${1};</td>
        </tr>
        <tr>
          <td>td:l</td>
          <td>text-decoration: line-through;</td>
        </tr>
        <tr>
          <td>td:n</td>
          <td>text-decoration: none;</td>
        </tr>
        <tr>
          <td>td:o</td>
          <td>text-decoration: overline;</td>
        </tr>
        <tr>
          <td>td:u</td>
          <td>text-decoration: underline;</td>
        </tr>
        <tr>
          <td>te</td>
          <td>text-emphasis: ${1};</td>
        </tr>
        <tr>
          <td>te:ac</td>
          <td>text-emphasis: accent;</td>
        </tr>
        <tr>
          <td>te:a</td>
          <td>text-emphasis: after;</td>
        </tr>
        <tr>
          <td>te:b</td>
          <td>text-emphasis: before;</td>
        </tr>
        <tr>
          <td>te:c</td>
          <td>text-emphasis: circle;</td>
        </tr>
        <tr>
          <td>te:ds</td>
          <td>text-emphasis: disc;</td>
        </tr>
        <tr>
          <td>te:dt</td>
          <td>text-emphasis: dot;</td>
        </tr>
        <tr>
          <td>te:n</td>
          <td>text-emphasis: none;</td>
        </tr>
        <tr>
          <td>th</td>
          <td>text-height: ${1};</td>
        </tr>
        <tr>
          <td>th:a</td>
          <td>text-height: auto;</td>
        </tr>
        <tr>
          <td>th:f</td>
          <td>text-height: font-size;</td>
        </tr>
        <tr>
          <td>th:m</td>
          <td>text-height: max-size;</td>
        </tr>
        <tr>
          <td>th:t</td>
          <td>text-height: text-size;</td>
        </tr>
        <tr>
          <td>ti</td>
          <td>text-indent: ${1};</td>
        </tr>
        <tr>
          <td>ti:-</td>
          <td>text-indent: -9999px;</td>
        </tr>
        <tr>
          <td>tj</td>
          <td>text-justify: ${1};</td>
        </tr>
        <tr>
          <td>tj:a</td>
          <td>text-justify: auto;</td>
        </tr>
        <tr>
          <td>tj:d</td>
          <td>text-justify: distribute;</td>
        </tr>
        <tr>
          <td>tj:ic</td>
          <td>text-justify: inter-cluster;</td>
        </tr>
        <tr>
          <td>tj:ii</td>
          <td>text-justify: inter-ideograph;</td>
        </tr>
        <tr>
          <td>tj:iw</td>
          <td>text-justify: inter-word;</td>
        </tr>
        <tr>
          <td>tj:k</td>
          <td>text-justify: kashida;</td>
        </tr>
        <tr>
          <td>tj:t</td>
          <td>text-justify: tibetan;</td>
        </tr>
        <tr>
          <td>to+</td>
          <td>text-outline: ${1:0} ${2:0} #${3:000};</td>
        </tr>
        <tr>
          <td>to</td>
          <td>text-outline: ${1};</td>
        </tr>
        <tr>
          <td>to:n</td>
          <td>text-outline: none;</td>
        </tr>
        <tr>
          <td>tr</td>
          <td>text-replace: ${1};</td>
        </tr>
        <tr>
          <td>tr:n</td>
          <td>text-replace: none;</td>
        </tr>
        <tr>
          <td>tsh+</td>
          <td>text-shadow: ${1:0} ${2:0} ${3:0} #${4:000};</td>
        </tr>
        <tr>
          <td>tsh</td>
          <td>text-shadow: ${1};</td>
        </tr>
        <tr>
          <td>tsh:n</td>
          <td>text-shadow: none;</td>
        </tr>
        <tr>
          <td>tt</td>
          <td>text-transform: ${1};</td>
        </tr>
        <tr>
          <td>tt:c</td>
          <td>text-transform: capitalize;</td>
        </tr>
        <tr>
          <td>tt:l</td>
          <td>text-transform: lowercase;</td>
        </tr>
        <tr>
          <td>tt:n</td>
          <td>text-transform: none;</td>
        </tr>
        <tr>
          <td>tt:u</td>
          <td>text-transform: uppercase;</td>
        </tr>
        <tr>
          <td>tw</td>
          <td>text-wrap: ${1};</td>
        </tr>
        <tr>
          <td>tw:no</td>
          <td>text-wrap: none;</td>
        </tr>
        <tr>
          <td>tw:n</td>
          <td>text-wrap: normal;</td>
        </tr>
        <tr>
          <td>tw:s</td>
          <td>text-wrap: suppress;</td>
        </tr>
        <tr>
          <td>tw:u</td>
          <td>text-wrap: unrestricted;</td>
        </tr>
        <tr>
          <td>t</td>
          <td>top: ${1};</td>
        </tr>
        <tr>
          <td>t:a</td>
          <td>top: auto;</td>
        </tr>
        <tr>
          <td>va</td>
          <td>vertical-align: ${1};</td>
        </tr>
        <tr>
          <td>va:bl</td>
          <td>vertical-align: baseline;</td>
        </tr>
        <tr>
          <td>va:b</td>
          <td>vertical-align: bottom;</td>
        </tr>
        <tr>
          <td>va:m</td>
          <td>vertical-align: middle;</td>
        </tr>
        <tr>
          <td>va:sub</td>
          <td>vertical-align: sub;</td>
        </tr>
        <tr>
          <td>va:sup</td>
          <td>vertical-align: super;</td>
        </tr>
        <tr>
          <td>va:tb</td>
          <td>vertical-align: text-bottom;</td>
        </tr>
        <tr>
          <td>va:tt</td>
          <td>vertical-align: text-top;</td>
        </tr>
        <tr>
          <td>va:t</td>
          <td>vertical-align: top;</td>
        </tr>
        <tr>
          <td>v</td>
          <td>visibility: ${1};</td>
        </tr>
        <tr>
          <td>v:c</td>
          <td>visibility: collapse;</td>
        </tr>
        <tr>
          <td>v:h</td>
          <td>visibility: hidden;</td>
        </tr>
        <tr>
          <td>v:v</td>
          <td>visibility: visible;</td>
        </tr>
        <tr>
          <td>whsc</td>
          <td>white-space-collapse: ${1};</td>
        </tr>
        <tr>
          <td>whsc:ba</td>
          <td>white-space-collapse: break-all;</td>
        </tr>
        <tr>
          <td>whsc:bs</td>
          <td>white-space-collapse: break-strict;</td>
        </tr>
        <tr>
          <td>whsc:k</td>
          <td>white-space-collapse: keep-all;</td>
        </tr>
        <tr>
          <td>whsc:l</td>
          <td>white-space-collapse: loose;</td>
        </tr>
        <tr>
          <td>whsc:n</td>
          <td>white-space-collapse: normal;</td>
        </tr>
        <tr>
          <td>whs</td>
          <td>white-space: ${1};</td>
        </tr>
        <tr>
          <td>whs:n</td>
          <td>white-space: normal;</td>
        </tr>
        <tr>
          <td>whs:nw</td>
          <td>white-space: nowrap;</td>
        </tr>
        <tr>
          <td>whs:pl</td>
          <td>white-space: pre-line;</td>
        </tr>
        <tr>
          <td>whs:pw</td>
          <td>white-space: pre-wrap;</td>
        </tr>
        <tr>
          <td>whs:p</td>
          <td>white-space: pre;</td>
        </tr>
        <tr>
          <td>wid</td>
          <td>widows: ${1};</td>
        </tr>
        <tr>
          <td>w</td>
          <td>width: ${1};</td>
        </tr>
        <tr>
          <td>w:a</td>
          <td>width: auto;</td>
        </tr>
        <tr>
          <td>wob</td>
          <td>word-break: ${1};</td>
        </tr>
        <tr>
          <td>wob:ba</td>
          <td>word-break: break-all;</td>
        </tr>
        <tr>
          <td>wob:bs</td>
          <td>word-break: break-strict;</td>
        </tr>
        <tr>
          <td>wob:k</td>
          <td>word-break: keep-all;</td>
        </tr>
        <tr>
          <td>wob:l</td>
          <td>word-break: loose;</td>
        </tr>
        <tr>
          <td>wob:n</td>
          <td>word-break: normal;</td>
        </tr>
        <tr>
          <td>wos</td>
          <td>word-spacing: ${1};</td>
        </tr>
        <tr>
          <td>wow</td>
          <td>word-wrap: ${1};</td>
        </tr>
        <tr>
          <td>wow:no</td>
          <td>word-wrap: none;</td>
        </tr>
        <tr>
          <td>wow:n</td>
          <td>word-wrap: normal;</td>
        </tr>
        <tr>
          <td>wow:s</td>
          <td>word-wrap: suppress;</td>
        </tr>
        <tr>
          <td>wow:u</td>
          <td>word-wrap: unrestricted;</td>
        </tr>
        <tr>
          <td>z</td>
          <td>z-index: ${1};</td>
        </tr>
        <tr>
          <td>z:a</td>
          <td>z-index: auto;</td>
        </tr>
        <tr>
          <td>zoo</td>
          <td>zoom: 1;</td>
        </tr>
      </table>
      
    </div>
  </div>
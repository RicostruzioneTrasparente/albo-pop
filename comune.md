---
layout: petrusino
title: comune
permalink: /comune/
---

<div class="row clearfix">
  <div class="column">
    <strong>Cerca</strong><span ex:role="facet" ex:facetClass="TextSearch"></span>
  </div>
</div>

<div class="row clearfix">
  <div class="col-md-6 column">
    <div ex:role="facet" 
    ex:facetClass="Cloud"
    ex:expression=".maintainer_name" 
    ex:facetLabel="Curatore"
    ex:sortMode="count"></div>
  </div>
  <div class="col-md-6 column">
    <div ex:role="facet" 
    ex:expression=".tags" 
    ex:facetLabel="Tags"
    ex:sortMode="count"></div>
  </div>
</div>

<div class="row clearfix">
    <div class="column">
        <div ex:role="viewPanel">
            <div
                ex:role="exhibit-view" 
                ex:viewClass="Exhibit.TabularView"  
                ex:label="Table"  
                ex:columns=".name,.albopop_feed,.tags,.datetime"  
                ex:columnLabels="Denominazione,Feed RSS,Tags,Ultimo aggiornamento" 
                ex:columnFormats="list,list,list,list"
                ex:sortColumn="3"
                ex:sortAscending="false"
                ex:tableStyler="tableStyler"
            > 
                <div ex:role="exhibit-lens">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td><a ex:href-content=".website" target="_blank">Comune di <strong><span ex:content=".name" class="petrusino"></span></strong></a></td>
                                <td><a ex:href-content=".albopop_feed" target="_blank"><img src="../images/Rssicon_3614.gif"></a></td>
                                <td><span ex:content=".tags"></span></td>
                                <td><span ex:content=".datetime"></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
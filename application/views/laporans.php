<div class="topcolumn">
            <div class="logo"></div>
                            &nbsp;     
          </div>  
          <div class="clear"></div>          
                    <div class="clear"></div>
                  <?=$this->message->display();?>
                  <div class="onecolumn" >
                  <div class="header"><span ><span class="ico  gray spreadsheet"></span>Rekap Laporan</span> </div><!-- End header --> 
                  <div class="clear"></div>
                  <div class="content" >                                      
                              <div class="load_page">                        
                                 
                                <div class="formEl_b">  
                                <form id="validation" action="<?=base_url()?>laporans/<?php echo $link; ?>" method="POST"> 
                                <fieldset >
                                <legend>Generate Laporan <span class="small s_color">( <?php echo $keterangan; ?> )</span></legend>                                                                          
                                      <div class="section">
                                      <label> Tahun Laporan </label>
                                      <div>
                                              <?                                              
                                              echo form_dropdown('tahun', $tahun);
                                              ?>                                      
                                      </div>                                                                            
                                      </div>
                                      <div class="section">
                                      <label> Jenjang Laporan </label>
                                      <div>
                                              <?                                              
                                              echo form_dropdown('jenjang', $jenjang);
                                              ?>                                      
                                      </div>                                                                            
                                      </div>
                                      <div class="section">
                                      <label> Status Sekolah </label>
                                      <div>
                                              <?                                              
                                              echo form_dropdown('status', $status);
                                              ?>                                      
                                      </div>                                                                            
                                      </div>
                                      <div class="section last">
                                      <div>
                                        <a class="uibutton submit_form" >Generate Report</a>
                                     </div>
                                     </div>                                     
                                </fieldset>
                                </form>
                                </div>                                                                                                    
                  </div>                  
                  <div class="clear"/></div>                  
                  </div>
                  </div>
<div class="topcolumn">
            <div class="logo"></div>
                            <ul  id="shortcut">
                                <li> <a href="<?=base_url()?>masters/kecamatan" title="Back To home"> <img src="<?=base_url()?>assets/template/fingers/images/icon/shortcut/home.png" alt="home" width="40px"/><strong>Daftar</strong> </a> </li>
                            </ul>      
          </div>  
          <div class="clear"></div>          
                    <div class="clear"></div>
                        
                  <div class="onecolumn" >
                  <div class="header"><span ><span class="ico  gray user"></span><?=$ket?></span> </div><!-- End header --> 
                  <div class="clear"></div>
                  <div class="content" >                      
                    <div class="tab_container" >

                          <div id="tab1" class="tab_content"> 
                              <div class="load_page">                        
                                 
                                <div class="formEl_b">  
                                <form id="validation" action="<?=base_url()?>masters/<?=$link?>" method="POST"> 
                                <fieldset >
                                <legend><?=$ket?> <span class="small s_color">( <?=$jenis?> )</span></legend>                                                                                                             
                                      <div class="section">
                                            <label>Nama Kabupaten <small>Pilih salah satu</small></label>   
                                            <div>                      
                                              <?
                                              $selek = (isset($kueri->id_kabupaten))?$kueri->id_kabupaten:"";
                                              $jp = "data-placeholder='Pilih Kabupaten...' class='chzn-select'";
                                              echo form_dropdown('kabupaten', $kabupaten, $selek,$jp);
                                              ?>
                                      </div>
                                      </div>   
                                      <div class="section">
                                      <label> Nama Kecamatan  <small>Nama</small></label>
                                      <div>
                                      <input type="text"  name="nama" id="nama"  class="validate[required] medium" value="<? if(isset($kueri->nama_kecamatan)){ echo $kueri->nama_kecamatan; } ?>"/>
                                      <span class="f_help"> Isikan Nama Kecamatan. </span> 
                                      </div>                                                                            
                                      </div>
                                      <div class="section">
                                      <label> Kode Kecamatan  <small>Kode</small></label>
                                      <div>
                                      <input type="text"  name="kode" id="kode"  class="validate[required] medium" value="<? if(isset($kueri->kode_kecamatan)){ echo $kueri->kode_kecamatan; } ?>"/>
                                      <span class="f_help"> Isikan Kode Kecamatan. </span> 
                                      </div>                                                                            
                                      </div>
                                      <div class="section last">
                                      <div>
                                        <a class="uibutton submit_form" >Simpan</a><a class="uibutton special"   onClick="ResetForm()" title="Reset  Form"   >Reset Form</a>
                                     </div>
                                     </div>
                                </fieldset>
                                </form>
                                </div>
                              </div>  
                          </div><!--tab1-->                                                                                                      
                  </div>                  
                  <div class="clear"/></div>                  
                  </div>
                  </div>
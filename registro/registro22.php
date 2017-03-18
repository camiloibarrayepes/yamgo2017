<form action="../logic/logic_registro_user.php" method="post" class="wpcf7-form">
                                 
                                 <p><label> Nombre Completo<br />
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="nombre" value="" size="70" required/></span> </label>
                                 </p>
                                 <p><label> Email <br />
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="70" required/></span> </label>
                                 </p>
                                 <p><label> Telefono<br />
                                    <span class="wpcf7-form-control-wrap tel-729"><input type="text" name="telefono" value="" size="70"  required/></span> </label>
                                 </p>
                                  <p><label> Ciudad<br />
                                    <span class="wpcf7-form-control-wrap tel-729"><input type="text" name="ciudad" value="" size="70" 
                                     placeholder="De que Ciudad eres o donde estas?" required/></span> </label>
                                 </p>
                                 <p>
                                    <label>
                                       Quiero ser...<br />
                                       <span class="wpcf7-form-control-wrap menu-607">
                                          <select name="rol" >
                                             <option value="1">Guía</option>
                                             <option value="2">Presta Biker</option>
                                             <option value="3">Guía y Presta Biker</option>
                                          </select>
                                       </span>
                                    </label>
                                 </p>
                                 <p><label> Código Invitación<br />
                                    <span class="wpcf7-form-control-wrap text-237"><input type="text" name="cod_inv" value="" size="70"  placeholder="Ejemplo: YC34F" /></span> </label>
                                 </p>
                                 <p><label> Contraseña<br />
                                    <span class="wpcf7-form-control-wrap text-237"><input type="password" name="pass" value="" size="70"  required /></span> </label>
                                 </p>
                                <p><input type="submit" value="Registrar" /></p>
                                
                              </form>
                              <form action="../logic/logic_registro_user.php" method="POST">
                                 <input type="text" name="name">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                              </form>
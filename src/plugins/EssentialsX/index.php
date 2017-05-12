<?php include '../../includes/head.php'; ?>
<title>McConfig - EssentialsX Generator</title>
<div class="container">
   <header class="page-header">
      <h1>EssentialsX:</h1>
   </header>
   <form class="form" action="./output" method="POST">
      <input type="hidden" name="plugin-name" value="EssentialsX">
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Global
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>OP Name Colour:</label>
               <p>A color code between 0-9 or a-f.<br/>Set to 'none' to disable.</p>
               <select class="form-control" name="ops-name-color">
                  <option style="background: #be0000;color:white;">4</option>
                  <option style="background: #fe3f3f;color:white;">c</option>
                  <option style="background: #D9A334;color:white;">6</option>
                  <option style="background: #fefe3f">e</option>
                  <option style="background: #00be00;color:white;">2</option>
                  <option style="background: #3ffe3f">a</option>
                  <option style="background: #3ffefe">b</option>
                  <option style="background: #00bebe;color:white;">3</option>
                  <option style="background: #0000be;color:white;">1</option>
                  <option style="background: #3f3ffe;color:white;">9</option>
                  <option style="background: #fe3ffe;color:white;">d</option>
                  <option style="background: #be00be;color:white;">5</option>
                  <option style="background: #ffffff">f</option>
                  <option style="background: #bebebe">7</option>
                  <option style="background: #3f3f3f;color:white;">8</option>
                  <option style="background: #000000;color:white;">0</option>
                  <option>None</option>
               </select>
            </div>
            <div class="form-group">
               <label>Nickname Prefix:</label>
               <p>The character(s) to prefix all nicknames, so that you know they are not true usernames.<br/>If left blank, nickname prefix will be disabled.</p>
               <input type="text" class="form-control"  name="nickname-prefix" value="~">
            </div>
            <div class="form-group">
               <label>Max Nickname Length:</label>
               <p>The maximum length allowed in nicknames.<br/>The nickname prefix is included in this.</p>
               <input type="number" class="form-control"  name="max-nick-length" value="15">
            </div>
            <div class="form-group">
               <label>Ignore Colours In Max Nickname Length:</label>
               <input type="checkbox" value="true" name="ignore-colors-in-max-nick-length"><br/>
               <p>When this option is enabled, nickname length checking will exclude color codes in player names.<br/>ie: "&amp;6Notch" has 7 characters (2 are part of a color code), a length of 5 is used when this option is set to true</p>
            </div>
            <div class="form-group">
               <label>Change Displayname:</label>
               <input type="checkbox" value="true" name="change-displayname" checked><br/>
               <p>Disable this if you have any other plugin, that modifies the displayname of a user.</p>
            </div>
            <div class="form-group">
               <label>Change Playerlist:</label>
               <input type="checkbox" value="true" name="change-playerlist" checked><br/>
               <p>When this option is enabled, the (tab) player list will be updated with the displayname.<br/>The value of change-displayname (above) has to be true.</p>
            </div>
            <div class="form-group">
               <label>Add Prefix &amp; Suffix:</label>
               <input type="checkbox" value="true" name="add-prefix-suffix"><br/>
               <p>When EssentialsChat.jar isn't used, force essentials to add the prefix and suffix from permission plugins to displayname.<br/>This setting is ignored if EssentialsChat.jar is used, and defaults to 'true'.<br/>The value of change-displayname (above) has to be true.<br/><b>Do not edit this setting unless you know what you are doing!</b></p>
            </div>
            <div class="form-group">
               <label>Teleport Safety:</label>
               <input type="checkbox" value="true" name="teleport-safety" checked><br/>
               <p>If the teleport destination is unsafe, should players be teleported to the nearest safe location?<br/>If this is set to true, Essentials will attempt to teleport players close to the intended destination.<br/>If this is set to false, attempted teleports to unsafe locations will be cancelled with a warning.</p>
            </div>
            <div class="form-group">
               <label>Force Disable Teleport Safety:</label>
               <input type="checkbox" value="true" name="force-disable-teleport-safety"><br/>
               <p>This forcefully disables teleport safety checks without a warning if attempting to teleport to unsafe locations.<br/>teleport-safety and this option need to be set to true to force teleportation to dangerous locations.</p>
            </div>
            <div class="form-group">
               <label>Teleport Cooldown:</label>
               <p>The delay, in seconds, required between /home, /tp, etc.</p>
               <input type="number" class="form-control"  name="teleport-cooldown" value="0">
            </div>
            <div class="form-group">
               <label>Teleport Delay:</label>
               <p>The delay, in seconds, before a user actually teleports.  If the user moves or gets attacked in this timeframe, the teleport never occurs.</p>
               <input type="number" class="form-control"  name="teleport-delay" value="0">
            </div>
            <div class="form-group">
               <label>Teleport Invulnerability:</label>
               <p>The delay, in seconds, a player can't be attacked by other players after they have been teleported by a command.<br/>This will also prevent the player attacking other players.</p>
               <input type="number" class="form-control"  name="teleport-invulnerability" value="0">
            </div>
            <div class="form-group">
               <label>Teleport To Center:</label>
               <input type="checkbox" value="true" name="teleport-to-center"><br/>
               <p>Whether to make all teleportations go to the center of the block; where the x and z coordinates decimal become .5</p>
            </div>
            <div class="form-group">
               <label>Heal Cooldown:</label>
               <p>The delay, in seconds, required between /heal or /feed attempts.</p>
               <input type="number" class="form-control"  name="heal-cooldown" value="0">
            </div>
            <div class="form-group">
               <label>Near Radius:</label>
               <p>The default radius with /near<br/>Used to use chat radius but we are going to make it separate.</p>
               <input type="number" class="form-control"  name="near-radius" value="200">
            </div>
            <div class="form-group">
               <label>Item Spawn Blacklist:</label>
               <p>What to prevent from /item and /give.<br/>Example: 10,11,46<br/>Default is left blank.</p>
               <input type="text" class="form-control"  name="item-spawn-blacklist" value="">
            </div>
            <div class="form-group">
               <label>Permission Based Item Spawning:</label>
               <input type="checkbox" value="true" name="permission-based-item-spawn"><br/>
               <p>Set this to true if you want permission based item spawn rules.<br/>Note: The blacklist above will be ignored then.<br/>Example permissions (these go in your permissions manager):<br/> - essentials.itemspawn.item-all<br/> - essentials.itemspawn.item-[itemname]<br/> - essentials.itemspawn.item-[itemid]<br/> - essentials.give.item-all<br/> - essentials.give.item-[itemname]<br/> - essentials.give.item-[itemid]<br/> - essentials.unlimited.item-all<br/> - essentials.unlimited.item-[itemname]<br/> - essentials.unlimited.item-[itemid]<br/> - essentials.unlimited.item-bucket <b>Unlimited liquid placing</b>
                  <br/>For more information, visit <a href="http://wiki.ess3.net/wiki/Command_Reference/ICheat#Item.2FGive" target="_blank">http://wiki.ess3.net/wiki/Command_Reference/ICheat#Item.2FGive</a>
               </p>
            </div>
            <div class="form-group">
               <label>Spawn Mob Limit:</label>
               <p>Mob limit on the /spawnmob command per execution.</p>
               <input type="number" class="form-control"  name="spawnmob-limit" value="10">
            </div>
            <div class="form-group">
               <label>Warn On Smite:</label>
               <input type="checkbox" value="true" name="warn-on-smite" checked><br/>
               <p>Shall we notify users when using /lightning?</p>
            </div>
            <div class="form-group">
               <label>Drop Items If Full:</label>
               <input type="checkbox" value="true" name="drop-items-if-full"><br/>
               <p>Shall we drop items instead of adding to inventory if the target inventory is full?</p>
            </div>
            <div class="form-group">
               <label>Notify No New Mail:</label>
               <input type="checkbox" value="true" name="notify-no-new-mail" checked><br/>
               <p>Should we notify players if they have no new mail?</p>
            </div>
            <div class="form-group">
               <label>Overridden Commands:</label>
               <p> 
               <p>When a command conflicts with another plugin, by default, Essentials will try to force the OTHER plugin to take priority.<br/>
                  Commands in this list, will tell Essentials to 'not give up' the command to other plugins.<br/>
                  In this state, which plugin 'wins' appears to be almost random.
                  <br/>
                  If you have two plugin with the same command and you wish to force Essentials to take over, you need an alias.<br/>
                  To force essentials to take 'god' alias 'god' to 'egod'.<br/>
                  See <a href="http://wiki.bukkit.org/Commands.yml#aliases" target="_blank">http://wiki.bukkit.org/Commands.yml#aliases</a> for more information.
               </p>
               <input class="btn btn-success" type="button" value="Add Overridden Command" onClick="addRow('overridden-commands-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Overridden Command(s)" onClick="deleteRow('overridden-commands-table')"  />
               </p>
               <table class="table table-condensed" id="overridden-commands-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="overridden-commands[]" size="35">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Disabled Commands:</label>
               <p> 
               <p>Disabling commands here will prevent Essentials handling the command, this will not affect command conflicts.<br/>
                  You should not have to disable commands used in other plugins, they will automatically get priority.<br/>
                  See <a href="http://wiki.bukkit.org/Commands.yml#aliases" target="_blank">http://wiki.bukkit.org/Commands.yml#aliases</a> to map commands to other plugins.
               </p>
               <input class="btn btn-success" type="button" value="Add Disabled Command" onClick="addRow('disabled-commands-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Disabled Command(s)" onClick="deleteRow('disabled-commands-table')"  />
               </p>
               <table class="table table-condensed" id="disabled-commands-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="disabled-commands[]" size="35">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Socialspy Commands:</label>
               <p> 
               <p>These commands will be shown to players with socialSpy enabled.<br/>
                  You can add commands from other plugins you may want to track or<br/>
                  remove commands that are used for something you dont want to spy on.<br/>
                  Set - '*' in order to listen on all possible commands.
               </p>
               <input class="btn btn-success" type="button" value="Add Socialspy Command" onClick="addRow('socialspy-commands-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Socialspy Command(s)" onClick="deleteRow('socialspy-commands-table')"  />
               </p>
               <table class="table table-condensed" id="socialspy-commands-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="msg">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="w">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="r">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="mail">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="m">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="t">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="whisper">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="emsg">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="tell">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="er">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="reply">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="ereply">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="email">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="action">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="describe">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="eme">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="eaction">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="edescribe">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="etell">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="ewhisper">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="socialspy-commands[]" size="35" value="pm">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Mute Commands:</label>
               <p> 
               <p>These commands will be disabled when a player is muted.<br/>
                  Use '*' to disable every command.<br/>
                  Essentials already disabled Essentials messaging commands by default.<br/>
                  It only cares about the root command, not args after that (it sees /f chat the same as /f)
               </p>
               <input class="btn btn-success" type="button" value="Add Mute Command" onClick="addRow('mute-commands-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Mute Command(s)" onClick="deleteRow('mute-commands-table')"  />
               </p>
               <table class="table table-condensed" id="mute-commands-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="mute-commands[]" size="35">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="mute-commands[]" size="35" value="f">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="mute-commands[]" size="35" value="kittycannon">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Player Commands:</label>
               <p> 
               <p>If you do not wish to use a permission system, you can define a list of 'player perms' below.<br/>
                  This list has no effect if you are using a supported permissions system.<br/>
                  If you are using an unsupported permissions system, simply delete this section.<br/>
                  Whitelist the commands and permissions you wish to give players by default (everything else is op only).<br/>
                  These are the permissions without the "essentials." part.
               </p>
               <input class="btn btn-success" type="button" value="Add Player Command" onClick="addRow('player-commands-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Player Command(s)" onClick="deleteRow('player-commands-table')"  />
               </p>
               <table class="table table-condensed" id="player-commands-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="afk">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="afk.auto">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="back">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="back.ondeath">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="balance">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="balance.others">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="balancetop">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="build">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="chat.color">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="chat.format">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="chat.shout">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="chat.question">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="clearinventory">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="compass">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="depth">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="delhome">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="getpos">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="geoip.show">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="help">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="helpop">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="home">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="home.others">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="ignore">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="info">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="itemdb">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="kit">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="kits.tools">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="list">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="mail">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="mail.send">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="me">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="motd">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="msg">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="msg.color">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="nick">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="near">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="pay">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="ping">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="protect">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="r">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="rules">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="realname">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="seen">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="sell">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="sethome">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="setxmpp">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.create.protection">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.create.trade">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.break.protection">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.break.trade">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.balance">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.buy">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.disposal">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.enchant">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.free">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.gamemode">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.heal">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.info">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.kit">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.mail">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.protection">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.repair">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.sell">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.time">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.trade">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.warp">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="signs.use.weather">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="spawn">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="suicide">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="time">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="tpa">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="tpaccept">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="tpahere">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="tpdeny">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="warp">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="warp.list">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="world">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="worth">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="player-commands[]" size="35" value="xmpp">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Skip Used One Time Kits From Kit List:</label>
               <input type="checkbox" value="true" name="skip-used-one-time-kits-from-kit-list"><br/>
               <p>When this option is enabled, one-time use kits (ie. delay < 0) will be.<br/>removed from the /kit list when a player can no longer use it</p>
            </div>
            <div class="form-group">
               <label>Kits:</label>
               <p> 
               <p>Note: All items MUST be followed by a quantity!<br/>
                  All kit names should be lower case, and will be treated as lower in permissions/costs.<br/>
                  Syntax: - itemID[:DataValue/Durability] Amount [Enchantment:Level].. [itemmeta:value]...<br/>
                  For Item Meta information visit <a href="http://wiki.ess3.net/wiki/Item_Meta" target="_blank">http://wiki.ess3.net/wiki/Item_Meta</a><br/>
                  'delay' refers to the cooldown between how often you can use each kit, measured in seconds.<br/>
                  Set delay to -1 for a one time kit.<br/>
                  For more information, visit <a href="http://wiki.ess3.net/wiki/Kits" target="_blank">http://wiki.ess3.net/wiki/Kits</a>
               </p>
               <input class="btn btn-success" type="button" value="Add Kit" onClick="addRow('kits-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Kit(s)" onClick="deleteRow('kits-table')"  />
               <input class="btn btn-success" type="button" value="Add Kit Items" id="btnAddCol"  />
               </p>
               <table class="table table-condensed" id="kits-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Kit Name:</label>
                           <input type="text" class="form-control"  name="kits-name[]" size="35">
                        </td>
                        <td>
                           <label>Kit Delay:</label>
                           <input type="text" class="form-control"  name="kits-delay[]" size="35">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Enabled Signs:</label>
               <p>Essentials Sign Control<br/>See <a href="http://wiki.ess3.net/wiki/Sign_Tutorial" target="_blank">http://wiki.ess3.net/wiki/Sign_Tutorial</a> for instructions on how to use these.<br/>To enable signs, remove # symbol. To disable all signs, comment/remove each sign.<br/>Essentials colored sign support will be enabled when any sign types are enabled.<br/>Color is not an actual sign, it's for enabling using color codes on signs, when the correct permissions are given.</p>
               <table class="table">
                  <tbody>
                     <tr>
                        <td>
                           <label>Coloured Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-color">
                        </td>
                        <td>
                           <label>Balance Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-balance"><br/>
                        </td>
                        <td>
                           <label>Buy Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-buy"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Sell Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-sell"><br/>
                        </td>
                        <td>
                           <label>Trade Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-trade"><br/>
                        </td>
                        <td>
                           <label>Free Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-free"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Disposal Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-disposal"><br/>
                        </td>
                        <td>
                           <label>Warp Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-warp"><br/>
                        </td>
                        <td>
                           <label>Kit Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-kit"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Mail Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-mail"><br/>
                        </td>
                        <td>
                           <label>Enchant Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-enchant"><br/>
                        </td>
                        <td>
                           <label>Gamemode Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-gamemode"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Heal Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-heal"><br/>
                        </td>
                        <td>
                           <label>Info Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-info"><br/>
                        </td>
                        <td>
                           <label>Spawn Mob Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-spawnmob"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Repair Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-repair"><br/>
                        </td>
                        <td>
                           <label>Time Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-time"><br/>
                        </td>
                        <td>
                           <label>Weather Signs:</label>
                           <input type="checkbox" value="true" name="enabledSigns-weather"><br/>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Sign Usage Per Second:</label>
               <p>How many times per second can Essentials signs be interacted with per player.<br/>Values should be between 1-20, 20 being virtually no lag protection.<br/>Lower numbers will reduce the possibility of lag, but may annoy players.</p>
               <input type="number" class="form-control"  name="sign-use-per-second" value="4">
            </div>
            <div class="form-group">
               <label>Backup Interval:</label>
               <p>Interval in minutes.<br/>Unless you add a valid backup command or script here, this feature will be useless.<br/>Use 'save-all' to simply force regular world saving without backup.<br/><br/><span class="label label-warning">You'll need to manually set the backup command after generating this config if you do use this feature.</span></p>
               <br/>
               <input type="number" class="form-control"  name="backup-interval" value="30">
            </div>
            <div class="form-group">
               <label>Per Warp Permissions:</label>
               <input type="checkbox" value="true" name="per-warp-permission"><br/>
               <p>Set this true to enable permission per warp.</p>
            </div>
            <div class="form-group">
               <label>Player List:</label>
               <p> 
               <p>Sort output of /list command by groups.<br/>
                  You can hide and merge the groups displayed in /list by defining the desired behaviour here.<br/>
                  Detailed instructions and examples can be found on the wiki: <a href="http://wiki.ess3.net/wiki/List" target="_blank">http://wiki.ess3.net/wiki/List</a>
               </p>
               <input class="btn btn-success" type="button" value="Add List" onClick="addRow('list-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove List(s)" onClick="deleteRow('list-table')"  />
               <input class="btn btn-success" type="button" value="Add Group" id="btnAddColList"  />
               </p>
               <table class="table table-condensed" id="list-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>List Name:</label>
                           <input type="text" class="form-control"  name="list-name[]" size="35">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Debug Mode:</label>
               <input type="checkbox" value="true" name="debug"><br/>
               <p>More output to the console.</p>
            </div>
            <div class="form-group">
               <label>Locale:</label><br/>
               <label>Enabled:</label>
               <input type="checkbox" value="true" name="locale-enabled"><br/>
               <p>Set the locale for all messages.<br/>If you don't set this, the default locale of the server will be used.<br/>For example, to set language to English, set locale to en, to use the file "messages_en.properties".<br/></small>
                  <input class="btn btn-success" type="button" value="Locale Variables" id="essentials-locale"/><br/>
                  <label>Locale Type:</label>
                  <input type="text" class="form-control"  name="locale-type" value="en">
            </div>
            <div class="form-group">
               <label>Remove God On Disconnect:</label>
               <input type="checkbox" value="true" name="remove-god-on-disconnect"><br/>
               <p>Turn off god mode when people leave the server.</p>
            </div>
            <div class="form-group">
               <label>Auto AFK:</label>
               <p>After this timeout in seconds, the user will be set as AFK.<br/>This feature requires the player to have essentials.afk.auto node.<br/>Set to -1 for no timeout.</p>
               <input type="number" class="form-control"  name="auto-afk" value="300" min="-1">
            </div>
            <div class="form-group">
               <label>Auto AFK Kick:</label>
               <p>After this timeout in seconds, the user will be kicked from the server.<br/>essentials.afk.kickexempt node overrides this feature.<br/>Set to -1 for no timeout.</p>
               <input type="number" class="form-control"  name="auto-afk-kick" value="-1" min="-1">
            </div>
            <div class="form-group">
               <label>Freeze AFK Players:</label>
               <input type="checkbox" value="true" name="freeze-afk-players"><br/>
               <p>Set this to true, if you want to freeze the player, if the player is AFK.<br/>Other players or monsters can't push the player out of AFK mode then.<br/>This will also enable temporary god mode for the AFK player.<br/>The player has to use the command /afk to leave the AFK mode.</p>
            </div>
            <div class="form-group">
               <label>Disable Item Pickup While AFK:</label>
               <input type="checkbox" value="true" name="disable-item-pickup-while-afk"><br/>
               <p>When the player is AFK, should he be able to pickup items?<br/>Enable this, when you don't want people idling in mob traps.</p>
            </div>
            <div class="form-group">
               <label>Cancel AFK On Interact:</label>
               <input type="checkbox" value="true" name="cancel-afk-on-interact" checked><br/>
               <p>This setting controls if a player is marked as active on interaction.<br/>Enable this, when you don't want people idling in mob traps.</p>
            </div>
            <div class="form-group">
               <label>Cancel AFK On Move:</label>
               <input type="checkbox" value="true" name="cancel-afk-on-move" checked><br/>
               <p>Should we automatically remove afk status when a player moves?<br/>Player will be removed from AFK on chat/command regardless of this setting.<br/>Disable this to reduce server lag.</p>
            </div>
            <div class="form-group">
               <label>AFK List Name:</label>
               <p>Set the player's list name when they are AFK.<br/>This is none by default which specifies that Essentials should not interfere with the AFK player's list name.<br/>You may use color codes, use {USERNAME} the player's name or {PLAYER} for the player's displayname.</p>
               <input type="text" class="form-control"  name="afk-list-name" value="none">
            </div>
            <div class="form-group">
               <label>Death Messages:</label>
               <input type="checkbox" value="true" name="death-messages" checked><br/>
               <p>You can disable the death messages of Minecraft here.</p>
            </div>
            <div class="form-group">
               <label>Allow Silent Join and Quit:</label>
               <input type="checkbox" value="true" name="allow-silent-join-quit"><br/>
               <p>Should players with permissions be able to join and part silently?<br/>You can control this with essentials.silentjoin and essentials.silentquit permissions if it is enabled.<br/>In addition, people with essentials.silentjoin.vanish will be vanished on join.</p>
            </div>
            <div class="form-group">
               <label>Custom Join Message:</label>
               <p>You can set a custom join message here, set to "none" to disable.<br/>You may use color codes, use <b>{USERNAME}</b> the player's name or <b>{PLAYER}</b> for the player's displayname.</p>
               <input type="text" class="form-control"  name="custom-join-message" value="none">
            </div>
            <div class="form-group">
               <label>Custom Quit Message:</label>
               <p>You can set a custom quit message here, set to "none" to disable.<br/>You may use color codes, use <b>{USERNAME}</b> the player's name or <b>{PLAYER}</b> for the player's displayname.</p>
               <input type="text" class="form-control"  name="custom-quit-message" value="none">
            </div>
            <div class="form-group">
               <label>No Godmode Worlds:</label>
               <p> 
               <p>Add worlds to this list, if you want to automatically disable god mode there.</p>
               <input class="btn btn-success" type="button" value="Add World" onClick="addRow('no-godmode-worlds-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove World(s)" onClick="deleteRow('no-godmode-worlds-table')"  />
               </p>
               <table class="table table-condensed" id="no-godmode-worlds-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>World Name:</label>
                           <input type="text" class="form-control"  name="no-godmode-worlds[]" size="35">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Per World Teleport Permissions:</label>
               <input type="checkbox" value="true" name="world-teleport-permissions"><br/>
               <p>Set to true to enable per-world permissions for teleporting between worlds with essentials commands.<br/>This applies to /world, /back, /tp[a|o][here|all], but not warps.<br/>Give someone permission to teleport to a world with essentials.worlds.&lt;worldname&gt;<br/>This does not affect the /home command, there is a separate toggle below for this.</p>
            </div>
            <div class="form-group">
               <label>Default Stack Size:</label>
               <p>The number of items given if the quantity parameter is left out in /item or /give.<br/>If this number is below 1, the maximum stack size size is given.<br/>If over-sized stacks are not enabled, any number higher than the maximum stack size results in more than one stack.</p>
               <input type="number" class="form-control"  name="default-stack-size" value="-1">
            </div>
            <div class="form-group">
               <label>Default Stack Size:</label>
               <p>Over-sized stacks are stacks that ignore the normal max stack size.<br/>They can be obtained using /give and /item, if the player has essentials.oversizedstacks permission.<br/>How many items should be in an over-sized stack?</p>
               <input type="number" class="form-control"  name="oversized-stacksize" value="64">
            </div>
            <div class="form-group">
               <label>Repair Enchanted:</label>
               <input type="checkbox" value="true" name="repair-enchanted" checked><br/>
               <p>Allow repair of enchanted weapons and armor.<br/>If you set this to false, you can still allow it for certain players using the permission.<br/>essentials.repair.enchanted</p>
            </div>
            <div class="form-group">
               <label>Unsafe Enchantments:</label>
               <input type="checkbox" value="true" name="unsafe-enchantments"><br/>
               <p>Allow 'unsafe' enchantments in kits and item spawning.<br/>Warning: Mixing and overleveling some enchantments can cause issues with clients, servers and plugins.</p>
            </div>
            <div class="form-group">
               <label>Register Back In Listener:</label>
               <input type="checkbox" value="true" name="register-back-in-listener"><br/>
               <p>Do you want Essentials to keep track of previous location for /back in the teleport listener?<br/>If you set this to true any plugin that uses teleport will have the previous location registered.</p>
            </div>
            <div class="form-group">
               <label>Login Attack Delay:</label>
               <p>Delay to wait before people can cause attack damage after logging in.</p>
               <input type="number" class="form-control"  name="login-attack-delay" value="5">
            </div>
            <div class="form-group">
               <label>Max Fly Speed:</label>
               <p>Set the max fly speed, values range from 0.1 to 1.0</p>
               <input type="number" class="form-control"  step="any" name="max-fly-speed" value="0.8" max="1" min="0">
            </div>
            <div class="form-group">
               <label>Max Walk Speed:</label>
               <p>Set the max walk speed, values range from 0.1 to 1.0</p>
               <input type="number" class="form-control"  step="any" name="max-walk-speed" value="0.8" max="1" min="0">
            </div>
            <div class="form-group">
               <label>Mails Per Minute:</label>
               <p>Set the maximum amount of mail that can be sent within a minute.</p>
               <input type="number" class="form-control"  name="mails-per-minute" value="1000">
            </div>
            <div class="form-group">
               <label>Max Tempban Time:</label>
               <p>Set the maximum time /tempban can be used for in seconds.<br/>Set to -1 to disable, and essentials.tempban.unlimited can be used to override.</p>
               <input type="number" class="form-control"  name="max-tempban-time" value="-1" min="-1">
            </div>
            <div class="form-group">
               <label>Last Message Reply Recipient:</label>
               <input type="checkbox" value="true" name="last-message-reply-recipient" checked><br/>
               <p>Changes /reply functionality. If true, /r goes to the person you messaged last, otherwise the first person that messaged you.<br/>If false, /r goes to the last person that messaged you.</p>
            </div>
            <div class="form-group">
               <label>last Message Reply Recipient Timeout:</label>
               <p>If last-message-reply-recipient is true, this specifies the duration, in seconds, that would need to elapse for the reply-recipient to update when receiving a message.</p>
               <input type="number" class="form-control" name="last-message-reply-recipient-timeout" value="180" min="0">
            </div>
            <div class="form-group">
               <label>Milk Bucket Easter Egg:</label>
               <input type="checkbox" value="true" name="milk-bucket-easter-egg" checked><br/>
               <p>Toggles whether or not right clicking mobs with a milk bucket turns them into a baby.</p>
            </div>
            <div class="form-group">
               <label>Send Fly Enable On Join:</label>
               <input type="checkbox" value="true" name="send-fly-enable-on-join" checked><br/>
               <p>Toggles whether or not the fly status message should be sent to players on join.</p>
            </div>
            <div class="form-group">
               <label>World Time Permissions:</label>
               <input type="checkbox" value="true" name="world-time-permissions"><br/>
               <p>Set to true to enable per-world permissions for setting time for individual worlds with essentials commands.<br/>This applies to /time, /day, /eday, /night, /enight, /etime.<br/>Give someone permission to teleport to a world with essentials.time.world.&lt;worldname&gt;.</p>
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Home
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Update Bed At Daytime:</label>
               <input type="checkbox" value="true" name="update-bed-at-daytime" checked><br/>
               <p>Allows people to set their bed at daytime.</p>
            </div>
            <div class="form-group">
               <label>World Home Permissions:</label>
               <input type="checkbox" value="true" name="world-home-permissions"><br/>
               <p>Set to true to enable per-world permissions for using homes to teleport between worlds.<br/>This applies to the /home only.<br/>Give someone permission to teleport to a world with essentials.worlds.&lt;worldname&gt;</p>
            </div>
            <div class="form-group">
               <label>Multiple Homes:</label>
               <p> 
               <p>Allow players to have multiple homes.<br/>
                  Players need essentials.sethome.multiple before they can have more than 1 home.<br/>
                  You can set the default number of multiple homes using the 'default' rank below.<br/>
                  To remove the home limit entirely, give people 'essentials.sethome.multiple.unlimited'.<br/>
                  To grant different home amounts to different people, you need to define a 'home-rank' below.<br/>
                  Create the 'home-rank' below, and give the matching permission: essentials.sethome.multiple.&lt;home-rank&gt;<br/>
                  For more information, visit <a href="http://wiki.ess3.net/wiki/Multihome" target="_blank">http://wiki.ess3.net/wiki/Multihome</a><br/>
                  In this example someone with 'essentials.sethome.multiple' and 'essentials.sethome.multiple.vip' will have 5 homes.<br/>
                  Remember, they MUST have both permission nodes in order to be able to set multiple homes.
               </p>
               <input class="btn btn-success" type="button" value="Add More Inputs" onClick="addRow('homes-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Input(s)" onClick="deleteRow('homes-table')"  /><br/>
               </p>
               <table class="table table-condensed" id="homes-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Rank:</label>
                           <input type="text" class="form-control"  name="homes-ranks[]" size="35">
                        </td>
                        <td>
                           <label>Value:</label>
                           <input type="number" class="form-control"  name="homes-values[]" size="35" min="1">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Rank:</label>
                           <input type="text" class="form-control"  name="homes-ranks[]" size="35" value="default">
                        </td>
                        <td>
                           <label>Value:</label>
                           <input type="number" class="form-control"  name="homes-values[]" size="35" value="3" min="1">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Rank:</label>
                           <input type="text" class="form-control"  name="homes-ranks[]" size="35" value="vip">
                        </td>
                        <td>
                           <label>Value:</label>
                           <input type="number" class="form-control"  name="homes-values[]" size="35" value="5" min="1">
                        </td>
                        </p>
                     </tr>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Rank:</label>
                           <input type="text" class="form-control"  name="homes-ranks[]" size="35" value="staff">
                        </td>
                        <td>
                           <label>Value:</label>
                           <input type="number" class="form-control"  name="homes-values[]" size="35" value="10" min="1">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>TPA Accept Cancellation:</label>
               <p>Set the timeout, in seconds for players to accept a tpa before the request is cancelled.<br/>
                  Set to 0 for no timeout.
               </p>
               <input type="number" class="form-control"  name="tpa-accept-cancellation" value="120" min="0">
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Economy
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Starting Balance:</label>
               <p>Defines the balance with which new players begin.<br/>
                  Defaults to 0.
               </p>
               <input type="number" class="form-control"  name="starting-balance" value="0" min="0" max="10000000000000">
            </div>
            <div class="form-group">
               <label>Command Costs:</label><br/>
               <label>Enabled:</label>
               <input type="checkbox" value="true" name="command-costs-enabled"><br/>
               <p> 
               <p>Defines the cost to use the given commands PER USE.<br/>
                  Some commands like /repair have sub-costs, check the <a href="http://wiki.ess3.net/wiki/Essentials_Economy#Configuration_Options" target="_blank">wiki</a> for more information.
               </p>
               <input class="btn btn-success" type="button" value="Add More Inputs" onClick="addRow('command-costs-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Input(s)" onClick="deleteRow('command-costs-table')"  />
               </p>
               <table class="table table-condensed" id="command-costs-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Command:</label>
                           <input type="text" class="form-control"  name="command-costs-commands[]" size="35">
                        </td>
                        <td>
                           <label>Cost:</label>
                           <input type="number" class="form-control"  name="command-costs-costs[]" size="35" min="0">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Currency Symbol:</label>
               <p>Set this to a currency symbol you want to use.<br/>
                  Remember, if you want to use special characters in this document, such as accented letters, you MUST save the file as UTF-8, not ANSI.
               </p>
               <input type="text" class="form-control"  name="currency-symbol" value="$">
            </div>
            <div class="form-group">
               <label>Max Money:</label>
               <p>Set the maximum amount of money a player can have.<br/>
                  The amount is always limited to 10 trillion because of the limitations of a java double.
               </p>
               <input type="number" class="form-control"  name="max-money" value="10000000000000" min="0" max="10000000000000">
            </div>
            <div class="form-group">
               <label>Minimum Money:</label>
               <p>Set the minimum amount of money a player can have (must be above the negative of max-money).<br/>
                  Setting this to 0, will disable overdrafts/loans completely.  Users need 'essentials.eco.loan' perm to go below 0.
               </p>
               <input type="number" class="form-control"  name="min-money" value="-10000" min="-10000000000000" max="0">
            </div>
            <div class="form-group">
               <label>Economy Log Enabled:</label>
               <input type="checkbox" value="true" name="economy-log-enabled"><br/>
               <p>Enable this to log all interactions with trade/buy/sell signs and sell command.</p>
            </div>
            <div class="form-group">
               <label>Use Bukkit Permissions:</label>
               <input type="checkbox" value="true" name="use-bukkit-permissions"><br/>
               <p>Use this option to force superperms-based permissions handler regardless of detected installed perms plugin.<br/>This is useful if you want superperms-based permissions (with wildcards) for custom permissions plugins.</p>
            </div>
            <div class="form-group">
               <label>Minimum Pay Amount:</label>
               <p>Minimum acceptable amount to be used in /pay.</p>
               <input type="number" class="form-control"  step="any" name="minimum-pay-amount" value="0.001" min="0">
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Help
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Non Essentials Plugins In Help:</label>
               <input type="checkbox" value="true" name="non-ess-in-help" checked><br/>
               <p>Show other plugins commands in help.</p>
            </div>
            <div class="form-group">
               <label>Hide Permissionless Help:</label>
               <input type="checkbox" value="true" name="hide-permissionless-help" checked><br/>
               <p>Hide plugins which do not give a permission.<br/>
                  You can override a true value here for a single plugin by adding a permission to a user/group.<br/>
                  The individual permission is: essentials.help.&lt;plugin&gt;, anyone with essentials.* or '*' will see all help regardless.<br/>
                  You can use negative permissions to remove access to just a single plugins help if the following is enabled.
               </p>
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Chat
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Chat Radius:</label>
               <p>If EssentialsChat is installed, this will define how far a player's voice travels, in blocks.  Set to 0 to make all chat global.<br/>
                  Note that users with the "essentials.chat.spy" permission will hear everything, regardless of this setting.<br/>
                  Users with essentials.chat.shout can override this by prefixing text with an exclamation mark (!)<br/>
                  Users with essentials.chat.question can override this by prefixing text with a question mark (?)<br/>
                  You can add command costs for shout/question by adding chat-shout and chat-question to the command costs section."
               </p>
               <input type="number" class="form-control"  name="chat-radius" value="0" min="0" max="10000000000000">
            </div>
            <div class="form-group">
               <label>Chat Format:</label>
               <p>Chat formatting can be done in two ways, you can either define a standard format for all chat.<br/>
                  Or you can give a group specific chat format, to give some extra variation.<br/>
                  For more information of chat formatting, check out the wiki: <a href="http://wiki.ess3.net/wiki/Chat_Formatting" target="_blank">http://wiki.ess3.net/wiki/Chat_Formatting</a>
               </p>
               <input type="text" class="form-control"  name="chat-format" value="<{DISPLAYNAME}> {MESSAGE}" size="50">
            </div>
            <div class="form-group">
               <label>Chat Group Specific Formats:</label><br/>
               <label>Enabled:</label>
               <input type="checkbox" value="true" name="chat-group-enabled"><br/>
               <p> 
               <p>Chat formatting can be done in two ways, you can either define a standard format for all chat.<br/>
                  Or you can give a group specific chat format, to give some extra variation.<br/>
                  For more information of chat formatting, check out the wiki: <a href="http://wiki.ess3.net/wiki/Chat_Formatting" target="_blank">http://wiki.ess3.net/wiki/Chat_Formatting</a>
               </p>
               <input class="btn btn-success" type="button" value="Add More Formats" onClick="addRow('chat-group-table')" /> 
               <input class="btn btn-primary" type="button" value="Remove Format(s)" onClick="deleteRow('chat-group-table')"  />
               </p>
               <table class="table table-condensed" id="chat-group-table" class="form">
                  <tbody>
                     <tr>
                        <p>
                        <td>
                           <label>Remove:</label>
                           <input type="checkbox" value="true" name="chk[]" />
                        </td>
                        <td>
                           <label>Group:</label>
                           <input type="text" class="form-control"  name="chat-group-groups[]" size="35">
                        </td>
                        <td>
                           <label>Format:</label>
                           <input type="text" class="form-control"  name="chat-group-formats[]" size="35">
                        </td>
                        </p>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Protect
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Prevention:</label><br/>
               <table class="table">
                  <tbody>
                     <tr>
                        <td>
                           <label>Prevent Lava Flow:</label>
                           <input type="checkbox" value="true" name="lava-flow"><br/>
                        </td>
                        <td>
                           <label>Prevent Water Flow:</label>
                           <input type="checkbox" value="true" name="water-flow"><br/>
                        </td>
                        <td>
                           <label>Prevent Water Bucket Flow:</label>
                           <input type="checkbox" value="true" name="water-bucket-flow"><br/>
                        </td>
                        <td>
                           <label>Prevent Fire Spread:</label>
                           <input type="checkbox" value="true" name="fire-spread" checked><br/>
                        </td>
                        <td>
                           <label>Prevent Lava Fire Spread:</label>
                           <input type="checkbox" value="true" name="lava-fire-spread" checked><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Flint Fire:</label>
                           <input type="checkbox" value="true" name="flint-fire"><br/>
                        </td>
                        <td>
                           <label>Prevent Lightning Fire Spread:</label>
                           <input type="checkbox" value="true" name="lightning-fire-spread" checked><br/>
                        </td>
                        <td>
                           <label>Prevent Portal Creation:</label>
                           <input type="checkbox" value="true" name="portal-creation"><br/>
                        </td>
                        <td>
                           <label>Prevent TNT Explosion:</label>
                           <input type="checkbox" value="true" name="tnt-explosion"><br/>
                        </td>
                        <td>
                           <label>Prevent TNT Player Damage:</label>
                           <input type="checkbox" value="true" name="tnt-playerdamage"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent TNT Minecart Explosion:</label>
                           <input type="checkbox" value="true" name="tnt-minecart-explosion"><br/>
                        </td>
                        <td>
                           <label>Prevent TNT Minecart Player Damage:</label>
                           <input type="checkbox" value="true" name="tnt-minecart-playerdamage"><br/>
                        </td>
                        <td>
                           <label>Prevent Fireball Explosion:</label>
                           <input type="checkbox" value="true" name="fireball-explosion"><br/>
                        </td>
                        <td>
                           <label>Prevent Fireball Fire:</label>
                           <input type="checkbox" value="true" name="fireball-fire"><br/>
                        </td>
                        <td>
                           <label>Prevent Fireball Player Damage:</label>
                           <input type="checkbox" value="true" name="fireball-playerdamage"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent WitherSkull Explosion:</label>
                           <input type="checkbox" value="true" name="witherskull-explosion"><br/>
                        </td>
                        <td>
                           <label>Prevent WitherSkull Player Damage:</label>
                           <input type="checkbox" value="true" name="witherskull-playerdamage"><br/>
                        </td>
                        <td>
                           <label>Prevent Wither Spawn Explosion:</label>
                           <input type="checkbox" value="true" name="wither-spawnexplosion"><br/>
                        </td>
                        <td>
                           <label>Prevent Wither Block Replace:</label>
                           <input type="checkbox" value="true" name="wither-blockreplace"><br/>
                        </td>
                        <td>
                           <label>Prevent Creeper Explosion:</label>
                           <input type="checkbox" value="true" name="creeper-explosion"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Creeper Playerdamage:</label>
                           <input type="checkbox" value="true" name="creeper-playerdamage"><br/>
                        </td>
                        <td>
                           <label>Prevent Creeper Block Damage:</label>
                           <input type="checkbox" value="true" name="creeper-blockdamage"><br/>
                        </td>
                        <td>
                           <label>Prevent Enderdragon Block Damage:</label>
                           <input type="checkbox" value="true" name="enderdragon-blockdamage" checked><br/>
                        </td>
                        <td>
                           <label>Prevent Enderman Pickup:</label>
                           <input type="checkbox" value="true" name="enderman-pickup"><br/>
                        </td>
                        <td>
                           <label>Prevent Villager Death:</label>
                           <input type="checkbox" value="true" name="villager-death"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Entity Target:</label>
                           <input type="checkbox" value="true" name="entitytarget"><br/>
                        </td>
                        <td>
                           <label>Prevent Creepers:</label>
                           <input type="checkbox" value="true" name="spawn-creeper"><br/>
                        </td>
                        <td>
                           <label>Prevent Skeletons:</label>
                           <input type="checkbox" value="true" name="spawn-skeleton"><br/>
                        </td>
                        <td>
                           <label>Prevent Spiders:</label>
                           <input type="checkbox" value="true" name="spawn-spider"><br/>
                        </td>
                        <td>
                           <label>Prevent Giants:</label>
                           <input type="checkbox" value="true" name="spawn-giant"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Zombies:</label>
                           <input type="checkbox" value="true" name="spawn-zombie"><br/>
                        </td>
                        <td>
                           <label>Prevent Slimes:</label>
                           <input type="checkbox" value="true" name="spawn-slime"><br/>
                        </td>
                        <td>
                           <label>Prevent Ghasts:</label>
                           <input type="checkbox" value="true" name="spawn-ghast"><br/>
                        </td>
                        <td>
                           <label>Prevent Pig Zombies:</label>
                           <input type="checkbox" value="true" name="spawn-pig_zombie"><br/>
                        </td>
                        <td>
                           <label>Prevent Endermen:</label>
                           <input type="checkbox" value="true" name="spawn-enderman"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Cave Spiders:</label>
                           <input type="checkbox" value="true" name="spawn-cave_spider"><br/>
                        </td>
                        <td>
                           <label>Prevent Silverfish:</label>
                           <input type="checkbox" value="true" name="spawn-silverfish"><br/>
                        </td>
                        <td>
                           <label>Prevent Blazes:</label>
                           <input type="checkbox" value="true" name="spawn-blaze"><br/>
                        </td>
                        <td>
                           <label>Prevent Magma Cubes:</label>
                           <input type="checkbox" value="true" name="spawn-magma_cube"><br/>
                        </td>
                        <td>
                           <label>Prevent Ender Dragons:</label>
                           <input type="checkbox" value="true" name="spawn-ender_dragon"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Pigs:</label>
                           <input type="checkbox" value="true" name="spawn-pig"><br/>
                        </td>
                        <td>
                           <label>Prevent Sheep:</label>
                           <input type="checkbox" value="true" name="spawn-sheep"><br/>
                        </td>
                        <td>
                           <label>Prevent Cows:</label>
                           <input type="checkbox" value="true" name="spawn-cow"><br/>
                        </td>
                        <td>
                           <label>Prevent Chickens:</label>
                           <input type="checkbox" value="true" name="spawn-chicken"><br/>
                        </td>
                        <td>
                           <label>Prevent Squids:</label>
                           <input type="checkbox" value="true" name="spawn-squid"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Wolves:</label>
                           <input type="checkbox" value="true" name="spawn-wolf"><br/>
                        </td>
                        <td>
                           <label>Prevent Mushroom Cows:</label>
                           <input type="checkbox" value="true" name="spawn-mushroom_cow"><br/>
                        </td>
                        <td>
                           <label>Prevent Snowmans:</label>
                           <input type="checkbox" value="true" name="spawn-snowman"><br/>
                        </td>
                        <td>
                           <label>Prevent Ocelots:</label>
                           <input type="checkbox" value="true" name="spawn-ocelot"><br/>
                        </td>
                        <td>
                           <label>Prevent Iron Golems:</label>
                           <input type="checkbox" value="true" name="spawn-iron_golem"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Prevent Villagers:</label>
                           <input type="checkbox" value="true" name="spawn-villager"><br/>
                        </td>
                        <td>
                           <label>Prevent Withers:</label>
                           <input type="checkbox" value="true" name="spawn-wither"><br/>
                        </td>
                        <td>
                           <label>Prevent Bats:</label>
                           <input type="checkbox" value="true" name="spawn-bat"><br/>
                        </td>
                        <td>
                           <label>Prevent Witches:</label>
                           <input type="checkbox" value="true" name="spawn-witch"><br/>
                        </td>
                        <td>
                           <label>Prevent Horses:</label>
                           <input type="checkbox" value="true" name="spawn-horse"><br/>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label>Creeper Max Explosion Height:</label>
               <p>Maximum height the creeper should explode. -1 allows them to explode everywhere.<br/>
                  Set prevent.creeper-explosion to true, if you want to disable creeper explosions.
               </p>
               <input type="number" class="form-control"  name="creeper-max-height" value="-1" min="-1">
            </div>
            <div class="form-group">
               <table class="table">
                  <tbody>
                     <tr>
                        <td>
                           <label>Disable Fall Damage:</label>
                           <input type="checkbox" value="true" name="disable-fall-damage"><br/>
                        </td>
                        <td>
                           <label>Disable PVP Damage:</label>
                           <input type="checkbox" value="true" name="disable-pvp-damage"><br/>
                        </td>
                        <td>
                           <label>Disable Drowning:</label>
                           <input type="checkbox" value="true" name="disable-drowning"><br/>
                        </td>
                        <td>
                           <label>Disable Suffocation:</label>
                           <input type="checkbox" value="true" name="disable-suffocation"><br/>
                        </td>
                        <td>
                           <label>Disable Lava Damage:</label>
                           <input type="checkbox" value="true" name="disable-lava-damage"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Disable Projectile Damage:</label>
                           <input type="checkbox" value="true" name="disable-projectile-damage"><br/>
                        </td>
                        <td>
                           <label>Disable Contact Danage:</label>
                           <input type="checkbox" value="true" name="disable-contact-damage"><br/>
                        </td>
                        <td>
                           <label>Disable Fire Damage:</label>
                           <input type="checkbox" value="true" name="disable-fire-damage"><br/>
                        </td>
                        <td>
                           <label>Disable Lightning Damage:</label>
                           <input type="checkbox" value="true" name="disable-lightning-damage"><br/>
                        </td>
                        <td>
                           <label>Disable Wither Damage:</label>
                           <input type="checkbox" value="true" name="disable-wither-damage"><br/>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>Disable Storms:</label>
                           <input type="checkbox" value="true" name="disable-storms"><br/>
                        </td>
                        <td>
                           <label>Disable Thunder:</label>
                           <input type="checkbox" value="true" name="disable-thunder"><br/>
                        </td>
                        <td>
                           <label>Disable Lightning:</label>
                           <input type="checkbox" value="true" name="disable-lightning"><br/>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Anti Build
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Build Privilege:</label> <input type="checkbox" value="true" name="build-privilege" checked><br/>
               <p>Should people with build: false in permissions be allowed to build?<br/>Set true to disable building for those people.<br/>Setting to false means EssentialsAntiBuild will never prevent you from building.</p>
            </div>
            <div class="form-group">
               <label>Use Privilege:</label> <input type="checkbox" value="true" name="use-privilege" checked><br/>
               <p>Should people with build: false in permissions be allowed to use items?<br/>Set true to disable using for those people.<br/>Setting to false means EssentialsAntiBuild will never prevent you from using items.</p>
            </div>
            <div class="form-group">
               <label>Warn On Build Disallow:</label>
               <input type="checkbox" value="true" name="warn-on-build-disallow" checked><br/>
               <p>Should we tell people they are not allowed to build?</p>
            </div>
            <div class="form-group">
               <label>Alerts:</label>
               <p>For which block types would you like to be alerted?<br/>
                  You can find a list of IDs in plugins/Essentials/items.csv after loading Essentials for the first time.<br/>
                  10 = lava :: 11 = still lava :: 46 = TNT :: 327 = lava bucket)
               </p>
               <label>Alert On Placement:</label>
               <input type="text" class="form-control"  name="alert-on-placement" value="10,11,46,327">
               <label>Alert On Use:</label>
               <input type="text" class="form-control"  name="alert-on-use" value="327">
               <label>Alert On Break:</label>
               <input type="text" class="form-control"  name="alert-on-break" value="">
            </div>
            <div class="form-group">
               <label>Blacklist:</label><br/>
               <label>Block Placement:</label>
               <input type="text" class="form-control"  name="blacklist-on-placement" value="10,11,46,327">
               <label>Block Usage:</label>
               <input type="text" class="form-control"  name="blacklist-on-use" value="327">
               <label>Block Breaking:</label>
               <input type="text" class="form-control"  name="blacklist-on-break" value="">
               <label>Block Piston:</label>
               <input type="text" class="form-control"  name="blacklist-on-piston" value="">
               <label>Block Dispenser:</label>
               <input type="text" class="form-control"  name="blacklist-on-dispenser" value="">
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-heading clickable">
            <h3 class="panel-title">
               Essentials Spawn
            </h3>
            <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label>Welcome Message:</label>
               <p>Should we announce to the server when someone logs in for the first time?<br/>
                  If so, use this format, replacing {DISPLAYNAME} with the player name.<br/>
                  Clear the input below if you don't want a welcome message.
               </p>
               <input type="text" class="form-control"  name="welcome-message" value="&dWelcome {DISPLAYNAME}&d to the server!" size="50">
            </div>
            <div class="form-group">
               <label>New Player Spawnpoint:</label>
               <p>When we spawn for the first time, which spawnpoint do we use?<br/>
                  Set to "none" if you want to use the spawn point of the world.
               </p>
               <input type="text" class="form-control"  name="newplayer-spawnpoint" value="newbies">
            </div>
            <div class="form-group">
               <label>New Player Kit:</label>
               <p>Do we want to give users anything on first join? Set to '' to disable<br/>
                  This kit will be given regardless of cost and permissions, and will not trigger the kit delay.
               </p>
               <input type="text" class="form-control"  name="newplayer-kit" value="tools">
            </div>
            <div class="form-group">
               <label>Respawn Listener Priority:</label>
               <p>Set this to lowest, if you want Multiverse to handle the respawning.<br/>
                  Set this to high, if you want EssentialsSpawn to handle the respawning.<br/>
                  Set this to highest, if you want to force EssentialsSpawn to handle the respawning.
               </p>
               <input type="text" class="form-control"  name="respawn-listener-priority" value="high">
            </div>
            <div class="form-group">
               <label>Respawn At Home:</label>
               <input type="checkbox" value="true" name="respawn-at-home"><br/>
               <p>When users die, should they respawn at their first home or bed, instead of the spawnpoint?</p>
            </div>
            <div class="form-group">
               <label>Spawn On Join:</label>
               <input type="checkbox" value="true" name="spawn-on-join"><br/>
               <p>Teleport all joining players to the spawnpoint.</p>
            </div>
         </div>
      </div>
      <button type="submit" class="btn btn-success" >Generate</button>
   </form>
   <?php include '../../includes/footer.php'; ?>
</div>
</body>
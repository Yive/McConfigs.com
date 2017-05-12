<?php
$_POST['checkforupdates']			= isset($_POST['checkforupdates']) ? $_POST['checkforupdates'] : "false";
$_POST['send-supported-versions']	= isset($_POST['send-supported-versions']) ? $_POST['send-supported-versions'] : "false";
$_POST['max-pps']					= isset($_POST['max-pps']) ? $_POST['max-pps'] : "600";
$_POST['max-pps-kick-msg']			= isset($_POST['max-pps-kick-msg']) ? $_POST['max-pps-kick-msg'] : "You are sending too many packets!";
$_POST['tracking-period']			= isset($_POST['tracking-period']) ? $_POST['tracking-period'] : "6";
$_POST['tracking-warning-pps']		= isset($_POST['tracking-warning-pps']) ? $_POST['tracking-warning-pps'] : "120";
$_POST['tracking-max-warnings']		= isset($_POST['tracking-max-warnings']) ? $_POST['tracking-max-warnings'] : "4";
$_POST['tracking-max-kick-msg']		= isset($_POST['tracking-max-kick-msg']) ? $_POST['tracking-max-kick-msg'] : "You are sending too many packets, :(";
$_POST['prevent-collision']			= isset($_POST['prevent-collision']) ? $_POST['prevent-collision'] : "false";
$_POST['auto-team']					= isset($_POST['auto-team']) ? $_POST['auto-team'] : "false";
$_POST['suppress-metadata-errors']	= isset($_POST['suppress-metadata-errors']) ? $_POST['suppress-metadata-errors'] : "false";
$_POST['shield-blocking']			= isset($_POST['shield-blocking']) ? $_POST['shield-blocking'] : "false";
$_POST['hologram-patch']			= isset($_POST['hologram-patch']) ? $_POST['hologram-patch'] : "false";
$_POST['hologram-y']				= isset($_POST['hologram-y']) ? $_POST['hologram-y'] : "-0.96";
$_POST['simulate-pt']				= isset($_POST['simulate-pt']) ? $_POST['simulate-pt'] : "false";
$_POST['nms-player-ticking']		= isset($_POST['nms-player-ticking']) ? $_POST['nms-player-ticking'] : "false";
$_POST['bossbar-patch']				= isset($_POST['bossbar-patch']) ? $_POST['bossbar-patch'] : "false";
$_POST['bossbar-anti-flicker']		= isset($_POST['bossbar-anti-flicker']) ? $_POST['bossbar-anti-flicker'] : "false";
$_POST['use-new-effect-indicator']	= isset($_POST['use-new-effect-indicator']) ? $_POST['use-new-effect-indicator'] : "false";
$_POST['use-new-deathmessages']		= isset($_POST['use-new-deathmessages']) ? $_POST['use-new-deathmessages'] : "false";
$_POST['item-cache']				= isset($_POST['item-cache']) ? $_POST['item-cache'] : "false";
$_POST['anti-xray-patch']			= isset($_POST['anti-xray-patch']) ? $_POST['anti-xray-patch'] : "false";
$_POST['replace-pistons']			= isset($_POST['replace-pistons']) ? $_POST['replace-pistons'] : "false";
$_POST['replacement-piston-id']		= isset($_POST['replacement-piston-id']) ? $_POST['replacement-piston-id'] : "0";
$_POST['force-json-transform']		= isset($_POST['force-json-transform']) ? $_POST['force-json-transform'] : "false";

$output = "# Thanks for downloading ViaVersion
# Ensure you look through all these options
# If you need help:
# viaversion.com - Discussion tab
# IRC - https://elmer.spi.gt/iris/?nick=&channels=viaversion #viaversion on irc.spi.gt
#
#----------------------------------------------------------#
#                     GLOBAL OPTIONS                        #
#----------------------------------------------------------#
#
# Should ViaVersion check for updates?
checkforupdates: ".$_POST['checkforupdates']."
# Send the supported versions with the Status (Ping) response packet
send-supported-versions: ".$_POST['send-supported-versions']."
#
#----------------------------------------------------------#
#                  GLOBAL PACKET LIMITER                    #
#----------------------------------------------------------#
#
# Anti-Cheat, Packets Per Second (PPS) limiter
# Clients by default send around 20-90 packets per second.

# What is the maximum per second a client can send
# Use -1 to disable.
max-pps: ".$_POST['max-pps']."
max-pps-kick-msg: \"".$_POST['max-pps-kick-msg']."\"

# We can also kick them if over a period they send over a threshold a certain amount of times.

# Period to track (in seconds)
# Use -1 to disable.
tracking-period: ".$_POST['tracking-period']."
# How many packets per second counts as a warning
tracking-warning-pps: ".$_POST['tracking-warning-pps']."
# How many warnings over the interval can we have
# This can never be higher than \"tracking-interval\"
tracking-max-warnings: ".$_POST['tracking-max-warnings']."
tracking-max-kick-msg: \"".$_POST['tracking-max-kick-msg']."\"
#
#----------------------------------------------------------#
#         1.9 & 1.10 CLIENTS ON 1.8 SERVERS OPTIONS        #
#----------------------------------------------------------#
#
# No collide options, these allow you to configure how collision works.
# Do you want us to prevent collision?
prevent-collision: ".$_POST['prevent-collision']."
# If the above is true, should we automatically team players until you do?
auto-team: ".$_POST['auto-team']."
# When enabled if certain metadata can't be read we won't tell you about it
suppress-metadata-errors: ".$_POST['suppress-metadata-errors']."
# When enabled 1.9 & 1.10 will be able to block by using shields
shield-blocking: ".$_POST['shield-blocking']."
# Should we enable our hologram patch?
# If they're in the wrong place enable this
hologram-patch: ".$_POST['hologram-patch']."
# This is the offset, should work as default when enabled.
hologram-y: ".$_POST['hologram-y']."
# Enable player tick simulation, this fixes eating, drinking, nether portals.
simulate-pt: ".$_POST['simulate-pt']."
# Should we use nms player to simulate packets, (may fix anti-cheat issues)
nms-player-ticking: ".$_POST['nms-player-ticking']."
# Should we patch boss bars so they work? (Default: true, disable if you're having issues)
bossbar-patch: ".$_POST['bossbar-patch']."
# If your boss bar flickers on 1.9 & 1.10, set this to 'true'. It will keep all boss bars on 100% (not recommended)
bossbar-anti-flicker: ".$_POST['bossbar-anti-flicker']."
# This will show the new effect indicator in the top-right corner for 1.9 & 1.10 players.
use-new-effect-indicator: ".$_POST['use-new-effect-indicator']."
# Show the new death messages for 1.9 & 1.10 on the death screen
use-new-deathmessages: ".$_POST['use-new-deathmessages']."
# Should we cache our items, this will prevent server from being lagged out, however the cost is a constant task caching items
item-cache: ".$_POST['item-cache']."
# Patch the Anti xray to work on 1.9 & 1.10 (If your server is 1.8) This can cost more performance, so disable it if you don't use it.
anti-xray-patch: ".$_POST['anti-xray-patch']."
# Should we replace extended pistons to fix 1.10.1 (Only on chunk load)
replace-pistons: ".$_POST['replace-pistons']."
# What id should we replace with, default is air. (careful of players getting stuck standing on them)
replacement-piston-id: ".$_POST['replacement-piston-id']."
# Force the string -> json transform
force-json-transform: ".$_POST['force-json-transform']."";

?>
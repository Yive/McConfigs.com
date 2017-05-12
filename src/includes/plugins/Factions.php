<?php

$_POST['aliasesF'] = (object) [];
$_POST['worldsClaimingEnabled'] = (object) [];
$_POST['worldsClaimingEnabled']['standard'] = isset($_POST['worldsClaimingEnabled']['standard']) ? $_POST['worldsClaimingEnabled']['standard'] : "true";
$_POST['worldsClaimingEnabled']['exceptions'] = (object) [];
$_POST['worldsPowerLossEnabled'] = (object) [];
$_POST['worldsPowerLossEnabled']['standard'] = isset($_POST['worldsPowerLossEnabled']['standard']) ? $_POST['worldsPowerLossEnabled']['standard'] : "true";
$_POST['worldsPowerLossEnabled']['exceptions'] = (object) [];
$_POST['worldsPvpRulesEnabled'] = (object) [];
$_POST['worldsPvpRulesEnabled']['standard'] = isset($_POST['worldsPvpRulesEnabled']['standard']) ? $_POST['worldsPvpRulesEnabled']['standard'] : "true";
$_POST['worldsPvpRulesEnabled']['exceptions'] = (object) [];
$_POST['playersWhoBypassAllProtection'] = (object) [];
$_POST['taskPlayerPowerUpdateMinutes'] = isset($_POST['taskPlayerPowerUpdateMinutes']) ? $_POST['taskPlayerPowerUpdateMinutes'] : "1.0";
$_POST['taskPlayerDataRemoveMinutes'] = isset($_POST['taskPlayerDataRemoveMinutes']) ? $_POST['taskPlayerDataRemoveMinutes'] : "5.0";
$_POST['taskEconLandRewardMinutes'] = isset($_POST['taskEconLandRewardMinutes']) ? $_POST['taskEconLandRewardMinutes'] : "20.0";
$_POST['removePlayerWhenBanned'] = isset($_POST['removePlayerWhenBanned']) ? $_POST['removePlayerWhenBanned'] : "true";
$_POST['removePlayerMillisDefault'] = isset($_POST['removePlayerMillisDefault']) ? $_POST['removePlayerMillisDefault'] : "864000000";
$_POST['defaultPlayerFactionId'] = isset($_POST['defaultPlayerFactionId']) ? $_POST['defaultPlayerFactionId'] : "none";
$_POST['defaultPlayerRole'] = isset($_POST['defaultPlayerRole']) ? $_POST['defaultPlayerRole'] : "RECRUIT";
$_POST['defaultPlayerPower'] = isset($_POST['defaultPlayerPower']) ? $_POST['defaultPlayerPower'] : "0.0";
$_POST['motdPriority'] = isset($_POST['motdPriority']) ? $_POST['motdPriority'] : "NORMAL";
$_POST['motdDelayTicks'] = isset($_POST['motdDelayTicks']) ? $_POST['motdDelayTicks'] : "-1";
$_POST['powerMax'] = isset($_POST['powerMax']) ? $_POST['powerMax'] : "10.0";
$_POST['powerMin'] = isset($_POST['powerMin']) ? $_POST['powerMin'] : "0.0";
$_POST['powerPerHour'] = isset($_POST['powerPerHour']) ? $_POST['powerPerHour'] : "2.0";
$_POST['powerPerDeath'] = isset($_POST['powerPerDeath']) ? $_POST['powerPerDeath'] : "-2.0";
$_POST['canLeaveWithNegativePower'] = isset($_POST['canLeaveWithNegativePower']) ? $_POST['canLeaveWithNegativePower'] : "true";
$_POST['factionMemberLimit'] = isset($_POST['factionMemberLimit']) ? $_POST['factionMemberLimit'] : "0";
$_POST['factionPowerMax'] = isset($_POST['factionPowerMax']) ? $_POST['factionPowerMax'] : "0.0";
$_POST['factionNameLengthMin'] = isset($_POST['factionNameLengthMin']) ? $_POST['factionNameLengthMin'] : "3";
$_POST['factionNameLengthMax'] = isset($_POST['factionNameLengthMax']) ? $_POST['factionNameLengthMax'] : "16";
$_POST['factionNameForceUpperCase'] = isset($_POST['factionNameForceUpperCase']) ? $_POST['factionNameForceUpperCase'] : "false";
$_POST['setRadiusMax'] = isset($_POST['setRadiusMax']) ? $_POST['setRadiusMax'] : "30";
$_POST['setFillMax'] = isset($_POST['setFillMax']) ? $_POST['setFillMax'] : "1000";
$_POST['claimsMustBeConnected'] = isset($_POST['claimsMustBeConnected']) ? $_POST['claimsMustBeConnected'] : "true";
$_POST['claimsCanBeUnconnectedIfOwnedByOtherFaction'] = isset($_POST['claimsCanBeUnconnectedIfOwnedByOtherFaction']) ? $_POST['claimsCanBeUnconnectedIfOwnedByOtherFaction'] : "false";
$_POST['claimingFromOthersAllowed'] = isset($_POST['claimingFromOthersAllowed']) ? $_POST['claimingFromOthersAllowed'] : "true";
$_POST['claimMinimumChunksDistanceToOthers'] = isset($_POST['claimMinimumChunksDistanceToOthers']) ? $_POST['claimMinimumChunksDistanceToOthers'] : "0";
$_POST['claimsRequireMinFactionMembers'] = isset($_POST['claimsRequireMinFactionMembers']) ? $_POST['claimsRequireMinFactionMembers'] : "1";
$_POST['claimedLandsMax'] = isset($_POST['claimedLandsMax']) ? $_POST['claimedLandsMax'] : "0";

/*
  "removePlayerMillisPlayerAgeToBonus": {
    "1209600000": 864000000
  },
  "removePlayerMillisFactionAgeToBonus": {
    "2419200000": 864000000,
    "1209600000": 432000000
  },
  "homesEnabled": true,
  "homesMustBeInClaimedTerritory": true,
  "homesTeleportCommandEnabled": true,
  "homesTeleportAllowedFromEnemyTerritory": true,
  "homesTeleportAllowedFromDifferentWorld": true,
  "homesTeleportAllowedEnemyDistance": 32.0,
  "homesTeleportIgnoreEnemiesIfInOwnTerritory": true,
  "homesTeleportToOnDeathActive": false,
  "homesTeleportToOnDeathPriority": "NORMAL",
  "territoryInfoTitlesDefault": true,
  "territoryInfoTitlesMain": "{relcolor}{name}",
  "territoryInfoTitlesSub": "<i>{desc}",
  "territoryInfoTitlesTicksIn": 5,
  "territoryInfoTitlesTicksStay": 60,
  "territoryInfoTitleTicksOut": 5,
  "territoryInfoChat": "<i> ~ {relcolor}{name} <i>{desc}",
  "permanentFactionsDisableLeaderPromotion": false,
  "actionDeniedPainAmount": 2.0,
  "disablePVPForFactionlessPlayers": false,
  "enablePVPAgainstFactionlessInAttackersLand": false,
  "territoryShieldFactor": 0.1,
  "handlePistonProtectionThroughDenyBuild": true,
  "denyCommandsPermanentFactionMember": [],
  "denyCommandsTerritoryRelation": {
    "ENEMY": [
      "home",
      "homes",
      "sethome",
      "createhome",
      "tpahere",
      "tpaccept",
      "tpyes",
      "tpa",
      "call",
      "tpask",
      "warp",
      "warps",
      "spawn",
      "ehome",
      "ehomes",
      "esethome",
      "ecreatehome",
      "etpahere",
      "etpaccept",
      "etpyes",
      "etpa",
      "ecall",
      "etpask",
      "ewarp",
      "ewarps",
      "espawn",
      "essentials:home",
      "essentials:homes",
      "essentials:sethome",
      "essentials:createhome",
      "essentials:tpahere",
      "essentials:tpaccept",
      "essentials:tpyes",
      "essentials:tpa",
      "essentials:call",
      "essentials:tpask",
      "essentials:warp",
      "essentials:warps",
      "essentials:spawn",
      "wtp",
      "uspawn",
      "utp",
      "mspawn",
      "mtp",
      "fspawn",
      "ftp",
      "jspawn",
      "jtp"
    ],
    "NEUTRAL": [],
    "TRUCE": [],
    "ALLY": [],
    "MEMBER": []
  },
  "chatSetFormat": true,
  "chatSetFormatAt": "LOWEST",
  "chatSetFormatTo": "<{factions_relcolor}§l{factions_roleprefix}§r{factions_relcolor}{factions_name|rp}§f%1$s> %2$s",
  "chatParseTags": true,
  "chatParseTagsAt": "LOW",
  "colorMember": "GREEN",
  "colorAlly": "DARK_PURPLE",
  "colorTruce": "LIGHT_PURPLE",
  "colorNeutral": "WHITE",
  "colorEnemy": "RED",
  "colorNoPVP": "GOLD",
  "colorFriendlyFire": "DARK_RED",
  "prefixLeader": "**",
  "prefixOfficer": "*",
  "prefixMember": "+",
  "prefixRecruit": "-",
  "handleExploitObsidianGenerators": true,
  "handleExploitEnderPearlClipping": true,
  "handleExploitTNTWaterlog": false,
  "handleNetherPortalTrap": true,
  "seeChunkSteps": 1,
  "seeChunkKeepEvery": 5,
  "seeChunkSkipEvery": 0,
  "seeChunkPeriodMillis": 500,
  "seeChunkParticleAmount": 30,
  "seeChunkParticleOffsetY": 2.0,
  "seeChunkParticleDeltaY": 2.0,
  "unstuckSeconds": 30,
  "unstuckChunkRadius": 10,
  "logFactionCreate": true,
  "logFactionDisband": true,
  "logFactionJoin": true,
  "logFactionKick": true,
  "logFactionLeave": true,
  "logLandClaims": true,
  "logLandUnclaims": true,
  "logMoneyTransactions": true,
  "logPlayerCommands": true,
  "materialsEditOnInteract": [
    "DIODE_BLOCK_OFF",
    "DIODE_BLOCK_ON",
    "NOTE_BLOCK",
    "CAULDRON",
    "SOIL"
  ],
  "materialsEditTools": [
    "FIREBALL",
    "FLINT_AND_STEEL",
    "BUCKET",
    "WATER_BUCKET",
    "LAVA_BUCKET",
    "ARMOR_STAND"
  ],
  "materialsEditToolsDupeBug": [
    "CHEST",
    "SIGN_POST",
    "TRAPPED_CHEST",
    "SIGN",
    "WOOD_DOOR",
    "IRON_DOOR"
  ],
  "materialsDoor": [
    "WOODEN_DOOR",
    "ACACIA_DOOR",
    "BIRCH_DOOR",
    "DARK_OAK_DOOR",
    "JUNGLE_DOOR",
    "SPRUCE_DOOR",
    "TRAP_DOOR",
    "FENCE_GATE",
    "ACACIA_FENCE_GATE",
    "BIRCH_FENCE_GATE",
    "DARK_OAK_FENCE_GATE",
    "JUNGLE_FENCE_GATE",
    "SPRUCE_FENCE_GATE"
  ],
  "materialsContainer": [
    "DISPENSER",
    "CHEST",
    "FURNACE",
    "BURNING_FURNACE",
    "JUKEBOX",
    "BREWING_STAND",
    "ENCHANTMENT_TABLE",
    "ANVIL",
    "BEACON",
    "TRAPPED_CHEST",
    "HOPPER",
    "DROPPER"
  ],
  "entityTypesEditOnInteract": [
    "ITEM_FRAME",
    "ARMOR_STAND"
  ],
  "entityTypesEditOnDamage": [
    "ITEM_FRAME",
    "ARMOR_STAND"
  ],
  "entityTypesContainer": [
    "MINECART_CHEST",
    "MINECART_HOPPER"
  ],
  "entityTypesMonsters": [
    "BLAZE",
    "CAVE_SPIDER",
    "CREEPER",
    "ENDERMAN",
    "ENDERMITE",
    "ENDER_DRAGON",
    "GUARDIAN",
    "GHAST",
    "GIANT",
    "MAGMA_CUBE",
    "PIG_ZOMBIE",
    "SILVERFISH",
    "SKELETON",
    "SLIME",
    "SPIDER",
    "WITCH",
    "WITHER",
    "ZOMBIE"
  ],
  "entityTypesAnimals": [
    "CHICKEN",
    "COW",
    "HORSE",
    "MUSHROOM_COW",
    "OCELOT",
    "PIG",
    "RABBIT",
    "SHEEP",
    "SQUID"
  ],
  "herochatFactionName": "Faction",
  "herochatFactionNick": "F",
  "herochatFactionFormat": "{color}[&l{nick}&r{color} &l{factions_roleprefix}&r{color}{factions_title|rp}{sender}{color}] &f{msg}",
  "herochatFactionColor": "GREEN",
  "herochatFactionDistance": 0,
  "herochatFactionIsShortcutAllowed": false,
  "herochatFactionCrossWorld": true,
  "herochatFactionMuted": false,
  "herochatFactionWorlds": [],
  "herochatAlliesName": "Allies",
  "herochatAlliesNick": "A",
  "herochatAlliesFormat": "{color}[&l{nick}&r&f {factions_relcolor}&l{factions_roleprefix}&r{factions_relcolor}{factions_name|rp}{sender}{color}] &f{msg}",
  "herochatAlliesColor": "DARK_PURPLE",
  "herochatAlliesDistance": 0,
  "herochatAlliesIsShortcutAllowed": false,
  "herochatAlliesCrossWorld": true,
  "herochatAlliesMuted": false,
  "herochatAlliesWorlds": [],
  "lwcMustHaveBuildRightsToCreate": true,
  "lwcRemoveIfNoBuildRights": false,
  "lwcRemoveOnChange": {
    "BUY": false,
    "SELL": false,
    "CONQUER": false,
    "PILLAGE": false
  },
  "worldguardCheckEnabled": false,
  "worldguardCheckWorldsEnabled": {
    "standard": true,
    "exceptions": []
  },
  "econEnabled": true,
  "econLandReward": 0.0,
  "econUniverseAccount": "",
  "econChunkCost": {
    "BUY": 1.0,
    "SELL": 0.0,
    "CONQUER": 0.0,
    "PILLAGE": 0.0
  },
  "econCostCreate": 100.0,
  "econCostSethome": 0.0,
  "econCostJoin": 0.0,
  "econCostLeave": 0.0,
  "econCostKick": 0.0,
  "econCostInvite": 0.0,
  "econCostDeinvite": 0.0,
  "econCostHome": 0.0,
  "econCostName": 0.0,
  "econCostDescription": 0.0,
  "econCostTitle": 0.0,
  "econCostFlag": 0.0,
  "econRelCost": {
    "ENEMY": 0.0,
    "ALLY": 0.0,
    "TRUCE": 0.0,
    "NEUTRAL": 0.0
  },
  "bankEnabled": true,
  "bankFactionPaysCosts": true,
  "bankFactionPaysLandCosts": true
}
*/
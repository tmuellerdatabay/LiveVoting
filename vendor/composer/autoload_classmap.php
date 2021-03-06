<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController' => $vendorDir . '/endroid/qrcode/src/Bundle/Controller/QrCodeController.php',
    'Endroid\\QrCode\\Bundle\\DependencyInjection\\Configuration' => $vendorDir . '/endroid/qrcode/src/Bundle/DependencyInjection/Configuration.php',
    'Endroid\\QrCode\\Bundle\\DependencyInjection\\EndroidQrCodeExtension' => $vendorDir . '/endroid/qrcode/src/Bundle/DependencyInjection/EndroidQrCodeExtension.php',
    'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle' => $vendorDir . '/endroid/qrcode/src/Bundle/EndroidQrCodeBundle.php',
    'Endroid\\QrCode\\Bundle\\Twig\\Extension\\QrCodeExtension' => $vendorDir . '/endroid/qrcode/src/Bundle/Twig/Extension/QrCodeExtension.php',
    'Endroid\\QrCode\\Exceptions\\DataDoesntExistsException' => $vendorDir . '/endroid/qrcode/src/Exceptions/DataDoesntExistsException.php',
    'Endroid\\QrCode\\Exceptions\\FreeTypeLibraryMissingException' => $vendorDir . '/endroid/qrcode/src/Exceptions/FreeTypeLibraryMissingException.php',
    'Endroid\\QrCode\\Exceptions\\ImageFunctionFailedException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageFunctionFailedException.php',
    'Endroid\\QrCode\\Exceptions\\ImageFunctionUnknownException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageFunctionUnknownException.php',
    'Endroid\\QrCode\\Exceptions\\ImageSizeTooLargeException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageSizeTooLargeException.php',
    'Endroid\\QrCode\\Exceptions\\ImageTypeInvalidException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageTypeInvalidException.php',
    'Endroid\\QrCode\\Exceptions\\VersionTooLargeException' => $vendorDir . '/endroid/qrcode/src/Exceptions/VersionTooLargeException.php',
    'Endroid\\QrCode\\Factory\\QrCodeFactory' => $vendorDir . '/endroid/qrcode/src/Factory/QrCodeFactory.php',
    'Endroid\\QrCode\\QrCode' => $vendorDir . '/endroid/qrcode/src/QrCode.php',
    'LiveVoting\\Api\\xlvoApi' => $baseDir . '/classes/Api/class.xlvoApi.php',
    'LiveVoting\\Cache\\CachingActiveRecord' => $baseDir . '/classes/Cache/class.CachingActiveRecord.php',
    'LiveVoting\\Cache\\Initialisable' => $baseDir . '/classes/Cache/Initialisable.php',
    'LiveVoting\\Cache\\Version\\v51\\xlvoCache' => $baseDir . '/classes/Cache/Version/v51/class.xlvoCache.php',
    'LiveVoting\\Cache\\Version\\v52\\xlvoCache' => $baseDir . '/classes/Cache/Version/v52/class.xlvoCache.php',
    'LiveVoting\\Cache\\arConnectorCache' => $baseDir . '/classes/Cache/class.arConnectorCache.php',
    'LiveVoting\\Cache\\xlvoCacheFactory' => $baseDir . '/classes/Cache/class.xlvoCacheFactory.php',
    'LiveVoting\\Cache\\xlvoCacheService' => $baseDir . '/classes/Cache/xlvoCacheService.php',
    'LiveVoting\\Conf\\xlvoConf' => $baseDir . '/classes/Conf/class.xlvoConf.php',
    'LiveVoting\\Context\\ILIASVersionEnum' => $baseDir . '/classes/Context/class.ILIASVersionEnum.php',
    'LiveVoting\\Context\\InitialisationManager' => $baseDir . '/classes/Context/class.InitialisationManager.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v51\\xlvoBasicInitialisation' => $baseDir . '/classes/Context/Initialisation/Version/v51/class.xlvoBasicInitialisation.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v52\\xlvoBasicInitialisation' => $baseDir . '/classes/Context/Initialisation/Version/v52/class.xlvoBasicInitialisation.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v52\\xlvoSkin' => $baseDir . '/classes/Context/Initialisation/Version/v52/class.xlvoStyleDefinition.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v52\\xlvoStyleDefinition' => $baseDir . '/classes/Context/Initialisation/Version/v52/class.xlvoStyleDefinition.php',
    'LiveVoting\\Context\\cookie\\CookieManager' => $baseDir . '/classes/Context/cookie/CookieManager.php',
    'LiveVoting\\Context\\xlvoContext' => $baseDir . '/classes/Context/class.xlvoContext.php',
    'LiveVoting\\Context\\xlvoContextLiveVoting' => $baseDir . '/classes/Context/class.xlvoContextLiveVoting.php',
    'LiveVoting\\Context\\xlvoDummyUser' => $baseDir . '/classes/Context/class.xlvoDummyUser.php',
    'LiveVoting\\Context\\xlvoILIAS' => $baseDir . '/classes/Context/class.xlvoILIAS.php',
    'LiveVoting\\Context\\xlvoInitialisation' => $baseDir . '/classes/Context/class.xlvoInitialisation.php',
    'LiveVoting\\Context\\xlvoObjectDefinition' => $baseDir . '/classes/Context/class.xlvoObjectDefinition.php',
    'LiveVoting\\Context\\xlvoRbacReview' => $baseDir . '/classes/Context/class.xlvoRbacReview.php',
    'LiveVoting\\Display\\Bar\\xlvoBarGUI' => $baseDir . '/classes/Display/Bar/class.xlvoBarGUI.php',
    'LiveVoting\\Exceptions\\xlvoVotingManagerException' => $baseDir . '/classes/Exceptions/class.xlvoVotingManagerException.php',
    'LiveVoting\\Js\\xlvoJs' => $baseDir . '/classes/Js/class.xlvoJs.php',
    'LiveVoting\\Js\\xlvoJsResponse' => $baseDir . '/classes/Js/class.xlvoJsResponse.php',
    'LiveVoting\\Js\\xlvoJsSettings' => $baseDir . '/classes/Js/class.xlvoJsSettings.php',
    'LiveVoting\\Option\\xlvoOption' => $baseDir . '/classes/Option/class.xlvoOption.php',
    'LiveVoting\\Pin\\xlvoPin' => $baseDir . '/classes/Pin/class.xlvoPin.php',
    'LiveVoting\\Player\\QR\\xlvoQR' => $baseDir . '/classes/Player/QR/class.xlvoQR.php',
    'LiveVoting\\Player\\xlvoPlayer' => $baseDir . '/classes/Player/class.xlvoPlayer.php',
    'LiveVoting\\Player\\xlvoPlayerException' => $baseDir . '/classes/Player/ex.xlvoPlayerException.php',
    'LiveVoting\\QuestionTypes\\xlvoQuestionTypes' => $baseDir . '/classes/QuestionTypes/class.xlvoQuestionTypes.php',
    'LiveVoting\\Results\\xlvoResults' => $baseDir . '/classes/Results/class.xlvoResults.php',
    'LiveVoting\\Round\\xlvoRound' => $baseDir . '/classes/Round/class.xlvoRound.php',
    'LiveVoting\\User\\xlvoParticipant' => $baseDir . '/classes/User/class.xlvoParticipant.php',
    'LiveVoting\\User\\xlvoParticipants' => $baseDir . '/classes/User/class.xlvoParticipants.php',
    'LiveVoting\\User\\xlvoUser' => $baseDir . '/classes/User/class.xlvoUser.php',
    'LiveVoting\\User\\xlvoVoteHistoryObject' => $baseDir . '/classes/Vote/class.xlvoVoteHistoryObject.php',
    'LiveVoting\\User\\xlvoVoteHistoryTableGUI' => $baseDir . '/classes/Vote/class.xlvoVoteHistoryTableGUI.php',
    'LiveVoting\\Vote\\xlvoVote' => $baseDir . '/classes/Vote/class.xlvoVote.php',
    'LiveVoting\\Voter\\xlvoVoter' => $baseDir . '/classes/Voter/class.xlvoVoter.php',
    'LiveVoting\\Voter\\xlvoVoterException' => $baseDir . '/classes/Voter/ex.xlvoVoterException.php',
    'LiveVoting\\Voting\\xlvoVoting' => $baseDir . '/classes/Voting/class.xlvoVoting.php',
    'LiveVoting\\Voting\\xlvoVotingInterface' => $baseDir . '/classes/Voting/class.xlvoVotingInterface.php',
    'LiveVoting\\Voting\\xlvoVotingManager2' => $baseDir . '/classes/Voting/class.xlvoVotingManager2.php',
    'LiveVoting\\xlvoLinkButton' => $baseDir . '/classes/class.xlvoLinkButton.php',
    'LiveVoting\\xlvoSessionHandler' => $baseDir . '/classes/class.xlvoSessionHandler.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => $vendorDir . '/symfony/options-resolver/Exception/AccessException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/options-resolver/Exception/ExceptionInterface.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => $vendorDir . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => $vendorDir . '/symfony/options-resolver/Exception/MissingOptionsException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => $vendorDir . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => $vendorDir . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => $vendorDir . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
    'Symfony\\Component\\OptionsResolver\\Options' => $vendorDir . '/symfony/options-resolver/Options.php',
    'Symfony\\Component\\OptionsResolver\\OptionsResolver' => $vendorDir . '/symfony/options-resolver/OptionsResolver.php',
    'ilLiveVotingConfigGUI' => $baseDir . '/classes/class.ilLiveVotingConfigGUI.php',
    'ilLiveVotingPlugin' => $baseDir . '/classes/class.ilLiveVotingPlugin.php',
    'ilObjLiveVoting' => $baseDir . '/classes/class.ilObjLiveVoting.php',
    'ilObjLiveVotingAccess' => $baseDir . '/classes/class.ilObjLiveVotingAccess.php',
    'ilObjLiveVotingGUI' => $baseDir . '/classes/class.ilObjLiveVotingGUI.php',
    'ilObjLiveVotingListGUI' => $baseDir . '/classes/class.ilObjLiveVotingListGUI.php',
    'xlvoBarCollectionGUI' => $baseDir . '/classes/Display/Bar/class.xlvoBarCollectionGUI.php',
    'xlvoBarFreeInputsGUI' => $baseDir . '/classes/Display/Bar/class.xlvoBarFreeInputsGUI.php',
    'xlvoBarGroupingCollectionGUI' => $baseDir . '/classes/Display/Bar/xlvoBarGroupingCollectionGUI.php',
    'xlvoBarMovableGUI' => $baseDir . '/classes/Display/Bar/class.xlvoBarMovableGUI.php',
    'xlvoBarOptionGUI' => $baseDir . '/classes/Display/Bar/class.xlvoBarOptionGUI.php',
    'xlvoBarPercentageGUI' => $baseDir . '/classes/Display/Bar/class.xlvoBarPercentageGUI.php',
    'xlvoConfFormGUI' => $baseDir . '/classes/Conf/class.xlvoConfFormGUI.php',
    'xlvoConfGUI' => $baseDir . '/classes/Conf/class.xlvoConfGUI.php',
    'xlvoCorrectOrderGUI' => $baseDir . '/classes/QuestionTypes/CorrectOrder/class.xlvoCorrectOrderGUI.php',
    'xlvoCorrectOrderResultGUI' => $baseDir . '/classes/QuestionTypes/CorrectOrder/class.xlvoCorrectOrderResultGUI.php',
    'xlvoCorrectOrderResultsGUI' => $baseDir . '/classes/QuestionTypes/CorrectOrder/class.xlvoCorrectOrderResultsGUI.php',
    'xlvoCorrectOrderSubFormGUI' => $baseDir . '/classes/QuestionTypes/CorrectOrder/class.xlvoCorrectOrderSubFormGUI.php',
    'xlvoDisplayPlayerGUI' => $baseDir . '/classes/Player/class.xlvoDisplayPlayerGUI.php',
    'xlvoFreeInputGUI' => $baseDir . '/classes/QuestionTypes/FreeInput/class.xlvoFreeInputGUI.php',
    'xlvoFreeInputResultGUI' => $baseDir . '/classes/QuestionTypes/FreeInput/class.xlvoFreeInputResultGUI.php',
    'xlvoFreeInputResultsGUI' => $baseDir . '/classes/QuestionTypes/FreeInput/class.xlvoFreeInputResultsGUI.php',
    'xlvoFreeInputSubFormGUI' => $baseDir . '/classes/QuestionTypes/FreeInput/class.xlvoFreeInputSubFormGUI.php',
    'xlvoFreeOrderGUI' => $baseDir . '/classes/QuestionTypes/FreeOrder/class.xlvoFreeOrderGUI.php',
    'xlvoFreeOrderResultGUI' => $baseDir . '/classes/QuestionTypes/FreeOrder/class.xlvoFreeOrderResultGUI.php',
    'xlvoFreeOrderResultsGUI' => $baseDir . '/classes/QuestionTypes/FreeOrder/class.xlvoFreeOrderResultsGUI.php',
    'xlvoFreeOrderSubFormGUI' => $baseDir . '/classes/QuestionTypes/FreeOrder/class.xlvoFreeOrderSubFormGUI.php',
    'xlvoGUI' => $baseDir . '/classes/class.xlvoGUI.php',
    'xlvoGlyphGUI' => $baseDir . '/classes/Player/class.xlvoGlyphGUI.php',
    'xlvoInputResultsGUI' => $baseDir . '/classes/QuestionTypes/class.xlvoInputResultsGUI.php',
    'xlvoMainGUI' => $baseDir . '/classes/class.xlvoMainGUI.php',
    'xlvoMultiLineInputGUI' => $baseDir . '/classes/QuestionTypes/FreeInput/class.xlvoMultiLineInputGUI.php',
    'xlvoNumberRangeGUI' => $baseDir . '/classes/QuestionTypes/NumberRange/class.xlvoNumberRangeGUI.php',
    'xlvoNumberRangeResultGUI' => $baseDir . '/classes/QuestionTypes/NumberRange/class.xlvoNumberRangeResultGUI.php',
    'xlvoNumberRangeResultsGUI' => $baseDir . '/classes/QuestionTypes/NumberRange/class.xlvoNumberRangeResultsGUI.php',
    'xlvoNumberRangeSubFormGUI' => $baseDir . '/classes/QuestionTypes/NumberRange/class.xlvoNumberRangeSubFormGUI.php',
    'xlvoPlayerGUI' => $baseDir . '/classes/Player/class.xlvoPlayerGUI.php',
    'xlvoQRModalGUI' => $baseDir . '/classes/Player/Modal/class.xlvoQRModalGUI.php',
    'xlvoQuestionTypesGUI' => $baseDir . '/classes/QuestionTypes/class.xlvoQuestionTypesGUI.php',
    'xlvoResultGUI' => $baseDir . '/classes/QuestionTypes/class.xlvoResultGUI.php',
    'xlvoResultsGUI' => $baseDir . '/classes/Results/class.xlvoResultsGUI.php',
    'xlvoResultsTableGUI' => $baseDir . '/classes/Results/class.xlvoResultsTableGUI.php',
    'xlvoSingleVoteGUI' => $baseDir . '/classes/QuestionTypes/SingleVote/class.xlvoSingleVoteGUI.php',
    'xlvoSingleVoteResultGUI' => $baseDir . '/classes/QuestionTypes/SingleVote/class.xlvoSingleVoteResultGUI.php',
    'xlvoSingleVoteResultsGUI' => $baseDir . '/classes/QuestionTypes/SingleVote/class.xlvoSingleVoteResultsGUI.php',
    'xlvoSingleVoteSubFormGUI' => $baseDir . '/classes/QuestionTypes/SingleVote/class.xlvoSingleVoteSubFormGUI.php',
    'xlvoSubFormGUI' => $baseDir . '/classes/QuestionTypes/class.xlvoSubFormGUI.php',
    'xlvoTextAreaInputGUI' => $baseDir . '/classes/class.xlvoTextAreaInputGUI.php',
    'xlvoToolbarGUI' => $baseDir . '/classes/Player/class.xlvoToolbarGUI.php',
    'xlvoVoter2GUI' => $baseDir . '/classes/Voter/class.xlvoVoter2GUI.php',
    'xlvoVotingConfig' => $baseDir . '/classes/class.xlvoVotingConfig.php',
    'xlvoVotingFormGUI' => $baseDir . '/classes/Voting/class.xlvoVotingFormGUI.php',
    'xlvoVotingGUI' => $baseDir . '/classes/Voting/class.xlvoVotingGUI.php',
    'xlvoVotingTableGUI' => $baseDir . '/classes/Voting/class.xlvoVotingTableGUI.php',
);

<?php

declare(strict_types=1);

return [
    'lastFullAnalysisTime' => 1762347690,
    'meta' => [
        'cacheVersion' => 'v12-linesToIgnore',
        'phpstanVersion' => '2.1.31',
        'metaExtensions' => [
        ],
        'phpVersion' => 80414,
        'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, featureToggles: {bleedingEdge: true, checkNonStringableDynamicAccess: true, checkParameterCastableToNumberFunctions: true, skipCheckGenericClasses: {_prevent_merging: true}, stricterFunctionMap: true, reportPreciseLineForUnusedFunctionParameter: true, checkPrintfParameterTypes: true, internalTag: true, newStaticInAbstractClassStaticMethod: true, checkExtensionsForComparisonOperators: true, reportTooWideBool: true, rawMessageInBaseline: true, reportNestedTooWideType: false, assignToByRefForeachExpr: true, curlSetOptArrayTypes: true, tooWideImplicitThrows: true}, paths: [C:\\Users\\Em\\Herd\\portfolio26\\app, C:\\Users\\Em\\Herd\\portfolio26\\bootstrap\\app.php, C:\\Users\\Em\\Herd\\portfolio26\\config, C:\\Users\\Em\\Herd\\portfolio26\\database, C:\\Users\\Em\\Herd\\portfolio26\\public, C:\\Users\\Em\\Herd\\portfolio26\\routes], level: max, tmpDir: C:\\Users\\Em\\Herd\\portfolio26\\tmp\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}}}',
        'analysedPaths' => [
            0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app',
            1 => 'C:\\Users\\Em\\Herd\\portfolio26\\bootstrap\\app.php',
            2 => 'C:\\Users\\Em\\Herd\\portfolio26\\config',
            3 => 'C:\\Users\\Em\\Herd\\portfolio26\\database',
            4 => 'C:\\Users\\Em\\Herd\\portfolio26\\public',
            5 => 'C:\\Users\\Em\\Herd\\portfolio26\\routes',
        ],
        'scannedFiles' => [
        ],
        'composerLocks' => [
            'C:/Users/Em/Herd/portfolio26/composer.lock' => '3d41032463236bbed31e80e0184613045b5a1a36',
        ],
        'composerInstalled' => [
            'C:/Users/Em/Herd/portfolio26/vendor/composer/installed.php' => [
                'versions' => [
                    'amphp/amp' => [
                        'pretty_version' => 'v3.1.1',
                        'version' => '3.1.1.0',
                        'reference' => 'fa0ab33a6f47a82929c38d03ca47ebb71086a93f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/amp',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/byte-stream' => [
                        'pretty_version' => 'v2.1.2',
                        'version' => '2.1.2.0',
                        'reference' => '55a6bd071aec26fa2a3e002618c20c35e3df1b46',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/byte-stream',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/cache' => [
                        'pretty_version' => 'v2.0.1',
                        'version' => '2.0.1.0',
                        'reference' => '46912e387e6aa94933b61ea1ead9cf7540b7797c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/dns' => [
                        'pretty_version' => 'v2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => '78eb3db5fc69bf2fc0cb503c4fcba667bc223c71',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/dns',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/hpack' => [
                        'pretty_version' => 'v3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f293064b15682a2b178b1367ddf0b8b5feb0239',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/hpack',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/http' => [
                        'pretty_version' => 'v2.1.2',
                        'version' => '2.1.2.0',
                        'reference' => '3680d80bd38b5d6f3c2cef2214ca6dd6cef26588',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/http',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/http-client' => [
                        'pretty_version' => 'v5.3.4',
                        'version' => '5.3.4.0',
                        'reference' => '75ad21574fd632594a2dd914496647816d5106bc',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/http-server' => [
                        'pretty_version' => 'v3.4.3',
                        'version' => '3.4.3.0',
                        'reference' => '7aa962b0569f664af3ba23bc819f2a69884329cd',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/http-server',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/parser' => [
                        'pretty_version' => 'v1.1.1',
                        'version' => '1.1.1.0',
                        'reference' => '3cf1f8b32a0171d4b1bed93d25617637a77cded7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/pipeline' => [
                        'pretty_version' => 'v1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '7b52598c2e9105ebcddf247fc523161581930367',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/pipeline',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/process' => [
                        'pretty_version' => 'v2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => '52e08c09dec7511d5fbc1fb00d3e4e79fc77d58d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/serialization' => [
                        'pretty_version' => 'v1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => '693e77b2fb0b266c3c7d622317f881de44ae94a1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/serialization',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/socket' => [
                        'pretty_version' => 'v2.3.1',
                        'version' => '2.3.1.0',
                        'reference' => '58e0422221825b79681b72c50c47a930be7bf1e1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/socket',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/sync' => [
                        'pretty_version' => 'v2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '217097b785130d77cfcc58ff583cf26cd1770bf1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/sync',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/websocket' => [
                        'pretty_version' => 'v2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '963904b6a883c4b62d9222d1d9749814fac96a3b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/websocket',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'amphp/websocket-client' => [
                        'pretty_version' => 'v2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'dc033fdce0af56295a23f63ac4f579b34d470d6c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../amphp/websocket-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'bacon/bacon-qr-code' => [
                        'pretty_version' => 'v3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => 'f9cc1f52b5a463062251d666761178dbdb6b544f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../bacon/bacon-qr-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'brianium/paratest' => [
                        'pretty_version' => 'v7.14.2',
                        'version' => '7.14.2.0',
                        'reference' => 'de06de1ae1203b11976c6ca01d6a9081c8b33d45',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../brianium/paratest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'brick/math' => [
                        'pretty_version' => '0.14.0',
                        'version' => '0.14.0.0',
                        'reference' => '113a8ee2656b882d4c3164fa31aa6e12cbb7aaa2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../brick/math',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'carbonphp/carbon-doctrine-types' => [
                        'pretty_version' => '3.2.0',
                        'version' => '3.2.0.0',
                        'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../carbonphp/carbon-doctrine-types',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'cordoval/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'dasprid/enum' => [
                        'pretty_version' => '1.0.7',
                        'version' => '1.0.7.0',
                        'reference' => 'b5874fa9ed0043116c72162ec7f4fb50e02e7cce',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../dasprid/enum',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'davedevelopment/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'daverandom/libdns' => [
                        'pretty_version' => 'v2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => 'b84c94e8fe6b7ee4aecfe121bfe3b6177d303c8a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../daverandom/libdns',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'dflydev/dot-access-data' => [
                        'pretty_version' => 'v3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../dflydev/dot-access-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/deprecations' => [
                        'pretty_version' => '1.1.5',
                        'version' => '1.1.5.0',
                        'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../doctrine/deprecations',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'doctrine/inflector' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../doctrine/inflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/lexer' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../doctrine/lexer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dragonmantank/cron-expression' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../dragonmantank/cron-expression',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'egulias/email-validator' => [
                        'pretty_version' => '4.0.4',
                        'version' => '4.0.4.0',
                        'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../egulias/email-validator',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fakerphp/faker' => [
                        'pretty_version' => 'v1.24.1',
                        'version' => '1.24.1.0',
                        'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../fakerphp/faker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fidry/cpu-core-counter' => [
                        'pretty_version' => '1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../fidry/cpu-core-counter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'filp/whoops' => [
                        'pretty_version' => '2.18.4',
                        'version' => '2.18.4.0',
                        'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../filp/whoops',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fruitcake/php-cors' => [
                        'pretty_version' => 'v1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../fruitcake/php-cors',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'graham-campbell/result-type' => [
                        'pretty_version' => 'v1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../graham-campbell/result-type',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/guzzle' => [
                        'pretty_version' => '7.10.0',
                        'version' => '7.10.0.0',
                        'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../guzzlehttp/guzzle',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/promises' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../guzzlehttp/promises',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/psr7' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '21dc724a0583619cd1652f673303492272778051',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../guzzlehttp/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/uri-template' => [
                        'pretty_version' => 'v1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../guzzlehttp/uri-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'hamcrest/hamcrest-php' => [
                        'pretty_version' => 'v2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../hamcrest/hamcrest-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'iamcal/sql-parser' => [
                        'pretty_version' => 'v0.6',
                        'version' => '0.6.0.0',
                        'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../iamcal/sql-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'illuminate/auth' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/broadcasting' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/bus' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/cache' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/collections' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/concurrency' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/conditionable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/config' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/console' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/container' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/contracts' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/cookie' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/database' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/encryption' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/events' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/filesystem' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/hashing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/http' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/json-schema' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/log' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/macroable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/mail' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/notifications' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/pagination' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/pipeline' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/process' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/queue' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/redis' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/routing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/session' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/support' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/testing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/translation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/validation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'illuminate/view' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.37.0',
                        ],
                    ],
                    'inertiajs/inertia-laravel' => [
                        'pretty_version' => 'v2.0.10',
                        'version' => '2.0.10.0',
                        'reference' => '07da425d58a3a0e3ace9c296e67bd897a6e47009',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../inertiajs/inertia-laravel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'jean85/pretty-package-versions' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../jean85/pretty-package-versions',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'kelunik/certificate' => [
                        'pretty_version' => 'v1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => '7e00d498c264d5eb4f78c69f41c8bd6719c0199e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../kelunik/certificate',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'kodova/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'larastan/larastan' => [
                        'pretty_version' => 'v3.8.0',
                        'version' => '3.8.0.0',
                        'reference' => 'd13ef96d652d1b2a8f34f1760ba6bf5b9c98112e',
                        'type' => 'phpstan-extension',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../larastan/larastan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/fortify' => [
                        'pretty_version' => 'v1.31.2',
                        'version' => '1.31.2.0',
                        'reference' => 'a046d52ee087ee52c9852b840cf4bbad19f10934',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/fortify',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/framework' => [
                        'pretty_version' => 'v12.37.0',
                        'version' => '12.37.0.0',
                        'reference' => '3c3c4ad30f5b528b164a7c09aa4ad03118c4c125',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/framework',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/pail' => [
                        'pretty_version' => 'v1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '8cc3d575c1f0e57eeb923f366a37528c50d2385a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/pail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/pint' => [
                        'pretty_version' => 'v1.25.1',
                        'version' => '1.25.1.0',
                        'reference' => '5016e263f95d97670d71b9a987bd8996ade6d8d9',
                        'type' => 'project',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/pint',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/prompts' => [
                        'pretty_version' => 'v0.3.7',
                        'version' => '0.3.7.0',
                        'reference' => 'a1891d362714bc40c8d23b0b1d7090f022ea27cc',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/prompts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/sail' => [
                        'pretty_version' => 'v1.47.0',
                        'version' => '1.47.0.0',
                        'reference' => '9a11e822238167ad8b791e4ea51155d25cf4d8f2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/sail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/serializable-closure' => [
                        'pretty_version' => 'v2.0.6',
                        'version' => '2.0.6.0',
                        'reference' => '038ce42edee619599a1debb7e81d7b3759492819',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/serializable-closure',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/tinker' => [
                        'pretty_version' => 'v2.10.1',
                        'version' => '2.10.1.0',
                        'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/tinker',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/wayfinder' => [
                        'pretty_version' => 'v0.1.12',
                        'version' => '0.1.12.0',
                        'reference' => '08285225df7f8a094789ad8f384ac6bad6712ff6',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../laravel/wayfinder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/commonmark' => [
                        'pretty_version' => '2.7.1',
                        'version' => '2.7.1.0',
                        'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/commonmark',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/config' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/config',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem' => [
                        'pretty_version' => '3.30.1',
                        'version' => '3.30.1.0',
                        'reference' => 'c139fd65c1f796b926f4aec0df37f6caa959a8da',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/flysystem',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem-local' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/flysystem-local',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/mime-type-detection' => [
                        'pretty_version' => '1.16.0',
                        'version' => '1.16.0.0',
                        'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/mime-type-detection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri' => [
                        'pretty_version' => '7.5.1',
                        'version' => '7.5.1.0',
                        'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/uri',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri-components' => [
                        'pretty_version' => '7.5.1',
                        'version' => '7.5.1.0',
                        'reference' => '4aabf0e2f2f9421ffcacab35be33e4fb5e63c44f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/uri-components',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'league/uri-interfaces' => [
                        'pretty_version' => '7.5.0',
                        'version' => '7.5.0.0',
                        'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../league/uri-interfaces',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mockery/mockery' => [
                        'pretty_version' => '1.6.12',
                        'version' => '1.6.12.0',
                        'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../mockery/mockery',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'monolog/monolog' => [
                        'pretty_version' => '3.9.0',
                        'version' => '3.9.0.0',
                        'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../monolog/monolog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mtdowling/cron-expression' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '^1.0',
                        ],
                    ],
                    'myclabs/deep-copy' => [
                        'pretty_version' => '1.13.4',
                        'version' => '1.13.4.0',
                        'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../myclabs/deep-copy',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nesbot/carbon' => [
                        'pretty_version' => '3.10.3',
                        'version' => '3.10.3.0',
                        'reference' => '8e3643dcd149ae0fe1d2ff4f2c8e4bbfad7c165f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nesbot/carbon',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/schema' => [
                        'pretty_version' => 'v1.3.3',
                        'version' => '1.3.3.0',
                        'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nette/schema',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/utils' => [
                        'pretty_version' => 'v4.0.8',
                        'version' => '4.0.8.0',
                        'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nette/utils',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nikic/php-parser' => [
                        'pretty_version' => 'v5.6.2',
                        'version' => '5.6.2.0',
                        'reference' => '3a454ca033b9e06b63282ce19562e892747449bb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nikic/php-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nunomaduro/collision' => [
                        'pretty_version' => 'v8.8.2',
                        'version' => '8.8.2.0',
                        'reference' => '60207965f9b7b7a4ce15a0f75d57f9dadb105bdb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nunomaduro/collision',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/pokio' => [
                        'pretty_version' => 'v0.1.1',
                        'version' => '0.1.1.0',
                        'reference' => '084ae842c9567a01b9693386e72bbf17ef086566',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nunomaduro/pokio',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/termwind' => [
                        'pretty_version' => 'v2.3.2',
                        'version' => '2.3.2.0',
                        'reference' => 'eb61920a53057a7debd718a5b89c2178032b52c0',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../nunomaduro/termwind',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'paragonie/constant_time_encoding' => [
                        'pretty_version' => 'v3.1.3',
                        'version' => '3.1.3.0',
                        'reference' => 'd5b01a39b3415c2cd581d3bd3a3575c1ebbd8e77',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../paragonie/constant_time_encoding',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'pestphp/pest' => [
                        'pretty_version' => 'v4.1.3',
                        'version' => '4.1.3.0',
                        'reference' => '477d20a54fd9329ddfb0f8d4eb90dca7bc81b027',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin' => [
                        'pretty_version' => 'v4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
                        'type' => 'composer-plugin',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-arch' => [
                        'pretty_version' => 'v4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '25bb17e37920ccc35cbbcda3b00d596aadf3e58d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin-arch',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-browser' => [
                        'pretty_version' => 'v4.1.1',
                        'version' => '4.1.1.0',
                        'reference' => 'da70fce21e4b33ba22bef1276f654e77676213d7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin-browser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-laravel' => [
                        'pretty_version' => 'v4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => 'e12a07046b826a40b1c8632fd7b80d6b8d7b628e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin-laravel',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-mutate' => [
                        'pretty_version' => 'v4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin-mutate',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-profanity' => [
                        'pretty_version' => 'v4.2.0',
                        'version' => '4.2.0.0',
                        'reference' => 'c37e5e2c7136ee4eae12082e7952332bc1c6600a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin-profanity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-type-coverage' => [
                        'pretty_version' => 'v4.0.3',
                        'version' => '4.0.3.0',
                        'reference' => '123bbf73d4b790373600132f503fd8d1453d40bb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pestphp/pest-plugin-type-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/manifest' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '54750ef60c58e43759730615a392c31c80e23176',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phar-io/manifest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/version' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phar-io/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/reflection-common' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpdocumentor/reflection-common',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/reflection-docblock' => [
                        'pretty_version' => '5.6.3',
                        'version' => '5.6.3.0',
                        'reference' => '94f8051919d1b0369a6bcc7931d679a511c03fe9',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpdocumentor/reflection-docblock',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/type-resolver' => [
                        'pretty_version' => '1.10.0',
                        'version' => '1.10.0.0',
                        'reference' => '679e3ce485b99e84c775d28e2e96fade9a7fb50a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpdocumentor/type-resolver',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpoption/phpoption' => [
                        'pretty_version' => '1.9.4',
                        'version' => '1.9.4.0',
                        'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpoption/phpoption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpdoc-parser' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '1e0cd5370df5dd2e556a36b9c62f62e555870495',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpstan/phpdoc-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpstan' => [
                        'pretty_version' => '2.1.31',
                        'version' => '2.1.31.0',
                        'reference' => 'ead89849d879fe203ce9292c6ef5e7e76f867b96',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpstan/phpstan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-code-coverage' => [
                        'pretty_version' => '12.4.0',
                        'version' => '12.4.0.0',
                        'reference' => '67e8aed88f93d0e6e1cb7effe1a2dfc2fee6022c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpunit/php-code-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-file-iterator' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => '961bc913d42fe24a257bfff826a5068079ac7782',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpunit/php-file-iterator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-invoker' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpunit/php-invoker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-text-template' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpunit/php-text-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-timer' => [
                        'pretty_version' => '8.0.0',
                        'version' => '8.0.0.0',
                        'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpunit/php-timer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/phpunit' => [
                        'pretty_version' => '12.4.1',
                        'version' => '12.4.1.0',
                        'reference' => 'fc5413a2e6d240d2f6d9317bdf7f0a24e73de194',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../phpunit/phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pragmarx/google2fa' => [
                        'pretty_version' => 'v8.0.3',
                        'version' => '8.0.3.0',
                        'reference' => '6f8d87ebd5afbf7790bde1ffc7579c7c705e0fad',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../pragmarx/google2fa',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/container' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/container',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/container-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.1|2.0',
                        ],
                    ],
                    'psr/event-dispatcher' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-client' => [
                        'pretty_version' => '1.0.3',
                        'version' => '1.0.3.0',
                        'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-client-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-factory' => [
                        'pretty_version' => '1.1.0',
                        'version' => '1.1.0.0',
                        'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/http-factory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-message' => [
                        'pretty_version' => '2.0',
                        'version' => '2.0.0.0',
                        'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/http-message',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-message-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/log' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/log',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/log-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                            1 => '3.0.0',
                        ],
                    ],
                    'psr/simple-cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psr/simple-cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/simple-cache-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psy/psysh' => [
                        'pretty_version' => 'v0.12.14',
                        'version' => '0.12.14.0',
                        'reference' => '95c29b3756a23855a30566b745d218bee690bef2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../psy/psysh',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ralouphie/getallheaders' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../ralouphie/getallheaders',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/collection' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../ramsey/collection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/uuid' => [
                        'pretty_version' => '4.9.1',
                        'version' => '4.9.1.0',
                        'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../ramsey/uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rector/rector' => [
                        'pretty_version' => '2.2.7',
                        'version' => '2.2.7.0',
                        'reference' => '022038537838bc8a4e526af86c2d6e38eaeff7ef',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../rector/rector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'revolt/event-loop' => [
                        'pretty_version' => 'v1.0.7',
                        'version' => '1.0.7.0',
                        'reference' => '09bf1bf7f7f574453efe43044b06fafe12216eb3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../revolt/event-loop',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'rhumsaa/uuid' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '4.9.1',
                        ],
                    ],
                    'sebastian/cli-parser' => [
                        'pretty_version' => '4.2.0',
                        'version' => '4.2.0.0',
                        'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/cli-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/comparator' => [
                        'pretty_version' => '7.1.3',
                        'version' => '7.1.3.0',
                        'reference' => 'dc904b4bb3ab070865fa4068cd84f3da8b945148',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/comparator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/complexity' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/complexity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/diff' => [
                        'pretty_version' => '7.0.0',
                        'version' => '7.0.0.0',
                        'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/diff',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/environment' => [
                        'pretty_version' => '8.0.3',
                        'version' => '8.0.3.0',
                        'reference' => '24a711b5c916efc6d6e62aa65aa2ec98fef77f68',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/environment',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/exporter' => [
                        'pretty_version' => '7.0.2',
                        'version' => '7.0.2.0',
                        'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/exporter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/global-state' => [
                        'pretty_version' => '8.0.2',
                        'version' => '8.0.2.0',
                        'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/global-state',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/lines-of-code' => [
                        'pretty_version' => '4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/lines-of-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-enumerator' => [
                        'pretty_version' => '7.0.0',
                        'version' => '7.0.0.0',
                        'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/object-enumerator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-reflector' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/object-reflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/recursion-context' => [
                        'pretty_version' => '7.0.1',
                        'version' => '7.0.1.0',
                        'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/recursion-context',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/type' => [
                        'pretty_version' => '6.0.3',
                        'version' => '6.0.3.0',
                        'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/type',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/version' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../sebastian/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/once' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'staabm/side-effects-detector' => [
                        'pretty_version' => '1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../staabm/side-effects-detector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'symfony/clock' => [
                        'pretty_version' => 'v7.3.0',
                        'version' => '7.3.0.0',
                        'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/console' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => 'cdb80fa5869653c83cfe1a9084a673b6daf57ea7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/console',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/css-selector' => [
                        'pretty_version' => 'v7.3.0',
                        'version' => '7.3.0.0',
                        'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/css-selector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/deprecation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/deprecation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/error-handler' => [
                        'pretty_version' => 'v7.3.4',
                        'version' => '7.3.4.0',
                        'reference' => '99f81bc944ab8e5dae4f21b4ca9972698bbad0e4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/error-handler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'b7dc69e71de420ac04bc9ab830cf3ffebba48191',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/event-dispatcher-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.0|3.0',
                        ],
                    ],
                    'symfony/finder' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => '9f696d2f1e340484b4683f7853b273abff94421f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/finder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-foundation' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => 'ce31218c7cac92eab280762c4375fb70a6f4f897',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/http-foundation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-kernel' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => '24fd3f123532e26025f49f1abefcc01a69ef15ab',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/http-kernel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mailer' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => 'fd497c45ba9c10c37864e19466b090dcb60a50ba',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/mailer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mime' => [
                        'pretty_version' => 'v7.3.4',
                        'version' => '7.3.4.0',
                        'reference' => 'b1b828f69cbaf887fa835a091869e55df91d0e35',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/mime',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-ctype' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-ctype',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-grapheme' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-intl-grapheme',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-idn' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-intl-idn',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-normalizer' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-intl-normalizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-mbstring' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-mbstring',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php80' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-php80',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php83' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-php83',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php84' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-php84',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php85' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-php85',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-uuid' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/polyfill-uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/process' => [
                        'pretty_version' => 'v7.3.4',
                        'version' => '7.3.4.0',
                        'reference' => 'f24f8f316367b30810810d4eb30c543d7003ff3b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/routing' => [
                        'pretty_version' => 'v7.3.4',
                        'version' => '7.3.4.0',
                        'reference' => '8dc648e159e9bac02b703b9fbd937f19ba13d07c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/routing',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/service-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'f021b05a130d35510bd6b25fe9053c2a8a15d5d4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/service-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/string' => [
                        'pretty_version' => 'v7.3.4',
                        'version' => '7.3.4.0',
                        'reference' => 'f96476035142921000338bad71e5247fbc138872',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/string',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation' => [
                        'pretty_version' => 'v7.3.4',
                        'version' => '7.3.4.0',
                        'reference' => 'ec25870502d0c7072d086e8ffba1420c85965174',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/translation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'df210c7a2573f1913b2d17cc95f90f53a73d8f7d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/translation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.3|3.0',
                        ],
                    ],
                    'symfony/uid' => [
                        'pretty_version' => 'v7.3.1',
                        'version' => '7.3.1.0',
                        'reference' => 'a69f69f3159b852651a6bf45a9fdd149520525bb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/uid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/var-dumper' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => '476c4ae17f43a9a36650c69879dcf5b1e6ae724d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/var-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/yaml' => [
                        'pretty_version' => 'v7.3.5',
                        'version' => '7.3.5.0',
                        'reference' => '90208e2fc6f68f613eae7ca25a2458a931b1bacc',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../symfony/yaml',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'ta-tikoma/phpunit-architecture-test' => [
                        'pretty_version' => '0.8.5',
                        'version' => '0.8.5.0',
                        'reference' => 'cf6fb197b676ba716837c886baca842e4db29005',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'theseer/tokenizer' => [
                        'pretty_version' => '1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../theseer/tokenizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tijsverkoyen/css-to-inline-styles' => [
                        'pretty_version' => 'v2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'tomasvotruba/type-coverage' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'd033429580f2c18bda538fa44f2939236a990e0c',
                        'type' => 'phpstan-extension',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../tomasvotruba/type-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'vlucas/phpdotenv' => [
                        'pretty_version' => 'v5.6.2',
                        'version' => '5.6.2.0',
                        'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../vlucas/phpdotenv',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'voku/portable-ascii' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../voku/portable-ascii',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'webmozart/assert' => [
                        'pretty_version' => '1.12.1',
                        'version' => '1.12.1.0',
                        'reference' => '9be6926d8b485f55b9229203f962b51ed377ba68',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\composer/../webmozart/assert',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                ],
            ],
        ],
        'executedFilesHashes' => [
            'C:\\Users\\Em\\Herd\\portfolio26\\vendor\\larastan\\larastan\\bootstrap.php' => 'e245faaafdb2acc750f4babbbf3b4bd27f415138',
            'phar://C:\\Users\\Em\\Herd\\portfolio26\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
            'phar://C:\\Users\\Em\\Herd\\portfolio26\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
            'phar://C:\\Users\\Em\\Herd\\portfolio26\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
            'phar://C:\\Users\\Em\\Herd\\portfolio26\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
        ],
        'phpExtensions' => [
            0 => 'Core',
            1 => 'FFI',
            2 => 'PDO',
            3 => 'Phar',
            4 => 'Reflection',
            5 => 'SPL',
            6 => 'SimpleXML',
            7 => 'bcmath',
            8 => 'bz2',
            9 => 'calendar',
            10 => 'ctype',
            11 => 'curl',
            12 => 'date',
            13 => 'dom',
            14 => 'exif',
            15 => 'fileinfo',
            16 => 'filter',
            17 => 'gd',
            18 => 'gmp',
            19 => 'hash',
            20 => 'herd',
            21 => 'iconv',
            22 => 'intl',
            23 => 'json',
            24 => 'libxml',
            25 => 'mbstring',
            26 => 'mongodb',
            27 => 'mysqli',
            28 => 'mysqlnd',
            29 => 'openssl',
            30 => 'pcre',
            31 => 'pdo_mysql',
            32 => 'pdo_pgsql',
            33 => 'pdo_sqlite',
            34 => 'pgsql',
            35 => 'random',
            36 => 'readline',
            37 => 'redis',
            38 => 'session',
            39 => 'shmop',
            40 => 'soap',
            41 => 'sockets',
            42 => 'sodium',
            43 => 'sqlite3',
            44 => 'standard',
            45 => 'tokenizer',
            46 => 'xml',
            47 => 'xmlreader',
            48 => 'xmlwriter',
            49 => 'zip',
            50 => 'zlib',
        ],
        'stubFiles' => [
        ],
        'level' => 'max',
    ],
    'projectExtensionFiles' => [
    ],
    'errorsCallback' => static function (): array {
        return [
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method update() on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                    'line' => 32,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 32,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'password\' on mixed.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                    'line' => 33,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 33,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method fill() on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'line' => 32,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 32,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method isDirty() on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'line' => 34,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 34,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $email_verified_at on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'line' => 35,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 35,
                    'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method save() on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'line' => 38,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 38,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method delete() on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'line' => 56,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 56,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method hasEnabledTwoFactorAuthentication() on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
                    'line' => 33,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 33,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $string of function str expects string|null, mixed given.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                    'line' => 39,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 39,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $string of function trim expects string, string|null given.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                    'line' => 44,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 44,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $string of function trim expects string, string|null given.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                    'line' => 44,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 44,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $id on App\\Models\\User|null.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
                    'line' => 28,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 28,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $value of static method Illuminate\\Support\\Str::lower() expects string, mixed given.',
                    'file' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php',
                    'line' => 86,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 86,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
        ];
    },
    'locallyIgnoredErrorsCallback' => static function (): array {
        return [
        ];
    },
    'linesToIgnore' => [
    ],
    'unmatchedLineIgnores' => [
    ],
    'collectedDataCallback' => static function (): array {
        return [
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\CreateNewUser.php' => [
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\PasswordValidationRules.php' => [
                'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => [
                    0 => [
                        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
                        1 => 7,
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\ResetUserPassword.php' => [
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleAppearance.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\View',
                        1 => 'share',
                        2 => 19,
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
                        1 => 'rules',
                        2 => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Models\\User.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Models\\User',
                        1 => 'casts',
                        2 => 'App\\Models\\User',
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                        1 => 'Illuminate\\Notifications\\Notifiable',
                        2 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
                        1 => 'for',
                        2 => 81,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
                        1 => 'for',
                        2 => 85,
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\database\\seeders\\DatabaseSeeder.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Database\\Eloquent\\Builder',
                        1 => 'firstOrCreate',
                        2 => 18,
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\public\\index.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'define',
                        1 => 6,
                    ],
                ],
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\routes\\settings.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Route',
                        1 => 'redirect',
                        2 => 10,
                    ],
                ],
            ],
        ];
    },
    'dependencies' => [
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\CreateNewUser.php' => [
            'fileHash' => 'dac88412f50d309b2ac005c496eea986d20f453e',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\PasswordValidationRules.php' => [
            'fileHash' => 'cdd28db27e66a6b1b5bb4815dd51a45cf5232a80',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\CreateNewUser.php',
                1 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\ResetUserPassword.php',
                2 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php',
            ],
            'usedTraitDependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\CreateNewUser.php',
                1 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\ResetUserPassword.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\ResetUserPassword.php' => [
            'fileHash' => '21f90caa341bd6a4766da75b83d4155b60bbccf1',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Controller.php' => [
            'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                1 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                2 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
                3 => 'C:\\Users\\Em\\Herd\\portfolio26\\routes\\settings.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php' => [
            'fileHash' => 'b5211bc168bb696b10a55be99975184dd84daf62',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\routes\\settings.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php' => [
            'fileHash' => 'd142946b617fc8a12a23b8dabc90e45f45a7f215',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\routes\\settings.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php' => [
            'fileHash' => '4ee27b17a72f948a8fbc9d6502db8f8e390926df',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\routes\\settings.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleAppearance.php' => [
            'fileHash' => '919b506864fbdf2567a2e1c71b3583c418b06a86',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\bootstrap\\app.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php' => [
            'fileHash' => 'c148cba70e3f2548e05afaada07175473095658f',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\bootstrap\\app.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => [
            'fileHash' => '9c34c528c2f9c9712e96d78ca208c95679fb2e5d',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.php' => [
            'fileHash' => '4f78a8eb3b0b102d6cb568c54e584c3508a65241',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Models\\User.php' => [
            'fileHash' => '1e24cf09bd4e2dc5caea2707cab7cd85f7bef510',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\CreateNewUser.php',
                1 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\ResetUserPassword.php',
                2 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                3 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                4 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
                5 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                6 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
                7 => 'C:\\Users\\Em\\Herd\\portfolio26\\config\\auth.php',
                8 => 'C:\\Users\\Em\\Herd\\portfolio26\\database\\factories\\UserFactory.php',
                9 => 'C:\\Users\\Em\\Herd\\portfolio26\\database\\seeders\\DatabaseSeeder.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\AppServiceProvider.php' => [
            'fileHash' => '01bf9e5cf5bb666446625056b618445ae4749675',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php' => [
            'fileHash' => '045c5bbce65290ce5b29d842081257ea1bc7401a',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\bootstrap\\app.php' => [
            'fileHash' => '22b095d52ea031bd55114f73565420bb45b4c1a1',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\app.php' => [
            'fileHash' => '248b42420be2f4010a1597761cd348f374a5acd0',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\auth.php' => [
            'fileHash' => 'd14c6ca41850324dcf3bde4b8c4fe4635d21b02e',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\cache.php' => [
            'fileHash' => 'cd1d6925c3548f3081f827bcce8f9b2c5522795e',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\database.php' => [
            'fileHash' => '4d7bb78ce43539e75ede1418a37fd5b9cecbb718',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\filesystems.php' => [
            'fileHash' => '6e1e66753542ecbccfe730cfee0d623723be2986',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\fortify.php' => [
            'fileHash' => '1e4598433a5d13bdd9a0a2612d4a4e84a0542a2c',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\inertia.php' => [
            'fileHash' => '8cab160c193370535e9d62c72d77c556881831f5',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\logging.php' => [
            'fileHash' => 'f163e17e3d43b2aa18f20994b2d26c2ccabd5abc',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\mail.php' => [
            'fileHash' => '55990e37cb337eee513173e5c48479cbb1e5202e',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\queue.php' => [
            'fileHash' => 'd010c040a947e792dee55b6c5a74f14ba7f656d8',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\services.php' => [
            'fileHash' => 'db4fafeac1c3e89795de0bc27378ee2876cdb5f7',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\config\\session.php' => [
            'fileHash' => 'a0ce1b173c09908a3d698b26372566c604844a94',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\database\\factories\\UserFactory.php' => [
            'fileHash' => 'a5f7ed4640181df5d34c765f896805790e40d57d',
            'dependentFiles' => [
                0 => 'C:\\Users\\Em\\Herd\\portfolio26\\app\\Models\\User.php',
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\database\\migrations\\0001_01_01_000000_create_users_table.php' => [
            'fileHash' => 'c83722f2f43dc31195e37312e72524af995c15a9',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => [
            'fileHash' => '1e63143baede25661ec2075259ba517cbf2c2400',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\database\\migrations\\0001_01_01_000002_create_jobs_table.php' => [
            'fileHash' => '61d635023428eaa5cc6f27e5b7f9683817125a50',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\database\\migrations\\2025_08_26_100418_add_two_factor_columns_to_users_table.php' => [
            'fileHash' => '83ea2d2e7a617063bb0428a40de8e9881a794b66',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\database\\seeders\\DatabaseSeeder.php' => [
            'fileHash' => 'ad34f53c0643fb9646573bb91392a9daaf9edc6d',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\public\\index.php' => [
            'fileHash' => 'fb7f62e44d05f5423bf9e6b4ec56f8a54e041b80',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\routes\\console.php' => [
            'fileHash' => '302bdfc3b87dd1b70c1dc59645e1235395c9c0e3',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\routes\\settings.php' => [
            'fileHash' => 'c6a2e2ab8a5b9909780dc908b86927d4e7294519',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\Em\\Herd\\portfolio26\\routes\\web.php' => [
            'fileHash' => '2fb19e57b213cc97e12be8f5f6b398e7b070c2d7',
            'dependentFiles' => [
            ],
        ],
    ],
    'exportedNodesCallback' => static function (): array {
        return [
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\CreateNewUser.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Actions\\Fortify\\CreateNewUser',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                        0 => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
                    ],
                    'usedTraits' => [
                        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */',
                                'namespace' => 'App\\Actions\\Fortify',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'validator' => 'Illuminate\\Support\\Facades\\Validator',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                    'createsnewusers' => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'App\\Models\\User',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'input',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\PasswordValidationRules.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'name' => 'App\\Actions\\Fortify\\PasswordValidationRules',
                    'phpDoc' => null,
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'passwordRules',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>
     */',
                                'namespace' => 'App\\Actions\\Fortify',
                                'uses' => [
                                    'password' => 'Illuminate\\Validation\\Rules\\Password',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Actions\\Fortify\\ResetUserPassword.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                        0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
                    ],
                    'usedTraits' => [
                        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'reset',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Validate and reset the user\'s forgotten password.
     *
     * @param  array<string, string>  $input
     */',
                                'namespace' => 'App\\Actions\\Fortify',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'validator' => 'Illuminate\\Support\\Facades\\Validator',
                                    'resetsuserpasswords' => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'input',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Controller.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Controller',
                    'phpDoc' => null,
                    'abstract' => true,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\PasswordController.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Settings\\PasswordController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the user\'s password settings page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'password' => 'Illuminate\\Validation\\Rules\\Password',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Update the user\'s password.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'password' => 'Illuminate\\Validation\\Rules\\Password',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\ProfileController.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Settings\\ProfileController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the user\'s profile settings page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Update the user\'s profile settings.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'destroy',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Delete the user\'s account.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                        0 => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'middleware',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the middleware that should be assigned to the controller.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
                                    'hasmiddleware' => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
                                    'middleware' => 'Illuminate\\Routing\\Controllers\\Middleware',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                    'features' => 'Laravel\\Fortify\\Features',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'show',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the user\'s two-factor authentication settings page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
                                    'hasmiddleware' => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
                                    'middleware' => 'Illuminate\\Routing\\Controllers\\Middleware',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                    'features' => 'Laravel\\Fortify\\Features',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleAppearance.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\HandleAppearance',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'closure' => 'Closure',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'view' => 'Illuminate\\Support\\Facades\\View',
                                    'response' => 'Symfony\\Component\\HttpFoundation\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'next',
                                    'type' => 'Closure',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Middleware\\HandleInertiaRequests.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\HandleInertiaRequests',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Inertia\\Middleware',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'rootView',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The root template that\'s loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'inspiring' => 'Illuminate\\Foundation\\Inspiring',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'middleware' => 'Inertia\\Middleware',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'version',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'inspiring' => 'Illuminate\\Foundation\\Inspiring',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'middleware' => 'Inertia\\Middleware',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?string',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'share',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'inspiring' => 'Illuminate\\Foundation\\Inspiring',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'middleware' => 'Inertia\\Middleware',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'rules',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
                                'namespace' => 'App\\Http\\Requests\\Settings',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'authorize',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
                                'namespace' => 'App\\Http\\Requests\\Settings',
                                'uses' => [
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'features' => 'Laravel\\Fortify\\Features',
                                    'interactswithtwofactorstate' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'rules',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
                                'namespace' => 'App\\Http\\Requests\\Settings',
                                'uses' => [
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'features' => 'Laravel\\Fortify\\Features',
                                    'interactswithtwofactorstate' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Models\\User.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Models\\User',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Auth\\User',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                        1 => 'Illuminate\\Notifications\\Notifiable',
                        2 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'hidden',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'casts',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\AppServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\AppServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register any application services.
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Bootstrap any application services.
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\app\\Providers\\FortifyServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\FortifyServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register any application services.
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
                                    'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
                                    'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'inertia' => 'Inertia\\Inertia',
                                    'features' => 'Laravel\\Fortify\\Features',
                                    'fortify' => 'Laravel\\Fortify\\Fortify',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Bootstrap any application services.
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
                                    'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
                                    'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'inertia' => 'Inertia\\Inertia',
                                    'features' => 'Laravel\\Fortify\\Features',
                                    'fortify' => 'Laravel\\Fortify\\Fortify',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\database\\factories\\UserFactory.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Database\\Factories\\UserFactory',
                    'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
                        'namespace' => 'Database\\Factories',
                        'uses' => [
                            'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                            'str' => 'Illuminate\\Support\\Str',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'password',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The current password being used by the factory.
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => '?string',
                            'public' => false,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'definition',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'unverified',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'withoutTwoFactor',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Indicate that the model does not have two-factor authentication configured.
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\Em\\Herd\\portfolio26\\database\\seeders\\DatabaseSeeder.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Database\\Seeders\\DatabaseSeeder',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Seeder',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'run',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Seed the application\'s database.
     */',
                                'namespace' => 'Database\\Seeders',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'seeder' => 'Illuminate\\Database\\Seeder',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
        ];
    },
];

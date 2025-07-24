# Estructura del Proyecto: ObelisIA

```
ObelisIA/
├── .gitignore
├── .htaccess
├── .phpunit.cache
│   └── test-results
├── README.md
├── admin
│   ├── admin_panel.php
│   ├── ajax
│   │   ├── dashboard_stats.php
│   │   ├── delete_tool.php
│   │   ├── delete_user.php
│   │   ├── export_payments.php
│   │   ├── financial_data.php
│   │   ├── financial_transaction.php
│   │   ├── get_notifications.php
│   │   ├── get_payments.php
│   │   ├── get_settings.php
│   │   ├── get_tool.php
│   │   ├── get_tools.php
│   │   ├── get_user.php
│   │   ├── get_users.php
│   │   ├── premium_settings.php
│   │   ├── save_setting.php
│   │   ├── save_tool.php
│   │   ├── save_user.php
│   │   ├── save_user_enhanced.php
│   │   └── toggle_tool.php
│   ├── analytics.php
│   ├── creations.php
│   ├── debug_admin.php
│   ├── index.php
│   ├── payments.php
│   ├── settings.php
│   ├── simple_admin.php
│   └── users.php
├── app.yaml
├── assets
│   ├── css
│   │   ├── admin-panel.css
│   │   └── custom.css
│   ├── images
│   └── js
│       ├── admin-panel.js
│       └── custom.js
├── composer
├── composer-setup.php
├── composer.json
├── composer.lock
├── dashboard.php
├── database.sql
├── database_improvements.sql
├── index.php
├── login.php
├── obelisia_db.sql
├── pages
│   ├── about.php
│   ├── contact.php
│   ├── error
│   │   ├── 403.php
│   │   ├── 404.php
│   │   └── 500.php
│   ├── home.php
│   ├── profile.php
│   └── upgrade.php
├── phpunit.xml
├── register.php
├── src
│   ├── Auth
│   │   └── Auth.php
│   ├── Config
│   │   └── config.php
│   ├── Database
│   │   └── Database.php
│   ├── Router
│   │   └── MainRouter.php
│   └── Utils
│       ├── footer.php
│       └── header.php
├── test_login_dashboard.php
├── tests
│   ├── ExampleTest.php
│   └── ProjectHealthTest.php
└── vendor
    ├── autoload.php
    ├── bin
    │   ├── php-parse
    │   └── phpunit
    ├── composer
    │   ├── ClassLoader.php
    │   ├── InstalledVersions.php
    │   ├── LICENSE
    │   ├── autoload_classmap.php
    │   ├── autoload_files.php
    │   ├── autoload_namespaces.php
    │   ├── autoload_psr4.php
    │   ├── autoload_real.php
    │   ├── autoload_static.php
    │   ├── installed.json
    │   ├── installed.php
    │   └── platform_check.php
    ├── myclabs
    │   └── deep-copy
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           └── DeepCopy
    │               ├── DeepCopy.php
    │               ├── Exception
    │               │   ├── CloneException.php
    │               │   └── PropertyException.php
    │               ├── Filter
    │               │   ├── ChainableFilter.php
    │               │   ├── Doctrine
    │               │   │   ├── DoctrineCollectionFilter.php
    │               │   │   ├── DoctrineEmptyCollectionFilter.php
    │               │   │   └── DoctrineProxyFilter.php
    │               │   ├── Filter.php
    │               │   ├── KeepFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   └── SetNullFilter.php
    │               ├── Matcher
    │               │   ├── Doctrine
    │               │   │   └── DoctrineProxyMatcher.php
    │               │   ├── Matcher.php
    │               │   ├── PropertyMatcher.php
    │               │   ├── PropertyNameMatcher.php
    │               │   └── PropertyTypeMatcher.php
    │               ├── Reflection
    │               │   └── ReflectionHelper.php
    │               ├── TypeFilter
    │               │   ├── Date
    │               │   │   ├── DateIntervalFilter.php
    │               │   │   └── DatePeriodFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   ├── ShallowCopyFilter.php
    │               │   ├── Spl
    │               │   │   ├── ArrayObjectFilter.php
    │               │   │   ├── SplDoublyLinkedList.php
    │               │   │   └── SplDoublyLinkedListFilter.php
    │               │   └── TypeFilter.php
    │               ├── TypeMatcher
    │               │   └── TypeMatcher.php
    │               └── deep_copy.php
    ├── nikic
    │   └── php-parser
    │       ├── LICENSE
    │       ├── README.md
    │       ├── bin
    │       │   └── php-parse
    │       ├── composer.json
    │       └── lib
    │           └── PhpParser
    │               ├── Builder
    │               │   ├── ClassConst.php
    │               │   ├── Class_.php
    │               │   ├── Declaration.php
    │               │   ├── EnumCase.php
    │               │   ├── Enum_.php
    │               │   ├── FunctionLike.php
    │               │   ├── Function_.php
    │               │   ├── Interface_.php
    │               │   ├── Method.php
    │               │   ├── Namespace_.php
    │               │   ├── Param.php
    │               │   ├── Property.php
    │               │   ├── TraitUse.php
    │               │   ├── TraitUseAdaptation.php
    │               │   ├── Trait_.php
    │               │   └── Use_.php
    │               ├── Builder.php
    │               ├── BuilderFactory.php
    │               ├── BuilderHelpers.php
    │               ├── Comment
    │               │   └── Doc.php
    │               ├── Comment.php
    │               ├── ConstExprEvaluationException.php
    │               ├── ConstExprEvaluator.php
    │               ├── Error.php
    │               ├── ErrorHandler
    │               │   ├── Collecting.php
    │               │   └── Throwing.php
    │               ├── ErrorHandler.php
    │               ├── Internal
    │               │   ├── DiffElem.php
    │               │   ├── Differ.php
    │               │   ├── PrintableNewAnonClassNode.php
    │               │   ├── TokenPolyfill.php
    │               │   └── TokenStream.php
    │               ├── JsonDecoder.php
    │               ├── Lexer
    │               │   ├── Emulative.php
    │               │   └── TokenEmulator
    │               │       ├── AsymmetricVisibilityTokenEmulator.php
    │               │       ├── AttributeEmulator.php
    │               │       ├── EnumTokenEmulator.php
    │               │       ├── ExplicitOctalEmulator.php
    │               │       ├── KeywordEmulator.php
    │               │       ├── MatchTokenEmulator.php
    │               │       ├── NullsafeTokenEmulator.php
    │               │       ├── PropertyTokenEmulator.php
    │               │       ├── ReadonlyFunctionTokenEmulator.php
    │               │       ├── ReadonlyTokenEmulator.php
    │               │       ├── ReverseEmulator.php
    │               │       └── TokenEmulator.php
    │               ├── Lexer.php
    │               ├── Modifiers.php
    │               ├── NameContext.php
    │               ├── Node
    │               │   ├── Arg.php
    │               │   ├── ArrayItem.php
    │               │   ├── Attribute.php
    │               │   ├── AttributeGroup.php
    │               │   ├── ClosureUse.php
    │               │   ├── ComplexType.php
    │               │   ├── Const_.php
    │               │   ├── DeclareItem.php
    │               │   ├── Expr
    │               │   │   ├── ArrayDimFetch.php
    │               │   │   ├── ArrayItem.php
    │               │   │   ├── Array_.php
    │               │   │   ├── ArrowFunction.php
    │               │   │   ├── Assign.php
    │               │   │   ├── AssignOp
    │               │   │   │   ├── BitwiseAnd.php
    │               │   │   │   ├── BitwiseOr.php
    │               │   │   │   ├── BitwiseXor.php
    │               │   │   │   ├── Coalesce.php
    │               │   │   │   ├── Concat.php
    │               │   │   │   ├── Div.php
    │               │   │   │   ├── Minus.php
    │               │   │   │   ├── Mod.php
    │               │   │   │   ├── Mul.php
    │               │   │   │   ├── Plus.php
    │               │   │   │   ├── Pow.php
    │               │   │   │   ├── ShiftLeft.php
    │               │   │   │   └── ShiftRight.php
    │               │   │   ├── AssignOp.php
    │               │   │   ├── AssignRef.php
    │               │   │   ├── BinaryOp
    │               │   │   │   ├── BitwiseAnd.php
    │               │   │   │   ├── BitwiseOr.php
    │               │   │   │   ├── BitwiseXor.php
    │               │   │   │   ├── BooleanAnd.php
    │               │   │   │   ├── BooleanOr.php
    │               │   │   │   ├── Coalesce.php
    │               │   │   │   ├── Concat.php
    │               │   │   │   ├── Div.php
    │               │   │   │   ├── Equal.php
    │               │   │   │   ├── Greater.php
    │               │   │   │   ├── GreaterOrEqual.php
    │               │   │   │   ├── Identical.php
    │               │   │   │   ├── LogicalAnd.php
    │               │   │   │   ├── LogicalOr.php
    │               │   │   │   ├── LogicalXor.php
    │               │   │   │   ├── Minus.php
    │               │   │   │   ├── Mod.php
    │               │   │   │   ├── Mul.php
    │               │   │   │   ├── NotEqual.php
    │               │   │   │   ├── NotIdentical.php
    │               │   │   │   ├── Plus.php
    │               │   │   │   ├── Pow.php
    │               │   │   │   ├── ShiftLeft.php
    │               │   │   │   ├── ShiftRight.php
    │               │   │   │   ├── Smaller.php
    │               │   │   │   ├── SmallerOrEqual.php
    │               │   │   │   └── Spaceship.php
    │               │   │   ├── BinaryOp.php
    │               │   │   ├── BitwiseNot.php
    │               │   │   ├── BooleanNot.php
    │               │   │   ├── CallLike.php
    │               │   │   ├── Cast
    │               │   │   │   ├── Array_.php
    │               │   │   │   ├── Bool_.php
    │               │   │   │   ├── Double.php
    │               │   │   │   ├── Int_.php
    │               │   │   │   ├── Object_.php
    │               │   │   │   ├── String_.php
    │               │   │   │   └── Unset_.php
    │               │   │   ├── Cast.php
    │               │   │   ├── ClassConstFetch.php
    │               │   │   ├── Clone_.php
    │               │   │   ├── Closure.php
    │               │   │   ├── ClosureUse.php
    │               │   │   ├── ConstFetch.php
    │               │   │   ├── Empty_.php
    │               │   │   ├── Error.php
    │               │   │   ├── ErrorSuppress.php
    │               │   │   ├── Eval_.php
    │               │   │   ├── Exit_.php
    │               │   │   ├── FuncCall.php
    │               │   │   ├── Include_.php
    │               │   │   ├── Instanceof_.php
    │               │   │   ├── Isset_.php
    │               │   │   ├── List_.php
    │               │   │   ├── Match_.php
    │               │   │   ├── MethodCall.php
    │               │   │   ├── New_.php
    │               │   │   ├── NullsafeMethodCall.php
    │               │   │   ├── NullsafePropertyFetch.php
    │               │   │   ├── PostDec.php
    │               │   │   ├── PostInc.php
    │               │   │   ├── PreDec.php
    │               │   │   ├── PreInc.php
    │               │   │   ├── Print_.php
    │               │   │   ├── PropertyFetch.php
    │               │   │   ├── ShellExec.php
    │               │   │   ├── StaticCall.php
    │               │   │   ├── StaticPropertyFetch.php
    │               │   │   ├── Ternary.php
    │               │   │   ├── Throw_.php
    │               │   │   ├── UnaryMinus.php
    │               │   │   ├── UnaryPlus.php
    │               │   │   ├── Variable.php
    │               │   │   ├── YieldFrom.php
    │               │   │   └── Yield_.php
    │               │   ├── Expr.php
    │               │   ├── FunctionLike.php
    │               │   ├── Identifier.php
    │               │   ├── InterpolatedStringPart.php
    │               │   ├── IntersectionType.php
    │               │   ├── MatchArm.php
    │               │   ├── Name
    │               │   │   ├── FullyQualified.php
    │               │   │   └── Relative.php
    │               │   ├── Name.php
    │               │   ├── NullableType.php
    │               │   ├── Param.php
    │               │   ├── PropertyHook.php
    │               │   ├── PropertyItem.php
    │               │   ├── Scalar
    │               │   │   ├── DNumber.php
    │               │   │   ├── Encapsed.php
    │               │   │   ├── EncapsedStringPart.php
    │               │   │   ├── Float_.php
    │               │   │   ├── Int_.php
    │               │   │   ├── InterpolatedString.php
    │               │   │   ├── LNumber.php
    │               │   │   ├── MagicConst
    │               │   │   │   ├── Class_.php
    │               │   │   │   ├── Dir.php
    │               │   │   │   ├── File.php
    │               │   │   │   ├── Function_.php
    │               │   │   │   ├── Line.php
    │               │   │   │   ├── Method.php
    │               │   │   │   ├── Namespace_.php
    │               │   │   │   ├── Property.php
    │               │   │   │   └── Trait_.php
    │               │   │   ├── MagicConst.php
    │               │   │   └── String_.php
    │               │   ├── Scalar.php
    │               │   ├── StaticVar.php
    │               │   ├── Stmt
    │               │   │   ├── Block.php
    │               │   │   ├── Break_.php
    │               │   │   ├── Case_.php
    │               │   │   ├── Catch_.php
    │               │   │   ├── ClassConst.php
    │               │   │   ├── ClassLike.php
    │               │   │   ├── ClassMethod.php
    │               │   │   ├── Class_.php
    │               │   │   ├── Const_.php
    │               │   │   ├── Continue_.php
    │               │   │   ├── DeclareDeclare.php
    │               │   │   ├── Declare_.php
    │               │   │   ├── Do_.php
    │               │   │   ├── Echo_.php
    │               │   │   ├── ElseIf_.php
    │               │   │   ├── Else_.php
    │               │   │   ├── EnumCase.php
    │               │   │   ├── Enum_.php
    │               │   │   ├── Expression.php
    │               │   │   ├── Finally_.php
    │               │   │   ├── For_.php
    │               │   │   ├── Foreach_.php
    │               │   │   ├── Function_.php
    │               │   │   ├── Global_.php
    │               │   │   ├── Goto_.php
    │               │   │   ├── GroupUse.php
    │               │   │   ├── HaltCompiler.php
    │               │   │   ├── If_.php
    │               │   │   ├── InlineHTML.php
    │               │   │   ├── Interface_.php
    │               │   │   ├── Label.php
    │               │   │   ├── Namespace_.php
    │               │   │   ├── Nop.php
    │               │   │   ├── Property.php
    │               │   │   ├── PropertyProperty.php
    │               │   │   ├── Return_.php
    │               │   │   ├── StaticVar.php
    │               │   │   ├── Static_.php
    │               │   │   ├── Switch_.php
    │               │   │   ├── TraitUse.php
    │               │   │   ├── TraitUseAdaptation
    │               │   │   │   ├── Alias.php
    │               │   │   │   └── Precedence.php
    │               │   │   ├── TraitUseAdaptation.php
    │               │   │   ├── Trait_.php
    │               │   │   ├── TryCatch.php
    │               │   │   ├── Unset_.php
    │               │   │   ├── UseUse.php
    │               │   │   ├── Use_.php
    │               │   │   └── While_.php
    │               │   ├── Stmt.php
    │               │   ├── UnionType.php
    │               │   ├── UseItem.php
    │               │   ├── VarLikeIdentifier.php
    │               │   └── VariadicPlaceholder.php
    │               ├── Node.php
    │               ├── NodeAbstract.php
    │               ├── NodeDumper.php
    │               ├── NodeFinder.php
    │               ├── NodeTraverser.php
    │               ├── NodeTraverserInterface.php
    │               ├── NodeVisitor
    │               │   ├── CloningVisitor.php
    │               │   ├── CommentAnnotatingVisitor.php
    │               │   ├── FindingVisitor.php
    │               │   ├── FirstFindingVisitor.php
    │               │   ├── NameResolver.php
    │               │   ├── NodeConnectingVisitor.php
    │               │   └── ParentConnectingVisitor.php
    │               ├── NodeVisitor.php
    │               ├── NodeVisitorAbstract.php
    │               ├── Parser
    │               │   ├── Php7.php
    │               │   └── Php8.php
    │               ├── Parser.php
    │               ├── ParserAbstract.php
    │               ├── ParserFactory.php
    │               ├── PhpVersion.php
    │               ├── PrettyPrinter
    │               │   └── Standard.php
    │               ├── PrettyPrinter.php
    │               ├── PrettyPrinterAbstract.php
    │               ├── Token.php
    │               └── compatibility_tokens.php
    ├── phar-io
    │   ├── manifest
    │   │   ├── .github
    │   │   │   ├── FUNDING.yml
    │   │   │   └── workflows
    │   │   │       └── ci.yml
    │   │   ├── .php-cs-fixer.dist.php
    │   │   ├── CHANGELOG.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── composer.lock
    │   │   ├── manifest.xsd
    │   │   ├── src
    │   │   │   ├── ManifestDocumentMapper.php
    │   │   │   ├── ManifestLoader.php
    │   │   │   ├── ManifestSerializer.php
    │   │   │   ├── exceptions
    │   │   │   │   ├── ElementCollectionException.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── InvalidApplicationNameException.php
    │   │   │   │   ├── InvalidEmailException.php
    │   │   │   │   ├── InvalidUrlException.php
    │   │   │   │   ├── ManifestDocumentException.php
    │   │   │   │   ├── ManifestDocumentLoadingException.php
    │   │   │   │   ├── ManifestDocumentMapperException.php
    │   │   │   │   ├── ManifestElementException.php
    │   │   │   │   ├── ManifestLoaderException.php
    │   │   │   │   └── NoEmailAddressException.php
    │   │   │   ├── values
    │   │   │   │   ├── Application.php
    │   │   │   │   ├── ApplicationName.php
    │   │   │   │   ├── Author.php
    │   │   │   │   ├── AuthorCollection.php
    │   │   │   │   ├── AuthorCollectionIterator.php
    │   │   │   │   ├── BundledComponent.php
    │   │   │   │   ├── BundledComponentCollection.php
    │   │   │   │   ├── BundledComponentCollectionIterator.php
    │   │   │   │   ├── CopyrightInformation.php
    │   │   │   │   ├── Email.php
    │   │   │   │   ├── Extension.php
    │   │   │   │   ├── Library.php
    │   │   │   │   ├── License.php
    │   │   │   │   ├── Manifest.php
    │   │   │   │   ├── PhpExtensionRequirement.php
    │   │   │   │   ├── PhpVersionRequirement.php
    │   │   │   │   ├── Requirement.php
    │   │   │   │   ├── RequirementCollection.php
    │   │   │   │   ├── RequirementCollectionIterator.php
    │   │   │   │   ├── Type.php
    │   │   │   │   └── Url.php
    │   │   │   └── xml
    │   │   │       ├── AuthorElement.php
    │   │   │       ├── AuthorElementCollection.php
    │   │   │       ├── BundlesElement.php
    │   │   │       ├── ComponentElement.php
    │   │   │       ├── ComponentElementCollection.php
    │   │   │       ├── ContainsElement.php
    │   │   │       ├── CopyrightElement.php
    │   │   │       ├── ElementCollection.php
    │   │   │       ├── ExtElement.php
    │   │   │       ├── ExtElementCollection.php
    │   │   │       ├── ExtensionElement.php
    │   │   │       ├── LicenseElement.php
    │   │   │       ├── ManifestDocument.php
    │   │   │       ├── ManifestElement.php
    │   │   │       ├── PhpElement.php
    │   │   │       └── RequiresElement.php
    │   │   └── tools
    │   │       └── php-cs-fixer.d
    │   │           ├── PhpdocSingleLineVarFixer.php
    │   │           └── header.txt
    │   └── version
    │       ├── CHANGELOG.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           ├── BuildMetaData.php
    │           ├── PreReleaseSuffix.php
    │           ├── Version.php
    │           ├── VersionConstraintParser.php
    │           ├── VersionConstraintValue.php
    │           ├── VersionNumber.php
    │           ├── constraints
    │           │   ├── AbstractVersionConstraint.php
    │           │   ├── AndVersionConstraintGroup.php
    │           │   ├── AnyVersionConstraint.php
    │           │   ├── ExactVersionConstraint.php
    │           │   ├── GreaterThanOrEqualToVersionConstraint.php
    │           │   ├── OrVersionConstraintGroup.php
    │           │   ├── SpecificMajorAndMinorVersionConstraint.php
    │           │   ├── SpecificMajorVersionConstraint.php
    │           │   └── VersionConstraint.php
    │           └── exceptions
    │               ├── Exception.php
    │               ├── InvalidPreReleaseSuffixException.php
    │               ├── InvalidVersionException.php
    │               ├── NoBuildMetaDataException.php
    │               ├── NoPreReleaseSuffixException.php
    │               └── UnsupportedVersionConstraintException.php
    ├── phpunit
    │   ├── php-code-coverage
    │   │   ├── ChangeLog-11.0.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── CodeCoverage.php
    │   │       ├── Data
    │   │       │   ├── ProcessedCodeCoverageData.php
    │   │       │   └── RawCodeCoverageData.php
    │   │       ├── Driver
    │   │       │   ├── Driver.php
    │   │       │   ├── PcovDriver.php
    │   │       │   ├── Selector.php
    │   │       │   └── XdebugDriver.php
    │   │       ├── Exception
    │   │       │   ├── BranchAndPathCoverageNotSupportedException.php
    │   │       │   ├── DeadCodeDetectionNotSupportedException.php
    │   │       │   ├── DirectoryCouldNotBeCreatedException.php
    │   │       │   ├── Exception.php
    │   │       │   ├── FileCouldNotBeWrittenException.php
    │   │       │   ├── InvalidArgumentException.php
    │   │       │   ├── NoCodeCoverageDriverAvailableException.php
    │   │       │   ├── NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
    │   │       │   ├── ParserException.php
    │   │       │   ├── PathExistsButIsNotDirectoryException.php
    │   │       │   ├── PcovNotAvailableException.php
    │   │       │   ├── ReflectionException.php
    │   │       │   ├── ReportAlreadyFinalizedException.php
    │   │       │   ├── StaticAnalysisCacheNotConfiguredException.php
    │   │       │   ├── TestIdMissingException.php
    │   │       │   ├── UnintentionallyCoveredCodeException.php
    │   │       │   ├── WriteOperationFailedException.php
    │   │       │   ├── XdebugNotAvailableException.php
    │   │       │   ├── XdebugNotEnabledException.php
    │   │       │   └── XmlException.php
    │   │       ├── Filter.php
    │   │       ├── Node
    │   │       │   ├── AbstractNode.php
    │   │       │   ├── Builder.php
    │   │       │   ├── CrapIndex.php
    │   │       │   ├── Directory.php
    │   │       │   ├── File.php
    │   │       │   └── Iterator.php
    │   │       ├── Report
    │   │       │   ├── Clover.php
    │   │       │   ├── Cobertura.php
    │   │       │   ├── Crap4j.php
    │   │       │   ├── Html
    │   │       │   │   ├── Colors.php
    │   │       │   │   ├── CustomCssFile.php
    │   │       │   │   ├── Facade.php
    │   │       │   │   ├── Renderer
    │   │       │   │   │   ├── Dashboard.php
    │   │       │   │   │   ├── Directory.php
    │   │       │   │   │   ├── File.php
    │   │       │   │   │   └── Template
    │   │       │   │   │       ├── branches.html.dist
    │   │       │   │   │       ├── coverage_bar.html.dist
    │   │       │   │   │       ├── coverage_bar_branch.html.dist
    │   │       │   │   │       ├── css
    │   │       │   │   │       │   ├── bootstrap.min.css
    │   │       │   │   │       │   ├── custom.css
    │   │       │   │   │       │   ├── nv.d3.min.css
    │   │       │   │   │       │   ├── octicons.css
    │   │       │   │   │       │   └── style.css
    │   │       │   │   │       ├── dashboard.html.dist
    │   │       │   │   │       ├── dashboard_branch.html.dist
    │   │       │   │   │       ├── directory.html.dist
    │   │       │   │   │       ├── directory_branch.html.dist
    │   │       │   │   │       ├── directory_item.html.dist
    │   │       │   │   │       ├── directory_item_branch.html.dist
    │   │       │   │   │       ├── file.html.dist
    │   │       │   │   │       ├── file_branch.html.dist
    │   │       │   │   │       ├── file_item.html.dist
    │   │       │   │   │       ├── file_item_branch.html.dist
    │   │       │   │   │       ├── icons
    │   │       │   │   │       │   ├── file-code.svg
    │   │       │   │   │       │   └── file-directory.svg
    │   │       │   │   │       ├── js
    │   │       │   │   │       │   ├── bootstrap.bundle.min.js
    │   │       │   │   │       │   ├── d3.min.js
    │   │       │   │   │       │   ├── file.js
    │   │       │   │   │       │   ├── jquery.min.js
    │   │       │   │   │       │   └── nv.d3.min.js
    │   │       │   │   │       ├── line.html.dist
    │   │       │   │   │       ├── lines.html.dist
    │   │       │   │   │       ├── method_item.html.dist
    │   │       │   │   │       ├── method_item_branch.html.dist
    │   │       │   │   │       └── paths.html.dist
    │   │       │   │   └── Renderer.php
    │   │       │   ├── PHP.php
    │   │       │   ├── Text.php
    │   │       │   ├── Thresholds.php
    │   │       │   └── Xml
    │   │       │       ├── BuildInformation.php
    │   │       │       ├── Coverage.php
    │   │       │       ├── Directory.php
    │   │       │       ├── Facade.php
    │   │       │       ├── File.php
    │   │       │       ├── Method.php
    │   │       │       ├── Node.php
    │   │       │       ├── Project.php
    │   │       │       ├── Report.php
    │   │       │       ├── Source.php
    │   │       │       ├── Tests.php
    │   │       │       ├── Totals.php
    │   │       │       └── Unit.php
    │   │       ├── StaticAnalysis
    │   │       │   ├── CacheWarmer.php
    │   │       │   ├── CachingFileAnalyser.php
    │   │       │   ├── CodeUnitFindingVisitor.php
    │   │       │   ├── ExecutableLinesFindingVisitor.php
    │   │       │   ├── FileAnalyser.php
    │   │       │   ├── IgnoredLinesFindingVisitor.php
    │   │       │   └── ParsingFileAnalyser.php
    │   │       ├── TestSize
    │   │       │   ├── Known.php
    │   │       │   ├── Large.php
    │   │       │   ├── Medium.php
    │   │       │   ├── Small.php
    │   │       │   ├── TestSize.php
    │   │       │   └── Unknown.php
    │   │       ├── TestStatus
    │   │       │   ├── Failure.php
    │   │       │   ├── Known.php
    │   │       │   ├── Success.php
    │   │       │   ├── TestStatus.php
    │   │       │   └── Unknown.php
    │   │       ├── Util
    │   │       │   ├── Filesystem.php
    │   │       │   └── Percentage.php
    │   │       └── Version.php
    │   ├── php-file-iterator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── ExcludeIterator.php
    │   │       ├── Facade.php
    │   │       ├── Factory.php
    │   │       └── Iterator.php
    │   ├── php-invoker
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Invoker.php
    │   │       └── exceptions
    │   │           ├── Exception.php
    │   │           ├── ProcessControlExtensionNotLoadedException.php
    │   │           └── TimeoutException.php
    │   ├── php-text-template
    │   │   ├── .psalm
    │   │   │   ├── baseline.xml
    │   │   │   └── config.xml
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Template.php
    │   │       └── exceptions
    │   │           ├── Exception.php
    │   │           ├── InvalidArgumentException.php
    │   │           └── RuntimeException.php
    │   ├── php-timer
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Duration.php
    │   │       ├── ResourceUsageFormatter.php
    │   │       ├── Timer.php
    │   │       └── exceptions
    │   │           ├── Exception.php
    │   │           ├── NoActiveTimerException.php
    │   │           └── TimeSinceStartOfRequestNotAvailableException.php
    │   └── phpunit
    │       ├── ChangeLog-11.5.md
    │       ├── DEPRECATIONS.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── SECURITY.md
    │       ├── composer.json
    │       ├── composer.lock
    │       ├── phpunit
    │       ├── phpunit.xsd
    │       ├── schema
    │       │   ├── 10.0.xsd
    │       │   ├── 10.1.xsd
    │       │   ├── 10.2.xsd
    │       │   ├── 10.3.xsd
    │       │   ├── 10.4.xsd
    │       │   ├── 10.5.xsd
    │       │   ├── 11.0.xsd
    │       │   ├── 11.1.xsd
    │       │   ├── 11.2.xsd
    │       │   ├── 11.3.xsd
    │       │   ├── 11.4.xsd
    │       │   ├── 8.5.xsd
    │       │   ├── 9.0.xsd
    │       │   ├── 9.1.xsd
    │       │   ├── 9.2.xsd
    │       │   ├── 9.3.xsd
    │       │   ├── 9.4.xsd
    │       │   └── 9.5.xsd
    │       └── src
    │           ├── Event
    │           │   ├── Dispatcher
    │           │   │   ├── CollectingDispatcher.php
    │           │   │   ├── DeferringDispatcher.php
    │           │   │   ├── DirectDispatcher.php
    │           │   │   ├── Dispatcher.php
    │           │   │   └── SubscribableDispatcher.php
    │           │   ├── Emitter
    │           │   │   ├── DispatchingEmitter.php
    │           │   │   └── Emitter.php
    │           │   ├── Events
    │           │   │   ├── Application
    │           │   │   │   ├── Finished.php
    │           │   │   │   ├── FinishedSubscriber.php
    │           │   │   │   ├── Started.php
    │           │   │   │   └── StartedSubscriber.php
    │           │   │   ├── Event.php
    │           │   │   ├── EventCollection.php
    │           │   │   ├── EventCollectionIterator.php
    │           │   │   ├── Test
    │           │   │   │   ├── ComparatorRegistered.php
    │           │   │   │   ├── ComparatorRegisteredSubscriber.php
    │           │   │   │   ├── HookMethod
    │           │   │   │   │   ├── AfterLastTestMethodCalled.php
    │           │   │   │   │   ├── AfterLastTestMethodCalledSubscriber.php
    │           │   │   │   │   ├── AfterLastTestMethodErrored.php
    │           │   │   │   │   ├── AfterLastTestMethodErroredSubscriber.php
    │           │   │   │   │   ├── AfterLastTestMethodFinished.php
    │           │   │   │   │   ├── AfterLastTestMethodFinishedSubscriber.php
    │           │   │   │   │   ├── AfterTestMethodCalled.php
    │           │   │   │   │   ├── AfterTestMethodCalledSubscriber.php
    │           │   │   │   │   ├── AfterTestMethodErrored.php
    │           │   │   │   │   ├── AfterTestMethodErroredSubscriber.php
    │           │   │   │   │   ├── AfterTestMethodFinished.php
    │           │   │   │   │   ├── AfterTestMethodFinishedSubscriber.php
    │           │   │   │   │   ├── BeforeFirstTestMethodCalled.php
    │           │   │   │   │   ├── BeforeFirstTestMethodCalledSubscriber.php
    │           │   │   │   │   ├── BeforeFirstTestMethodErrored.php
    │           │   │   │   │   ├── BeforeFirstTestMethodErroredSubscriber.php
    │           │   │   │   │   ├── BeforeFirstTestMethodFinished.php
    │           │   │   │   │   ├── BeforeFirstTestMethodFinishedSubscriber.php
    │           │   │   │   │   ├── BeforeTestMethodCalled.php
    │           │   │   │   │   ├── BeforeTestMethodCalledSubscriber.php
    │           │   │   │   │   ├── BeforeTestMethodErrored.php
    │           │   │   │   │   ├── BeforeTestMethodErroredSubscriber.php
    │           │   │   │   │   ├── BeforeTestMethodFinished.php
    │           │   │   │   │   ├── BeforeTestMethodFinishedSubscriber.php
    │           │   │   │   │   ├── PostConditionCalled.php
    │           │   │   │   │   ├── PostConditionCalledSubscriber.php
    │           │   │   │   │   ├── PostConditionErrored.php
    │           │   │   │   │   ├── PostConditionErroredSubscriber.php
    │           │   │   │   │   ├── PostConditionFinished.php
    │           │   │   │   │   ├── PostConditionFinishedSubscriber.php
    │           │   │   │   │   ├── PreConditionCalled.php
    │           │   │   │   │   ├── PreConditionCalledSubscriber.php
    │           │   │   │   │   ├── PreConditionErrored.php
    │           │   │   │   │   ├── PreConditionErroredSubscriber.php
    │           │   │   │   │   ├── PreConditionFinished.php
    │           │   │   │   │   └── PreConditionFinishedSubscriber.php
    │           │   │   │   ├── Issue
    │           │   │   │   │   ├── ConsideredRisky.php
    │           │   │   │   │   ├── ConsideredRiskySubscriber.php
    │           │   │   │   │   ├── DeprecationTriggered.php
    │           │   │   │   │   ├── DeprecationTriggeredSubscriber.php
    │           │   │   │   │   ├── ErrorTriggered.php
    │           │   │   │   │   ├── ErrorTriggeredSubscriber.php
    │           │   │   │   │   ├── NoticeTriggered.php
    │           │   │   │   │   ├── NoticeTriggeredSubscriber.php
    │           │   │   │   │   ├── PhpDeprecationTriggered.php
    │           │   │   │   │   ├── PhpDeprecationTriggeredSubscriber.php
    │           │   │   │   │   ├── PhpNoticeTriggered.php
    │           │   │   │   │   ├── PhpNoticeTriggeredSubscriber.php
    │           │   │   │   │   ├── PhpWarningTriggered.php
    │           │   │   │   │   ├── PhpWarningTriggeredSubscriber.php
    │           │   │   │   │   ├── PhpunitDeprecationTriggered.php
    │           │   │   │   │   ├── PhpunitDeprecationTriggeredSubscriber.php
    │           │   │   │   │   ├── PhpunitErrorTriggered.php
    │           │   │   │   │   ├── PhpunitErrorTriggeredSubscriber.php
    │           │   │   │   │   ├── PhpunitWarningTriggered.php
    │           │   │   │   │   ├── PhpunitWarningTriggeredSubscriber.php
    │           │   │   │   │   ├── WarningTriggered.php
    │           │   │   │   │   └── WarningTriggeredSubscriber.php
    │           │   │   │   ├── Lifecycle
    │           │   │   │   │   ├── DataProviderMethodCalled.php
    │           │   │   │   │   ├── DataProviderMethodCalledSubscriber.php
    │           │   │   │   │   ├── DataProviderMethodFinished.php
    │           │   │   │   │   ├── DataProviderMethodFinishedSubscriber.php
    │           │   │   │   │   ├── Finished.php
    │           │   │   │   │   ├── FinishedSubscriber.php
    │           │   │   │   │   ├── PreparationFailed.php
    │           │   │   │   │   ├── PreparationFailedSubscriber.php
    │           │   │   │   │   ├── PreparationStarted.php
    │           │   │   │   │   ├── PreparationStartedSubscriber.php
    │           │   │   │   │   ├── Prepared.php
    │           │   │   │   │   └── PreparedSubscriber.php
    │           │   │   │   ├── Outcome
    │           │   │   │   │   ├── Errored.php
    │           │   │   │   │   ├── ErroredSubscriber.php
    │           │   │   │   │   ├── Failed.php
    │           │   │   │   │   ├── FailedSubscriber.php
    │           │   │   │   │   ├── MarkedIncomplete.php
    │           │   │   │   │   ├── MarkedIncompleteSubscriber.php
    │           │   │   │   │   ├── Passed.php
    │           │   │   │   │   ├── PassedSubscriber.php
    │           │   │   │   │   ├── Skipped.php
    │           │   │   │   │   └── SkippedSubscriber.php
    │           │   │   │   ├── PrintedUnexpectedOutput.php
    │           │   │   │   ├── PrintedUnexpectedOutputSubscriber.php
    │           │   │   │   └── TestDouble
    │           │   │   │       ├── MockObjectCreated.php
    │           │   │   │       ├── MockObjectCreatedSubscriber.php
    │           │   │   │       ├── MockObjectForAbstractClassCreated.php
    │           │   │   │       ├── MockObjectForAbstractClassCreatedSubscriber.php
    │           │   │   │       ├── MockObjectForIntersectionOfInterfacesCreated.php
    │           │   │   │       ├── MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
    │           │   │   │       ├── MockObjectForTraitCreated.php
    │           │   │   │       ├── MockObjectForTraitCreatedSubscriber.php
    │           │   │   │       ├── MockObjectFromWsdlCreated.php
    │           │   │   │       ├── MockObjectFromWsdlCreatedSubscriber.php
    │           │   │   │       ├── PartialMockObjectCreated.php
    │           │   │   │       ├── PartialMockObjectCreatedSubscriber.php
    │           │   │   │       ├── TestProxyCreated.php
    │           │   │   │       ├── TestProxyCreatedSubscriber.php
    │           │   │   │       ├── TestStubCreated.php
    │           │   │   │       ├── TestStubCreatedSubscriber.php
    │           │   │   │       ├── TestStubForIntersectionOfInterfacesCreated.php
    │           │   │   │       └── TestStubForIntersectionOfInterfacesCreatedSubscriber.php
    │           │   │   ├── TestRunner
    │           │   │   │   ├── BootstrapFinished.php
    │           │   │   │   ├── BootstrapFinishedSubscriber.php
    │           │   │   │   ├── ChildProcessFinished.php
    │           │   │   │   ├── ChildProcessFinishedSubscriber.php
    │           │   │   │   ├── ChildProcessStarted.php
    │           │   │   │   ├── ChildProcessStartedSubscriber.php
    │           │   │   │   ├── Configured.php
    │           │   │   │   ├── ConfiguredSubscriber.php
    │           │   │   │   ├── DeprecationTriggered.php
    │           │   │   │   ├── DeprecationTriggeredSubscriber.php
    │           │   │   │   ├── EventFacadeSealed.php
    │           │   │   │   ├── EventFacadeSealedSubscriber.php
    │           │   │   │   ├── ExecutionAborted.php
    │           │   │   │   ├── ExecutionAbortedSubscriber.php
    │           │   │   │   ├── ExecutionFinished.php
    │           │   │   │   ├── ExecutionFinishedSubscriber.php
    │           │   │   │   ├── ExecutionStarted.php
    │           │   │   │   ├── ExecutionStartedSubscriber.php
    │           │   │   │   ├── ExtensionBootstrapped.php
    │           │   │   │   ├── ExtensionBootstrappedSubscriber.php
    │           │   │   │   ├── ExtensionLoadedFromPhar.php
    │           │   │   │   ├── ExtensionLoadedFromPharSubscriber.php
    │           │   │   │   ├── Finished.php
    │           │   │   │   ├── FinishedSubscriber.php
    │           │   │   │   ├── GarbageCollectionDisabled.php
    │           │   │   │   ├── GarbageCollectionDisabledSubscriber.php
    │           │   │   │   ├── GarbageCollectionEnabled.php
    │           │   │   │   ├── GarbageCollectionEnabledSubscriber.php
    │           │   │   │   ├── GarbageCollectionTriggered.php
    │           │   │   │   ├── GarbageCollectionTriggeredSubscriber.php
    │           │   │   │   ├── Started.php
    │           │   │   │   ├── StartedSubscriber.php
    │           │   │   │   ├── WarningTriggered.php
    │           │   │   │   └── WarningTriggeredSubscriber.php
    │           │   │   └── TestSuite
    │           │   │       ├── Filtered.php
    │           │   │       ├── FilteredSubscriber.php
    │           │   │       ├── Finished.php
    │           │   │       ├── FinishedSubscriber.php
    │           │   │       ├── Loaded.php
    │           │   │       ├── LoadedSubscriber.php
    │           │   │       ├── Skipped.php
    │           │   │       ├── SkippedSubscriber.php
    │           │   │       ├── Sorted.php
    │           │   │       ├── SortedSubscriber.php
    │           │   │       ├── Started.php
    │           │   │       └── StartedSubscriber.php
    │           │   ├── Exception
    │           │   │   ├── EventAlreadyAssignedException.php
    │           │   │   ├── EventFacadeIsSealedException.php
    │           │   │   ├── Exception.php
    │           │   │   ├── InvalidArgumentException.php
    │           │   │   ├── InvalidEventException.php
    │           │   │   ├── InvalidSubscriberException.php
    │           │   │   ├── MapError.php
    │           │   │   ├── NoComparisonFailureException.php
    │           │   │   ├── NoDataSetFromDataProviderException.php
    │           │   │   ├── NoPreviousThrowableException.php
    │           │   │   ├── NoTestCaseObjectOnCallStackException.php
    │           │   │   ├── RuntimeException.php
    │           │   │   ├── SubscriberTypeAlreadyRegisteredException.php
    │           │   │   ├── UnknownEventException.php
    │           │   │   ├── UnknownEventTypeException.php
    │           │   │   ├── UnknownSubscriberException.php
    │           │   │   └── UnknownSubscriberTypeException.php
    │           │   ├── Facade.php
    │           │   ├── Subscriber.php
    │           │   ├── Tracer.php
    │           │   ├── TypeMap.php
    │           │   └── Value
    │           │       ├── ClassMethod.php
    │           │       ├── ComparisonFailure.php
    │           │       ├── ComparisonFailureBuilder.php
    │           │       ├── Runtime
    │           │       │   ├── OperatingSystem.php
    │           │       │   ├── PHP.php
    │           │       │   ├── PHPUnit.php
    │           │       │   └── Runtime.php
    │           │       ├── Telemetry
    │           │       │   ├── Duration.php
    │           │       │   ├── GarbageCollectorStatus.php
    │           │       │   ├── GarbageCollectorStatusProvider.php
    │           │       │   ├── HRTime.php
    │           │       │   ├── Info.php
    │           │       │   ├── MemoryMeter.php
    │           │       │   ├── MemoryUsage.php
    │           │       │   ├── Php81GarbageCollectorStatusProvider.php
    │           │       │   ├── Php83GarbageCollectorStatusProvider.php
    │           │       │   ├── Snapshot.php
    │           │       │   ├── StopWatch.php
    │           │       │   ├── System.php
    │           │       │   ├── SystemMemoryMeter.php
    │           │       │   ├── SystemStopWatch.php
    │           │       │   └── SystemStopWatchWithOffset.php
    │           │       ├── Test
    │           │       │   ├── Issue
    │           │       │   │   ├── DirectTrigger.php
    │           │       │   │   ├── IndirectTrigger.php
    │           │       │   │   ├── IssueTrigger.php
    │           │       │   │   ├── SelfTrigger.php
    │           │       │   │   ├── TestTrigger.php
    │           │       │   │   └── UnknownTrigger.php
    │           │       │   ├── Phpt.php
    │           │       │   ├── Test.php
    │           │       │   ├── TestCollection.php
    │           │       │   ├── TestCollectionIterator.php
    │           │       │   ├── TestData
    │           │       │   │   ├── DataFromDataProvider.php
    │           │       │   │   ├── DataFromTestDependency.php
    │           │       │   │   ├── TestData.php
    │           │       │   │   ├── TestDataCollection.php
    │           │       │   │   └── TestDataCollectionIterator.php
    │           │       │   ├── TestDox.php
    │           │       │   ├── TestDoxBuilder.php
    │           │       │   ├── TestMethod.php
    │           │       │   └── TestMethodBuilder.php
    │           │       ├── TestSuite
    │           │       │   ├── TestSuite.php
    │           │       │   ├── TestSuiteBuilder.php
    │           │       │   ├── TestSuiteForTestClass.php
    │           │       │   ├── TestSuiteForTestMethodWithDataProvider.php
    │           │       │   └── TestSuiteWithName.php
    │           │       ├── Throwable.php
    │           │       └── ThrowableBuilder.php
    │           ├── Exception.php
    │           ├── Framework
    │           │   ├── Assert
    │           │   │   └── Functions.php
    │           │   ├── Assert.php
    │           │   ├── Attributes
    │           │   │   ├── After.php
    │           │   │   ├── AfterClass.php
    │           │   │   ├── BackupGlobals.php
    │           │   │   ├── BackupStaticProperties.php
    │           │   │   ├── Before.php
    │           │   │   ├── BeforeClass.php
    │           │   │   ├── CoversClass.php
    │           │   │   ├── CoversFunction.php
    │           │   │   ├── CoversMethod.php
    │           │   │   ├── CoversNothing.php
    │           │   │   ├── CoversTrait.php
    │           │   │   ├── DataProvider.php
    │           │   │   ├── DataProviderExternal.php
    │           │   │   ├── Depends.php
    │           │   │   ├── DependsExternal.php
    │           │   │   ├── DependsExternalUsingDeepClone.php
    │           │   │   ├── DependsExternalUsingShallowClone.php
    │           │   │   ├── DependsOnClass.php
    │           │   │   ├── DependsOnClassUsingDeepClone.php
    │           │   │   ├── DependsOnClassUsingShallowClone.php
    │           │   │   ├── DependsUsingDeepClone.php
    │           │   │   ├── DependsUsingShallowClone.php
    │           │   │   ├── DisableReturnValueGenerationForTestDoubles.php
    │           │   │   ├── DoesNotPerformAssertions.php
    │           │   │   ├── ExcludeGlobalVariableFromBackup.php
    │           │   │   ├── ExcludeStaticPropertyFromBackup.php
    │           │   │   ├── Group.php
    │           │   │   ├── IgnoreDeprecations.php
    │           │   │   ├── IgnorePhpunitDeprecations.php
    │           │   │   ├── Large.php
    │           │   │   ├── Medium.php
    │           │   │   ├── PostCondition.php
    │           │   │   ├── PreCondition.php
    │           │   │   ├── PreserveGlobalState.php
    │           │   │   ├── RequiresFunction.php
    │           │   │   ├── RequiresMethod.php
    │           │   │   ├── RequiresOperatingSystem.php
    │           │   │   ├── RequiresOperatingSystemFamily.php
    │           │   │   ├── RequiresPhp.php
    │           │   │   ├── RequiresPhpExtension.php
    │           │   │   ├── RequiresPhpunit.php
    │           │   │   ├── RequiresPhpunitExtension.php
    │           │   │   ├── RequiresSetting.php
    │           │   │   ├── RunClassInSeparateProcess.php
    │           │   │   ├── RunInSeparateProcess.php
    │           │   │   ├── RunTestsInSeparateProcesses.php
    │           │   │   ├── Small.php
    │           │   │   ├── Test.php
    │           │   │   ├── TestDox.php
    │           │   │   ├── TestWith.php
    │           │   │   ├── TestWithJson.php
    │           │   │   ├── Ticket.php
    │           │   │   ├── UsesClass.php
    │           │   │   ├── UsesFunction.php
    │           │   │   ├── UsesMethod.php
    │           │   │   ├── UsesTrait.php
    │           │   │   └── WithoutErrorHandler.php
    │           │   ├── Constraint
    │           │   │   ├── Boolean
    │           │   │   │   ├── IsFalse.php
    │           │   │   │   └── IsTrue.php
    │           │   │   ├── Callback.php
    │           │   │   ├── Cardinality
    │           │   │   │   ├── Count.php
    │           │   │   │   ├── GreaterThan.php
    │           │   │   │   ├── IsEmpty.php
    │           │   │   │   ├── LessThan.php
    │           │   │   │   └── SameSize.php
    │           │   │   ├── Constraint.php
    │           │   │   ├── Equality
    │           │   │   │   ├── IsEqual.php
    │           │   │   │   ├── IsEqualCanonicalizing.php
    │           │   │   │   ├── IsEqualIgnoringCase.php
    │           │   │   │   └── IsEqualWithDelta.php
    │           │   │   ├── Exception
    │           │   │   │   ├── Exception.php
    │           │   │   │   ├── ExceptionCode.php
    │           │   │   │   ├── ExceptionMessageIsOrContains.php
    │           │   │   │   └── ExceptionMessageMatchesRegularExpression.php
    │           │   │   ├── Filesystem
    │           │   │   │   ├── DirectoryExists.php
    │           │   │   │   ├── FileExists.php
    │           │   │   │   ├── IsReadable.php
    │           │   │   │   └── IsWritable.php
    │           │   │   ├── IsAnything.php
    │           │   │   ├── IsIdentical.php
    │           │   │   ├── JsonMatches.php
    │           │   │   ├── Math
    │           │   │   │   ├── IsFinite.php
    │           │   │   │   ├── IsInfinite.php
    │           │   │   │   └── IsNan.php
    │           │   │   ├── Object
    │           │   │   │   ├── ObjectEquals.php
    │           │   │   │   └── ObjectHasProperty.php
    │           │   │   ├── Operator
    │           │   │   │   ├── BinaryOperator.php
    │           │   │   │   ├── LogicalAnd.php
    │           │   │   │   ├── LogicalNot.php
    │           │   │   │   ├── LogicalOr.php
    │           │   │   │   ├── LogicalXor.php
    │           │   │   │   ├── Operator.php
    │           │   │   │   └── UnaryOperator.php
    │           │   │   ├── String
    │           │   │   │   ├── IsJson.php
    │           │   │   │   ├── RegularExpression.php
    │           │   │   │   ├── StringContains.php
    │           │   │   │   ├── StringEndsWith.php
    │           │   │   │   ├── StringEqualsStringIgnoringLineEndings.php
    │           │   │   │   ├── StringMatchesFormatDescription.php
    │           │   │   │   └── StringStartsWith.php
    │           │   │   ├── Traversable
    │           │   │   │   ├── ArrayHasKey.php
    │           │   │   │   ├── IsList.php
    │           │   │   │   ├── TraversableContains.php
    │           │   │   │   ├── TraversableContainsEqual.php
    │           │   │   │   ├── TraversableContainsIdentical.php
    │           │   │   │   └── TraversableContainsOnly.php
    │           │   │   └── Type
    │           │   │       ├── IsInstanceOf.php
    │           │   │       ├── IsNull.php
    │           │   │       └── IsType.php
    │           │   ├── DataProviderTestSuite.php
    │           │   ├── Exception
    │           │   │   ├── AssertionFailedError.php
    │           │   │   ├── CodeCoverageException.php
    │           │   │   ├── EmptyStringException.php
    │           │   │   ├── Exception.php
    │           │   │   ├── ExpectationFailedException.php
    │           │   │   ├── GeneratorNotSupportedException.php
    │           │   │   ├── Incomplete
    │           │   │   │   ├── IncompleteTest.php
    │           │   │   │   └── IncompleteTestError.php
    │           │   │   ├── InvalidArgumentException.php
    │           │   │   ├── InvalidCoversTargetException.php
    │           │   │   ├── InvalidDataProviderException.php
    │           │   │   ├── InvalidDependencyException.php
    │           │   │   ├── NoChildTestSuiteException.php
    │           │   │   ├── ObjectEquals
    │           │   │   │   ├── ActualValueIsNotAnObjectException.php
    │           │   │   │   ├── ComparisonMethodDoesNotAcceptParameterTypeException.php
    │           │   │   │   ├── ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
    │           │   │   │   ├── ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
    │           │   │   │   ├── ComparisonMethodDoesNotDeclareParameterTypeException.php
    │           │   │   │   └── ComparisonMethodDoesNotExistException.php
    │           │   │   ├── PhptAssertionFailedError.php
    │           │   │   ├── ProcessIsolationException.php
    │           │   │   ├── Skipped
    │           │   │   │   ├── SkippedTest.php
    │           │   │   │   ├── SkippedTestSuiteError.php
    │           │   │   │   └── SkippedWithMessageException.php
    │           │   │   ├── UnknownClassOrInterfaceException.php
    │           │   │   └── UnknownTypeException.php
    │           │   ├── ExecutionOrderDependency.php
    │           │   ├── MockObject
    │           │   │   ├── ConfigurableMethod.php
    │           │   │   ├── Exception
    │           │   │   │   ├── BadMethodCallException.php
    │           │   │   │   ├── CannotCloneTestDoubleForReadonlyClassException.php
    │           │   │   │   ├── CannotUseOnlyMethodsException.php
    │           │   │   │   ├── Exception.php
    │           │   │   │   ├── IncompatibleReturnValueException.php
    │           │   │   │   ├── MatchBuilderNotFoundException.php
    │           │   │   │   ├── MatcherAlreadyRegisteredException.php
    │           │   │   │   ├── MethodCannotBeConfiguredException.php
    │           │   │   │   ├── MethodNameAlreadyConfiguredException.php
    │           │   │   │   ├── MethodNameNotConfiguredException.php
    │           │   │   │   ├── MethodParametersAlreadyConfiguredException.php
    │           │   │   │   ├── NeverReturningMethodException.php
    │           │   │   │   ├── NoMoreReturnValuesConfiguredException.php
    │           │   │   │   ├── ReturnValueNotConfiguredException.php
    │           │   │   │   └── RuntimeException.php
    │           │   │   ├── Generator
    │           │   │   │   ├── Exception
    │           │   │   │   │   ├── CannotUseAddMethodsException.php
    │           │   │   │   │   ├── ClassIsEnumerationException.php
    │           │   │   │   │   ├── ClassIsFinalException.php
    │           │   │   │   │   ├── DuplicateMethodException.php
    │           │   │   │   │   ├── Exception.php
    │           │   │   │   │   ├── InvalidMethodNameException.php
    │           │   │   │   │   ├── NameAlreadyInUseException.php
    │           │   │   │   │   ├── OriginalConstructorInvocationRequiredException.php
    │           │   │   │   │   ├── ReflectionException.php
    │           │   │   │   │   ├── RuntimeException.php
    │           │   │   │   │   ├── SoapExtensionNotAvailableException.php
    │           │   │   │   │   ├── UnknownClassException.php
    │           │   │   │   │   ├── UnknownInterfaceException.php
    │           │   │   │   │   ├── UnknownTraitException.php
    │           │   │   │   │   └── UnknownTypeException.php
    │           │   │   │   ├── Generator.php
    │           │   │   │   ├── HookedProperty.php
    │           │   │   │   ├── HookedPropertyGenerator.php
    │           │   │   │   ├── MockClass.php
    │           │   │   │   ├── MockMethod.php
    │           │   │   │   ├── MockMethodSet.php
    │           │   │   │   ├── MockTrait.php
    │           │   │   │   ├── MockType.php
    │           │   │   │   ├── TemplateLoader.php
    │           │   │   │   └── templates
    │           │   │   │       ├── deprecation.tpl
    │           │   │   │       ├── doubled_method.tpl
    │           │   │   │       ├── doubled_static_method.tpl
    │           │   │   │       ├── intersection.tpl
    │           │   │   │       ├── proxied_method.tpl
    │           │   │   │       ├── test_double_class.tpl
    │           │   │   │       ├── trait_class.tpl
    │           │   │   │       ├── wsdl_class.tpl
    │           │   │   │       └── wsdl_method.tpl
    │           │   │   ├── MockBuilder.php
    │           │   │   └── Runtime
    │           │   │       ├── Api
    │           │   │       │   ├── DoubledCloneMethod.php
    │           │   │       │   ├── ErrorCloneMethod.php
    │           │   │       │   ├── GeneratedAsMockObject.php
    │           │   │       │   ├── GeneratedAsTestStub.php
    │           │   │       │   ├── Method.php
    │           │   │       │   ├── MockObjectApi.php
    │           │   │       │   ├── MutableStubApi.php
    │           │   │       │   ├── ProxiedCloneMethod.php
    │           │   │       │   ├── StubApi.php
    │           │   │       │   └── TestDoubleState.php
    │           │   │       ├── Builder
    │           │   │       │   ├── Identity.php
    │           │   │       │   ├── InvocationMocker.php
    │           │   │       │   ├── InvocationStubber.php
    │           │   │       │   ├── MethodNameMatch.php
    │           │   │       │   ├── ParametersMatch.php
    │           │   │       │   └── Stub.php
    │           │   │       ├── Interface
    │           │   │       │   ├── MockObject.php
    │           │   │       │   ├── MockObjectInternal.php
    │           │   │       │   ├── Stub.php
    │           │   │       │   └── StubInternal.php
    │           │   │       ├── Invocation.php
    │           │   │       ├── InvocationHandler.php
    │           │   │       ├── Matcher.php
    │           │   │       ├── MethodNameConstraint.php
    │           │   │       ├── PropertyHook
    │           │   │       │   ├── PropertyGetHook.php
    │           │   │       │   ├── PropertyHook.php
    │           │   │       │   └── PropertySetHook.php
    │           │   │       ├── ReturnValueGenerator.php
    │           │   │       ├── Rule
    │           │   │       │   ├── AnyInvokedCount.php
    │           │   │       │   ├── AnyParameters.php
    │           │   │       │   ├── InvocationOrder.php
    │           │   │       │   ├── InvokedAtLeastCount.php
    │           │   │       │   ├── InvokedAtLeastOnce.php
    │           │   │       │   ├── InvokedAtMostCount.php
    │           │   │       │   ├── InvokedCount.php
    │           │   │       │   ├── MethodName.php
    │           │   │       │   ├── Parameters.php
    │           │   │       │   └── ParametersRule.php
    │           │   │       └── Stub
    │           │   │           ├── ConsecutiveCalls.php
    │           │   │           ├── Exception.php
    │           │   │           ├── ReturnArgument.php
    │           │   │           ├── ReturnCallback.php
    │           │   │           ├── ReturnReference.php
    │           │   │           ├── ReturnSelf.php
    │           │   │           ├── ReturnStub.php
    │           │   │           ├── ReturnValueMap.php
    │           │   │           └── Stub.php
    │           │   ├── NativeType.php
    │           │   ├── Reorderable.php
    │           │   ├── SelfDescribing.php
    │           │   ├── Test.php
    │           │   ├── TestBuilder.php
    │           │   ├── TestCase.php
    │           │   ├── TestRunner
    │           │   │   ├── ChildProcessResultProcessor.php
    │           │   │   ├── IsolatedTestRunner.php
    │           │   │   ├── IsolatedTestRunnerRegistry.php
    │           │   │   ├── SeparateProcessTestRunner.php
    │           │   │   ├── TestRunner.php
    │           │   │   └── templates
    │           │   │       ├── class.tpl
    │           │   │       └── method.tpl
    │           │   ├── TestSize
    │           │   │   ├── Known.php
    │           │   │   ├── Large.php
    │           │   │   ├── Medium.php
    │           │   │   ├── Small.php
    │           │   │   ├── TestSize.php
    │           │   │   └── Unknown.php
    │           │   ├── TestStatus
    │           │   │   ├── Deprecation.php
    │           │   │   ├── Error.php
    │           │   │   ├── Failure.php
    │           │   │   ├── Incomplete.php
    │           │   │   ├── Known.php
    │           │   │   ├── Notice.php
    │           │   │   ├── Risky.php
    │           │   │   ├── Skipped.php
    │           │   │   ├── Success.php
    │           │   │   ├── TestStatus.php
    │           │   │   ├── Unknown.php
    │           │   │   └── Warning.php
    │           │   ├── TestSuite.php
    │           │   └── TestSuiteIterator.php
    │           ├── Logging
    │           │   ├── EventLogger.php
    │           │   ├── JUnit
    │           │   │   ├── JunitXmlLogger.php
    │           │   │   └── Subscriber
    │           │   │       ├── Subscriber.php
    │           │   │       ├── TestErroredSubscriber.php
    │           │   │       ├── TestFailedSubscriber.php
    │           │   │       ├── TestFinishedSubscriber.php
    │           │   │       ├── TestMarkedIncompleteSubscriber.php
    │           │   │       ├── TestPreparationFailedSubscriber.php
    │           │   │       ├── TestPreparationStartedSubscriber.php
    │           │   │       ├── TestPreparedSubscriber.php
    │           │   │       ├── TestPrintedUnexpectedOutputSubscriber.php
    │           │   │       ├── TestRunnerExecutionFinishedSubscriber.php
    │           │   │       ├── TestSkippedSubscriber.php
    │           │   │       ├── TestSuiteFinishedSubscriber.php
    │           │   │       └── TestSuiteStartedSubscriber.php
    │           │   ├── TeamCity
    │           │   │   ├── Subscriber
    │           │   │   │   ├── Subscriber.php
    │           │   │   │   ├── TestConsideredRiskySubscriber.php
    │           │   │   │   ├── TestErroredSubscriber.php
    │           │   │   │   ├── TestFailedSubscriber.php
    │           │   │   │   ├── TestFinishedSubscriber.php
    │           │   │   │   ├── TestMarkedIncompleteSubscriber.php
    │           │   │   │   ├── TestPreparedSubscriber.php
    │           │   │   │   ├── TestRunnerExecutionFinishedSubscriber.php
    │           │   │   │   ├── TestSkippedSubscriber.php
    │           │   │   │   ├── TestSuiteBeforeFirstTestMethodErroredSubscriber.php
    │           │   │   │   ├── TestSuiteFinishedSubscriber.php
    │           │   │   │   ├── TestSuiteSkippedSubscriber.php
    │           │   │   │   └── TestSuiteStartedSubscriber.php
    │           │   │   └── TeamCityLogger.php
    │           │   └── TestDox
    │           │       ├── HtmlRenderer.php
    │           │       ├── NamePrettifier.php
    │           │       ├── PlainTextRenderer.php
    │           │       └── TestResult
    │           │           ├── Subscriber
    │           │           │   ├── Subscriber.php
    │           │           │   ├── TestConsideredRiskySubscriber.php
    │           │           │   ├── TestErroredSubscriber.php
    │           │           │   ├── TestFailedSubscriber.php
    │           │           │   ├── TestFinishedSubscriber.php
    │           │           │   ├── TestMarkedIncompleteSubscriber.php
    │           │           │   ├── TestPassedSubscriber.php
    │           │           │   ├── TestPreparedSubscriber.php
    │           │           │   ├── TestSkippedSubscriber.php
    │           │           │   ├── TestTriggeredDeprecationSubscriber.php
    │           │           │   ├── TestTriggeredNoticeSubscriber.php
    │           │           │   ├── TestTriggeredPhpDeprecationSubscriber.php
    │           │           │   ├── TestTriggeredPhpNoticeSubscriber.php
    │           │           │   ├── TestTriggeredPhpWarningSubscriber.php
    │           │           │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
    │           │           │   ├── TestTriggeredPhpunitErrorSubscriber.php
    │           │           │   ├── TestTriggeredPhpunitWarningSubscriber.php
    │           │           │   └── TestTriggeredWarningSubscriber.php
    │           │           ├── TestResult.php
    │           │           ├── TestResultCollection.php
    │           │           ├── TestResultCollectionIterator.php
    │           │           └── TestResultCollector.php
    │           ├── Metadata
    │           │   ├── After.php
    │           │   ├── AfterClass.php
    │           │   ├── Api
    │           │   │   ├── CodeCoverage.php
    │           │   │   ├── DataProvider.php
    │           │   │   ├── Dependencies.php
    │           │   │   ├── Groups.php
    │           │   │   ├── HookMethods.php
    │           │   │   └── Requirements.php
    │           │   ├── BackupGlobals.php
    │           │   ├── BackupStaticProperties.php
    │           │   ├── Before.php
    │           │   ├── BeforeClass.php
    │           │   ├── Covers.php
    │           │   ├── CoversClass.php
    │           │   ├── CoversDefaultClass.php
    │           │   ├── CoversFunction.php
    │           │   ├── CoversMethod.php
    │           │   ├── CoversNothing.php
    │           │   ├── CoversTrait.php
    │           │   ├── DataProvider.php
    │           │   ├── DependsOnClass.php
    │           │   ├── DependsOnMethod.php
    │           │   ├── DisableReturnValueGenerationForTestDoubles.php
    │           │   ├── DoesNotPerformAssertions.php
    │           │   ├── Exception
    │           │   │   ├── AnnotationsAreNotSupportedForInternalClassesException.php
    │           │   │   ├── Exception.php
    │           │   │   ├── InvalidAttributeException.php
    │           │   │   ├── InvalidVersionRequirementException.php
    │           │   │   ├── NoVersionRequirementException.php
    │           │   │   └── ReflectionException.php
    │           │   ├── ExcludeGlobalVariableFromBackup.php
    │           │   ├── ExcludeStaticPropertyFromBackup.php
    │           │   ├── Group.php
    │           │   ├── IgnoreDeprecations.php
    │           │   ├── IgnorePhpunitDeprecations.php
    │           │   ├── Metadata.php
    │           │   ├── MetadataCollection.php
    │           │   ├── MetadataCollectionIterator.php
    │           │   ├── Parser
    │           │   │   ├── Annotation
    │           │   │   │   ├── DocBlock.php
    │           │   │   │   └── Registry.php
    │           │   │   ├── AnnotationParser.php
    │           │   │   ├── AttributeParser.php
    │           │   │   ├── CachingParser.php
    │           │   │   ├── Parser.php
    │           │   │   ├── ParserChain.php
    │           │   │   └── Registry.php
    │           │   ├── PostCondition.php
    │           │   ├── PreCondition.php
    │           │   ├── PreserveGlobalState.php
    │           │   ├── RequiresFunction.php
    │           │   ├── RequiresMethod.php
    │           │   ├── RequiresOperatingSystem.php
    │           │   ├── RequiresOperatingSystemFamily.php
    │           │   ├── RequiresPhp.php
    │           │   ├── RequiresPhpExtension.php
    │           │   ├── RequiresPhpunit.php
    │           │   ├── RequiresPhpunitExtension.php
    │           │   ├── RequiresSetting.php
    │           │   ├── RunClassInSeparateProcess.php
    │           │   ├── RunInSeparateProcess.php
    │           │   ├── RunTestsInSeparateProcesses.php
    │           │   ├── Test.php
    │           │   ├── TestDox.php
    │           │   ├── TestWith.php
    │           │   ├── Uses.php
    │           │   ├── UsesClass.php
    │           │   ├── UsesDefaultClass.php
    │           │   ├── UsesFunction.php
    │           │   ├── UsesMethod.php
    │           │   ├── UsesTrait.php
    │           │   ├── Version
    │           │   │   ├── ComparisonRequirement.php
    │           │   │   ├── ConstraintRequirement.php
    │           │   │   └── Requirement.php
    │           │   └── WithoutErrorHandler.php
    │           ├── Runner
    │           │   ├── Baseline
    │           │   │   ├── Baseline.php
    │           │   │   ├── Exception
    │           │   │   │   ├── CannotLoadBaselineException.php
    │           │   │   │   └── FileDoesNotHaveLineException.php
    │           │   │   ├── Generator.php
    │           │   │   ├── Issue.php
    │           │   │   ├── Reader.php
    │           │   │   ├── RelativePathCalculator.php
    │           │   │   ├── Subscriber
    │           │   │   │   ├── Subscriber.php
    │           │   │   │   ├── TestTriggeredDeprecationSubscriber.php
    │           │   │   │   ├── TestTriggeredNoticeSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
    │           │   │   │   └── TestTriggeredWarningSubscriber.php
    │           │   │   └── Writer.php
    │           │   ├── CodeCoverage.php
    │           │   ├── DeprecationCollector
    │           │   │   ├── Collector.php
    │           │   │   ├── Facade.php
    │           │   │   └── Subscriber
    │           │   │       ├── Subscriber.php
    │           │   │       ├── TestPreparedSubscriber.php
    │           │   │       └── TestTriggeredDeprecationSubscriber.php
    │           │   ├── ErrorHandler.php
    │           │   ├── Exception
    │           │   │   ├── ClassCannotBeFoundException.php
    │           │   │   ├── ClassDoesNotExtendTestCaseException.php
    │           │   │   ├── ClassIsAbstractException.php
    │           │   │   ├── DirectoryDoesNotExistException.php
    │           │   │   ├── ErrorException.php
    │           │   │   ├── Exception.php
    │           │   │   ├── FileDoesNotExistException.php
    │           │   │   ├── InvalidOrderException.php
    │           │   │   ├── InvalidPhptFileException.php
    │           │   │   ├── ParameterDoesNotExistException.php
    │           │   │   ├── PhptExternalFileCannotBeLoadedException.php
    │           │   │   └── UnsupportedPhptSectionException.php
    │           │   ├── Extension
    │           │   │   ├── Extension.php
    │           │   │   ├── ExtensionBootstrapper.php
    │           │   │   ├── Facade.php
    │           │   │   ├── ParameterCollection.php
    │           │   │   └── PharLoader.php
    │           │   ├── Filter
    │           │   │   ├── ExcludeGroupFilterIterator.php
    │           │   │   ├── ExcludeNameFilterIterator.php
    │           │   │   ├── Factory.php
    │           │   │   ├── GroupFilterIterator.php
    │           │   │   ├── IncludeGroupFilterIterator.php
    │           │   │   ├── IncludeNameFilterIterator.php
    │           │   │   ├── NameFilterIterator.php
    │           │   │   └── TestIdFilterIterator.php
    │           │   ├── GarbageCollection
    │           │   │   ├── GarbageCollectionHandler.php
    │           │   │   └── Subscriber
    │           │   │       ├── ExecutionFinishedSubscriber.php
    │           │   │       ├── ExecutionStartedSubscriber.php
    │           │   │       ├── Subscriber.php
    │           │   │       └── TestFinishedSubscriber.php
    │           │   ├── HookMethod
    │           │   │   ├── HookMethod.php
    │           │   │   └── HookMethodCollection.php
    │           │   ├── IssueFilter.php
    │           │   ├── PHPT
    │           │   │   ├── PhptTestCase.php
    │           │   │   └── templates
    │           │   │       └── phpt.tpl
    │           │   ├── ResultCache
    │           │   │   ├── DefaultResultCache.php
    │           │   │   ├── NullResultCache.php
    │           │   │   ├── ResultCache.php
    │           │   │   ├── ResultCacheHandler.php
    │           │   │   ├── ResultCacheId.php
    │           │   │   └── Subscriber
    │           │   │       ├── Subscriber.php
    │           │   │       ├── TestConsideredRiskySubscriber.php
    │           │   │       ├── TestErroredSubscriber.php
    │           │   │       ├── TestFailedSubscriber.php
    │           │   │       ├── TestFinishedSubscriber.php
    │           │   │       ├── TestMarkedIncompleteSubscriber.php
    │           │   │       ├── TestPreparedSubscriber.php
    │           │   │       ├── TestSkippedSubscriber.php
    │           │   │       ├── TestSuiteFinishedSubscriber.php
    │           │   │       └── TestSuiteStartedSubscriber.php
    │           │   ├── TestResult
    │           │   │   ├── Collector.php
    │           │   │   ├── Facade.php
    │           │   │   ├── Issue.php
    │           │   │   ├── PassedTests.php
    │           │   │   ├── Subscriber
    │           │   │   │   ├── AfterTestClassMethodErroredSubscriber.php
    │           │   │   │   ├── BeforeTestClassMethodErroredSubscriber.php
    │           │   │   │   ├── ExecutionStartedSubscriber.php
    │           │   │   │   ├── Subscriber.php
    │           │   │   │   ├── TestConsideredRiskySubscriber.php
    │           │   │   │   ├── TestErroredSubscriber.php
    │           │   │   │   ├── TestFailedSubscriber.php
    │           │   │   │   ├── TestFinishedSubscriber.php
    │           │   │   │   ├── TestMarkedIncompleteSubscriber.php
    │           │   │   │   ├── TestPreparedSubscriber.php
    │           │   │   │   ├── TestRunnerTriggeredDeprecationSubscriber.php
    │           │   │   │   ├── TestRunnerTriggeredWarningSubscriber.php
    │           │   │   │   ├── TestSkippedSubscriber.php
    │           │   │   │   ├── TestSuiteFinishedSubscriber.php
    │           │   │   │   ├── TestSuiteSkippedSubscriber.php
    │           │   │   │   ├── TestSuiteStartedSubscriber.php
    │           │   │   │   ├── TestTriggeredDeprecationSubscriber.php
    │           │   │   │   ├── TestTriggeredErrorSubscriber.php
    │           │   │   │   ├── TestTriggeredNoticeSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpunitErrorSubscriber.php
    │           │   │   │   ├── TestTriggeredPhpunitWarningSubscriber.php
    │           │   │   │   └── TestTriggeredWarningSubscriber.php
    │           │   │   └── TestResult.php
    │           │   ├── TestSuiteLoader.php
    │           │   ├── TestSuiteSorter.php
    │           │   └── Version.php
    │           ├── TextUI
    │           │   ├── Application.php
    │           │   ├── Command
    │           │   │   ├── Command.php
    │           │   │   ├── Commands
    │           │   │   │   ├── AtLeastVersionCommand.php
    │           │   │   │   ├── GenerateConfigurationCommand.php
    │           │   │   │   ├── ListGroupsCommand.php
    │           │   │   │   ├── ListTestFilesCommand.php
    │           │   │   │   ├── ListTestSuitesCommand.php
    │           │   │   │   ├── ListTestsAsTextCommand.php
    │           │   │   │   ├── ListTestsAsXmlCommand.php
    │           │   │   │   ├── MigrateConfigurationCommand.php
    │           │   │   │   ├── ShowHelpCommand.php
    │           │   │   │   ├── ShowVersionCommand.php
    │           │   │   │   ├── VersionCheckCommand.php
    │           │   │   │   └── WarmCodeCoverageCacheCommand.php
    │           │   │   └── Result.php
    │           │   ├── Configuration
    │           │   │   ├── Builder.php
    │           │   │   ├── Cli
    │           │   │   │   ├── Builder.php
    │           │   │   │   ├── Configuration.php
    │           │   │   │   ├── Exception.php
    │           │   │   │   └── XmlConfigurationFileFinder.php
    │           │   │   ├── CodeCoverageFilterRegistry.php
    │           │   │   ├── Configuration.php
    │           │   │   ├── Exception
    │           │   │   │   ├── CannotFindSchemaException.php
    │           │   │   │   ├── CodeCoverageReportNotConfiguredException.php
    │           │   │   │   ├── ConfigurationCannotBeBuiltException.php
    │           │   │   │   ├── Exception.php
    │           │   │   │   ├── FilterNotConfiguredException.php
    │           │   │   │   ├── LoggingNotConfiguredException.php
    │           │   │   │   ├── NoBaselineException.php
    │           │   │   │   ├── NoBootstrapException.php
    │           │   │   │   ├── NoCacheDirectoryException.php
    │           │   │   │   ├── NoConfigurationFileException.php
    │           │   │   │   ├── NoCoverageCacheDirectoryException.php
    │           │   │   │   ├── NoCustomCssFileException.php
    │           │   │   │   ├── NoDefaultTestSuiteException.php
    │           │   │   │   ├── NoPharExtensionDirectoryException.php
    │           │   │   │   └── SpecificDeprecationToStopOnNotConfiguredException.php
    │           │   │   ├── Merger.php
    │           │   │   ├── PhpHandler.php
    │           │   │   ├── Registry.php
    │           │   │   ├── SourceFilter.php
    │           │   │   ├── SourceMapper.php
    │           │   │   ├── TestSuiteBuilder.php
    │           │   │   ├── Value
    │           │   │   │   ├── Constant.php
    │           │   │   │   ├── ConstantCollection.php
    │           │   │   │   ├── ConstantCollectionIterator.php
    │           │   │   │   ├── Directory.php
    │           │   │   │   ├── DirectoryCollection.php
    │           │   │   │   ├── DirectoryCollectionIterator.php
    │           │   │   │   ├── ExtensionBootstrap.php
    │           │   │   │   ├── ExtensionBootstrapCollection.php
    │           │   │   │   ├── ExtensionBootstrapCollectionIterator.php
    │           │   │   │   ├── File.php
    │           │   │   │   ├── FileCollection.php
    │           │   │   │   ├── FileCollectionIterator.php
    │           │   │   │   ├── FilterDirectory.php
    │           │   │   │   ├── FilterDirectoryCollection.php
    │           │   │   │   ├── FilterDirectoryCollectionIterator.php
    │           │   │   │   ├── Group.php
    │           │   │   │   ├── GroupCollection.php
    │           │   │   │   ├── GroupCollectionIterator.php
    │           │   │   │   ├── IniSetting.php
    │           │   │   │   ├── IniSettingCollection.php
    │           │   │   │   ├── IniSettingCollectionIterator.php
    │           │   │   │   ├── Php.php
    │           │   │   │   ├── Source.php
    │           │   │   │   ├── TestDirectory.php
    │           │   │   │   ├── TestDirectoryCollection.php
    │           │   │   │   ├── TestDirectoryCollectionIterator.php
    │           │   │   │   ├── TestFile.php
    │           │   │   │   ├── TestFileCollection.php
    │           │   │   │   ├── TestFileCollectionIterator.php
    │           │   │   │   ├── TestSuite.php
    │           │   │   │   ├── TestSuiteCollection.php
    │           │   │   │   ├── TestSuiteCollectionIterator.php
    │           │   │   │   ├── Variable.php
    │           │   │   │   ├── VariableCollection.php
    │           │   │   │   └── VariableCollectionIterator.php
    │           │   │   └── Xml
    │           │   │       ├── CodeCoverage
    │           │   │       │   ├── CodeCoverage.php
    │           │   │       │   └── Report
    │           │   │       │       ├── Clover.php
    │           │   │       │       ├── Cobertura.php
    │           │   │       │       ├── Crap4j.php
    │           │   │       │       ├── Html.php
    │           │   │       │       ├── Php.php
    │           │   │       │       ├── Text.php
    │           │   │       │       └── Xml.php
    │           │   │       ├── Configuration.php
    │           │   │       ├── DefaultConfiguration.php
    │           │   │       ├── Exception.php
    │           │   │       ├── Generator.php
    │           │   │       ├── Groups.php
    │           │   │       ├── LoadedFromFileConfiguration.php
    │           │   │       ├── Loader.php
    │           │   │       ├── Logging
    │           │   │       │   ├── Junit.php
    │           │   │       │   ├── Logging.php
    │           │   │       │   ├── TeamCity.php
    │           │   │       │   └── TestDox
    │           │   │       │       ├── Html.php
    │           │   │       │       └── Text.php
    │           │   │       ├── Migration
    │           │   │       │   ├── MigrationBuilder.php
    │           │   │       │   ├── MigrationException.php
    │           │   │       │   ├── Migrations
    │           │   │       │   │   ├── ConvertLogTypes.php
    │           │   │       │   │   ├── CoverageCloverToReport.php
    │           │   │       │   │   ├── CoverageCrap4jToReport.php
    │           │   │       │   │   ├── CoverageHtmlToReport.php
    │           │   │       │   │   ├── CoveragePhpToReport.php
    │           │   │       │   │   ├── CoverageTextToReport.php
    │           │   │       │   │   ├── CoverageXmlToReport.php
    │           │   │       │   │   ├── IntroduceCacheDirectoryAttribute.php
    │           │   │       │   │   ├── IntroduceCoverageElement.php
    │           │   │       │   │   ├── LogToReportMigration.php
    │           │   │       │   │   ├── Migration.php
    │           │   │       │   │   ├── MoveAttributesFromFilterWhitelistToCoverage.php
    │           │   │       │   │   ├── MoveAttributesFromRootToCoverage.php
    │           │   │       │   │   ├── MoveCoverageDirectoriesToSource.php
    │           │   │       │   │   ├── MoveWhitelistExcludesToCoverage.php
    │           │   │       │   │   ├── MoveWhitelistIncludesToCoverage.php
    │           │   │       │   │   ├── RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
    │           │   │       │   │   ├── RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
    │           │   │       │   │   ├── RemoveCacheResultFileAttribute.php
    │           │   │       │   │   ├── RemoveCacheTokensAttribute.php
    │           │   │       │   │   ├── RemoveConversionToExceptionsAttributes.php
    │           │   │       │   │   ├── RemoveCoverageElementCacheDirectoryAttribute.php
    │           │   │       │   │   ├── RemoveCoverageElementProcessUncoveredFilesAttribute.php
    │           │   │       │   │   ├── RemoveEmptyFilter.php
    │           │   │       │   │   ├── RemoveListeners.php
    │           │   │       │   │   ├── RemoveLogTypes.php
    │           │   │       │   │   ├── RemoveLoggingElements.php
    │           │   │       │   │   ├── RemoveNoInteractionAttribute.php
    │           │   │       │   │   ├── RemovePrinterAttributes.php
    │           │   │       │   │   ├── RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute.php
    │           │   │       │   │   ├── RemoveTestDoxGroupsElement.php
    │           │   │       │   │   ├── RemoveTestSuiteLoaderAttributes.php
    │           │   │       │   │   ├── RemoveVerboseAttribute.php
    │           │   │       │   │   ├── RenameBackupStaticAttributesAttribute.php
    │           │   │       │   │   ├── RenameBeStrictAboutCoversAnnotationAttribute.php
    │           │   │       │   │   ├── RenameForceCoversAnnotationAttribute.php
    │           │   │       │   │   ├── ReplaceRestrictDeprecationsWithIgnoreDeprecations.php
    │           │   │       │   │   └── UpdateSchemaLocation.php
    │           │   │       │   ├── Migrator.php
    │           │   │       │   └── SnapshotNodeList.php
    │           │   │       ├── PHPUnit.php
    │           │   │       ├── SchemaDetector
    │           │   │       │   ├── FailedSchemaDetectionResult.php
    │           │   │       │   ├── SchemaDetectionResult.php
    │           │   │       │   ├── SchemaDetector.php
    │           │   │       │   └── SuccessfulSchemaDetectionResult.php
    │           │   │       ├── SchemaFinder.php
    │           │   │       ├── TestSuiteMapper.php
    │           │   │       └── Validator
    │           │   │           ├── ValidationResult.php
    │           │   │           └── Validator.php
    │           │   ├── Exception
    │           │   │   ├── CannotOpenSocketException.php
    │           │   │   ├── Exception.php
    │           │   │   ├── InvalidSocketException.php
    │           │   │   ├── RuntimeException.php
    │           │   │   ├── TestDirectoryNotFoundException.php
    │           │   │   └── TestFileNotFoundException.php
    │           │   ├── Help.php
    │           │   ├── Output
    │           │   │   ├── Default
    │           │   │   │   ├── ProgressPrinter
    │           │   │   │   │   ├── ProgressPrinter.php
    │           │   │   │   │   └── Subscriber
    │           │   │   │   │       ├── BeforeTestClassMethodErroredSubscriber.php
    │           │   │   │   │       ├── Subscriber.php
    │           │   │   │   │       ├── TestConsideredRiskySubscriber.php
    │           │   │   │   │       ├── TestErroredSubscriber.php
    │           │   │   │   │       ├── TestFailedSubscriber.php
    │           │   │   │   │       ├── TestFinishedSubscriber.php
    │           │   │   │   │       ├── TestMarkedIncompleteSubscriber.php
    │           │   │   │   │       ├── TestPreparedSubscriber.php
    │           │   │   │   │       ├── TestRunnerExecutionStartedSubscriber.php
    │           │   │   │   │       ├── TestSkippedSubscriber.php
    │           │   │   │   │       ├── TestTriggeredDeprecationSubscriber.php
    │           │   │   │   │       ├── TestTriggeredErrorSubscriber.php
    │           │   │   │   │       ├── TestTriggeredNoticeSubscriber.php
    │           │   │   │   │       ├── TestTriggeredPhpDeprecationSubscriber.php
    │           │   │   │   │       ├── TestTriggeredPhpNoticeSubscriber.php
    │           │   │   │   │       ├── TestTriggeredPhpWarningSubscriber.php
    │           │   │   │   │       ├── TestTriggeredPhpunitDeprecationSubscriber.php
    │           │   │   │   │       ├── TestTriggeredPhpunitWarningSubscriber.php
    │           │   │   │   │       └── TestTriggeredWarningSubscriber.php
    │           │   │   │   ├── ResultPrinter.php
    │           │   │   │   └── UnexpectedOutputPrinter.php
    │           │   │   ├── Facade.php
    │           │   │   ├── Printer
    │           │   │   │   ├── DefaultPrinter.php
    │           │   │   │   ├── NullPrinter.php
    │           │   │   │   └── Printer.php
    │           │   │   ├── SummaryPrinter.php
    │           │   │   └── TestDox
    │           │   │       └── ResultPrinter.php
    │           │   ├── ShellExitCodeCalculator.php
    │           │   ├── TestRunner.php
    │           │   └── TestSuiteFilterProcessor.php
    │           └── Util
    │               ├── Cloner.php
    │               ├── Color.php
    │               ├── Exception
    │               │   ├── Exception.php
    │               │   ├── InvalidDirectoryException.php
    │               │   ├── InvalidJsonException.php
    │               │   ├── InvalidVersionOperatorException.php
    │               │   ├── PhpProcessException.php
    │               │   └── XmlException.php
    │               ├── ExcludeList.php
    │               ├── Exporter.php
    │               ├── Filesystem.php
    │               ├── Filter.php
    │               ├── GlobalState.php
    │               ├── Http
    │               │   ├── Downloader.php
    │               │   └── PhpDownloader.php
    │               ├── Json.php
    │               ├── PHP
    │               │   ├── DefaultJobRunner.php
    │               │   ├── Job.php
    │               │   ├── JobRunner.php
    │               │   ├── JobRunnerRegistry.php
    │               │   └── Result.php
    │               ├── Reflection.php
    │               ├── Test.php
    │               ├── ThrowableToStringMapper.php
    │               ├── VersionComparisonOperator.php
    │               └── Xml
    │                   ├── Loader.php
    │                   └── Xml.php
    ├── sebastian
    │   ├── cli-parser
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Parser.php
    │   │       └── exceptions
    │   │           ├── AmbiguousOptionException.php
    │   │           ├── Exception.php
    │   │           ├── OptionDoesNotAllowArgumentException.php
    │   │           ├── RequiredOptionArgumentMissingException.php
    │   │           └── UnknownOptionException.php
    │   ├── code-unit
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── ClassMethodUnit.php
    │   │       ├── ClassUnit.php
    │   │       ├── CodeUnit.php
    │   │       ├── CodeUnitCollection.php
    │   │       ├── CodeUnitCollectionIterator.php
    │   │       ├── FileUnit.php
    │   │       ├── FunctionUnit.php
    │   │       ├── InterfaceMethodUnit.php
    │   │       ├── InterfaceUnit.php
    │   │       ├── Mapper.php
    │   │       ├── TraitMethodUnit.php
    │   │       ├── TraitUnit.php
    │   │       └── exceptions
    │   │           ├── Exception.php
    │   │           ├── InvalidCodeUnitException.php
    │   │           ├── NoTraitException.php
    │   │           └── ReflectionException.php
    │   ├── code-unit-reverse-lookup
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Wizard.php
    │   ├── comparator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── ArrayComparator.php
    │   │       ├── Comparator.php
    │   │       ├── ComparisonFailure.php
    │   │       ├── DOMNodeComparator.php
    │   │       ├── DateTimeComparator.php
    │   │       ├── EnumerationComparator.php
    │   │       ├── ExceptionComparator.php
    │   │       ├── Factory.php
    │   │       ├── MockObjectComparator.php
    │   │       ├── NumberComparator.php
    │   │       ├── NumericComparator.php
    │   │       ├── ObjectComparator.php
    │   │       ├── ResourceComparator.php
    │   │       ├── ScalarComparator.php
    │   │       ├── SplObjectStorageComparator.php
    │   │       ├── TypeComparator.php
    │   │       └── exceptions
    │   │           ├── Exception.php
    │   │           └── RuntimeException.php
    │   ├── complexity
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Calculator.php
    │   │       ├── Complexity
    │   │       │   ├── Complexity.php
    │   │       │   ├── ComplexityCollection.php
    │   │       │   └── ComplexityCollectionIterator.php
    │   │       ├── Exception
    │   │       │   ├── Exception.php
    │   │       │   └── RuntimeException.php
    │   │       └── Visitor
    │   │           ├── ComplexityCalculatingVisitor.php
    │   │           └── CyclomaticComplexityCalculatingVisitor.php
    │   ├── diff
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Chunk.php
    │   │       ├── Diff.php
    │   │       ├── Differ.php
    │   │       ├── Exception
    │   │       │   ├── ConfigurationException.php
    │   │       │   ├── Exception.php
    │   │       │   └── InvalidArgumentException.php
    │   │       ├── Line.php
    │   │       ├── LongestCommonSubsequenceCalculator.php
    │   │       ├── MemoryEfficientLongestCommonSubsequenceCalculator.php
    │   │       ├── Output
    │   │       │   ├── AbstractChunkOutputBuilder.php
    │   │       │   ├── DiffOnlyOutputBuilder.php
    │   │       │   ├── DiffOutputBuilderInterface.php
    │   │       │   ├── StrictUnifiedDiffOutputBuilder.php
    │   │       │   └── UnifiedDiffOutputBuilder.php
    │   │       ├── Parser.php
    │   │       └── TimeEfficientLongestCommonSubsequenceCalculator.php
    │   ├── environment
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Console.php
    │   │       └── Runtime.php
    │   ├── exporter
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Exporter.php
    │   ├── global-state
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── CodeExporter.php
    │   │       ├── ExcludeList.php
    │   │       ├── Restorer.php
    │   │       ├── Snapshot.php
    │   │       └── exceptions
    │   │           ├── Exception.php
    │   │           └── RuntimeException.php
    │   ├── lines-of-code
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Counter.php
    │   │       ├── Exception
    │   │       │   ├── Exception.php
    │   │       │   ├── IllogicalValuesException.php
    │   │       │   ├── NegativeValueException.php
    │   │       │   └── RuntimeException.php
    │   │       ├── LineCountingVisitor.php
    │   │       └── LinesOfCode.php
    │   ├── object-enumerator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Enumerator.php
    │   ├── object-reflector
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── ObjectReflector.php
    │   ├── recursion-context
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Context.php
    │   ├── type
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── SECURITY.md
    │   │   ├── composer.json
    │   │   ├── infection.json
    │   │   └── src
    │   │       ├── Parameter.php
    │   │       ├── ReflectionMapper.php
    │   │       ├── TypeName.php
    │   │       ├── exception
    │   │       │   ├── Exception.php
    │   │       │   └── RuntimeException.php
    │   │       └── type
    │   │           ├── CallableType.php
    │   │           ├── FalseType.php
    │   │           ├── GenericObjectType.php
    │   │           ├── IntersectionType.php
    │   │           ├── IterableType.php
    │   │           ├── MixedType.php
    │   │           ├── NeverType.php
    │   │           ├── NullType.php
    │   │           ├── ObjectType.php
    │   │           ├── SimpleType.php
    │   │           ├── StaticType.php
    │   │           ├── TrueType.php
    │   │           ├── Type.php
    │   │           ├── UnionType.php
    │   │           ├── UnknownType.php
    │   │           └── VoidType.php
    │   └── version
    │       ├── ChangeLog.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── SECURITY.md
    │       ├── composer.json
    │       └── src
    │           └── Version.php
    ├── staabm
    │   └── side-effects-detector
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── lib
    │           ├── SideEffect.php
    │           ├── SideEffectsDetector.php
    │           └── functionMetadata.php
    └── theseer
        └── tokenizer
            ├── CHANGELOG.md
            ├── LICENSE
            ├── README.md
            ├── composer.json
            ├── composer.lock
            └── src
                ├── Exception.php
                ├── NamespaceUri.php
                ├── NamespaceUriException.php
                ├── Token.php
                ├── TokenCollection.php
                ├── TokenCollectionException.php
                ├── Tokenizer.php
                └── XMLSerializer.php
```

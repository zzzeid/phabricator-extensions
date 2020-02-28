<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'BMOExternalAccountSearchConduitAPIMethod' => 'conduit/BMOExternalAccountSearchConduitAPIMethod.php',
    'BugzillaAccountSearchConduitAPIMethod' => 'conduit/BugzillaAccountSearchConduitAPIMethod.php',
    'CreatePolicyConduitAPIMethod' => 'conduit/CreatePolicyConduitAPIMethod.php',
    'DifferentialBugzillaBugIDCommitMessageField' => 'differential/customfield/DifferentialBugzillaBugIDCommitMessageField.php',
    'DifferentialBugzillaBugIDCustomFieldTestCase' => 'differential/customfield/__tests__/DifferentialBugzillaIdCustomFieldTestCase.php',
    'DifferentialBugzillaBugIDField' => 'differential/customfield/DifferentialBugzillaBugIDField.php',
    'DifferentialBugzillaBugIDValidator' => 'differential/customfield/DifferentialBugzillaBugIDValidator.php',
    'DifferentialRevisionWarning' => 'differential/view/DifferentialRevisionWarning.php',
    'ExternalAccountsSearchEngineAttachment' => 'conduit/ExternalAccountsSearchEngineAttachment.php',
    'ExternalAccountsSearchEngineExtension' => 'conduit/ExternalAccountsSearchEngineExtension.php',
    'FeedQueryIDConduitAPIMethod' => 'conduit/FeedQueryIDConduitAPIMethod.php',
    'LandoLinkEventListener' => 'lando/events/LandoLinkEventListener.php',
    'MozLogger' => 'logging/MozLogger.php',
    'MozillaExtraReviewerDataSearchEngineAttachment' => 'differential/conduit/MozillaExtraReviewerDataSearchEngineAttachment.php',
    'MozillaMOTD' => 'motd/view/MozillaMOTD.php',
    'MozillaMOTDConfigOptions' => 'motd/config/MozillaMOTDConfigOptions.php',
    'MozillaSearchEngineExtension' => 'differential/conduit/MozillaSearchEngineExtension.php',
    'NewChangesLinkEventListener' => 'differential/events/NewChangesLinkEventListener.php',
    'PhabricatorBMOAuthAdapter' => 'auth/PhabricatorBMOAuthAdapter.php',
    'PhabricatorBMOAuthAdapterTestCase' => 'auth/__tests__/PhabricatorBMOAuthAdapterTestCase.php',
    'PhabricatorBMOAuthProvider' => 'auth/PhabricatorBMOAuthProvider.php',
    'PhabricatorBMOAuthProviderTestCase' => 'auth/__tests__/PhabricatorBMOAuthProviderTestCase.php',
    'PhabricatorBugzillaConfigOptions' => 'bugzilla/config/PhabricatorBugzillaConfigOptions.php',
    'PhabricatorDifferentialReviewersPolicyRule' => 'differential/policyrule/PhabricatorDifferentialReviewersPolicyRule.php',
    'PhabricatorFeedIDQuery' => 'feed/query/PhabricatorFeedIDQuery.php',
    'PhabricatorLandoConfigOptions' => 'lando/config/PhabricatorLandoConfigOptions.php',
    'PolicyQueryConduitAPIMethod' => 'conduit/PolicyQueryConduitAPIMethod.php',
    'SentryConfigOptions' => 'logging/SentryConfigOptions.php',
    'SentryLoggerPlugin' => 'logging/SentryLoggerPlugin.php',
  ),
  'function' => array(
    'isRevisionPrivate' => 'differential/view/DifferentialRevisionWarning.php',
  ),
  'xmap' => array(
    'BMOExternalAccountSearchConduitAPIMethod' => 'UserConduitAPIMethod',
    'BugzillaAccountSearchConduitAPIMethod' => 'UserConduitAPIMethod',
    'CreatePolicyConduitAPIMethod' => 'ConduitAPIMethod',
    'DifferentialBugzillaBugIDCommitMessageField' => 'DifferentialCommitMessageCustomField',
    'DifferentialBugzillaBugIDCustomFieldTestCase' => 'PhabricatorTestCase',
    'DifferentialBugzillaBugIDField' => 'DifferentialStoredCustomField',
    'DifferentialBugzillaBugIDValidator' => 'Phobject',
    'DifferentialRevisionWarning' => 'Phobject',
    'ExternalAccountsSearchEngineAttachment' => 'PhabricatorSearchEngineAttachment',
    'ExternalAccountsSearchEngineExtension' => 'PhabricatorSearchEngineExtension',
    'FeedQueryIDConduitAPIMethod' => 'FeedQueryConduitAPIMethod',
    'LandoLinkEventListener' => 'PhabricatorEventListener',
    'MozLogger' => 'Phobject',
    'MozillaExtraReviewerDataSearchEngineAttachment' => 'PhabricatorSearchEngineAttachment',
    'MozillaMOTD' => 'Phobject',
    'MozillaMOTDConfigOptions' => 'PhabricatorApplicationConfigOptions',
    'MozillaSearchEngineExtension' => 'PhabricatorSearchEngineExtension',
    'NewChangesLinkEventListener' => 'PhabricatorEventListener',
    'PhabricatorBMOAuthAdapter' => 'PhutilAuthAdapter',
    'PhabricatorBMOAuthAdapterTestCase' => 'PhabricatorTestCase',
    'PhabricatorBMOAuthProvider' => 'PhabricatorAuthProvider',
    'PhabricatorBMOAuthProviderTestCase' => 'PhabricatorTestCase',
    'PhabricatorBugzillaConfigOptions' => 'PhabricatorApplicationConfigOptions',
    'PhabricatorDifferentialReviewersPolicyRule' => 'PhabricatorPolicyRule',
    'PhabricatorFeedIDQuery' => 'PhabricatorFeedQuery',
    'PhabricatorLandoConfigOptions' => 'PhabricatorApplicationConfigOptions',
    'PolicyQueryConduitAPIMethod' => 'ConduitAPIMethod',
    'SentryConfigOptions' => 'PhabricatorApplicationConfigOptions',
    'SentryLoggerPlugin' => 'Phobject',
  ),
));
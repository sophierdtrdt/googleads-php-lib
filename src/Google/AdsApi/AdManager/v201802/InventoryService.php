<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201802\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\AdManager\\v201802\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v201802\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\AdManager\\v201802\\AdSenseSettings',
      'AdUnitAction' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201802\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201802\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201802\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\AdManager\\v201802\\ArchiveAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201802\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201802\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201802\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v201802\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v201802\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201802\\CrossSellError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201802\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201802\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\AdManager\\v201802\\DeactivateAdUnits',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201802\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201802\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201802\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201802\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201802\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201802\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\AdManager\\v201802\\InvalidColorError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201802\\InvalidUrlError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryUnitError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201802\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\AdManager\\v201802\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201802\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201802\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201802\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201802\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201802\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201802\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201802\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201802\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201802\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201802\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201802\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201802\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201802\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201802\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201802\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201802\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201802\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201802\\Value',
      'createAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v201802\\createAdUnitsResponse',
      'getAdUnitSizesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201802\\getAdUnitSizesByStatementResponse',
      'getAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201802\\getAdUnitsByStatementResponse',
      'performAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v201802\\performAdUnitActionResponse',
      'updateAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v201802\\updateAdUnitsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/InventoryService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v201802\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v201802\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function createAdUnits(array $adUnits)
    {
      return $this->__soapCall('createAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

    /**
     * Gets a set of {@link AdUnitSize} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code targetPlatform}</td>
     * <td>{@link TargetPlatform}</td>
     * </tr>
     * </table>
     * An exception will be thrown for queries with unsupported fields.
     *
     * Paging is not supported, as aren't the LIMIT and OFFSET PQL keywords.
     *
     * Only "=" operator is supported.
     *
     * a set of ad unit sizes
     *
     * @param \Google\AdsApi\AdManager\v201802\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201802\AdUnitSize[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\AdManager\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitSizesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code adUnitCode}</td>
     * <td>{@link AdUnit#adUnitCode}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdUnit#name}</td>
     * </tr>
     * <tr>
     * <td>{@code parentId}</td>
     * <td>{@link AdUnit#parentId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdUnit#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link AdUnit#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\AdManager\v201802\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201802\AdUnitPage
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\AdManager\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\AdManager\v201802\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\AdManager\v201802\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201802\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\AdManager\v201802\AdUnitAction $adUnitAction, \Google\AdsApi\AdManager\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v201802\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v201802\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

}

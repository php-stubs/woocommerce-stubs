<?php
/**
 * Generated stub declarations for WooCommerce.
 * @see https://woocommerce.com
 * @see https://github.com/php-stubs/woocommerce-stubs
 */

namespace {
    /**
     * Abstract Rest Controller Class
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends  WP_REST_Controller
     * @version  2.6.0
     */
    abstract class WC_REST_Controller extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Add the schema from additional fields to an schema array.
         *
         * The type of object is inferred from the passed schema.
         *
         * @param array $schema Schema array.
         *
         * @return array
         */
        protected function add_additional_fields_schema($schema)
        {
        }
        /**
         * Compatibility functions for WP 5.5, since custom types are not supported anymore.
         * See @link https://core.trac.wordpress.org/changeset/48306
         *
         * @param string $method Optional. HTTP method of the request.
         *
         * @return array Endpoint arguments.
         */
        public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
        {
        }
        /**
         * Change datatypes `date-time` to string, and `mixed` to composite of all built in types. This is required for maintaining forward compatibility with WP 5.5 since custom post types are not supported anymore.
         *
         * See @link https://core.trac.wordpress.org/changeset/48306
         *
         * We still use the 'mixed' type, since if we convert to composite type everywhere, it won't work in 5.4 anymore because they require to define the full schema.
         *
         * @param array $endpoint_args Schema with datatypes to convert.
         * @return mixed Schema with converted datatype.
         */
        protected function adjust_wp_5_5_datatype_compatibility($endpoint_args)
        {
        }
        /**
         * Get normalized rest base.
         *
         * @return string
         */
        protected function get_normalized_rest_base()
        {
        }
        /**
         * Check batch limit.
         *
         * @param array $items Request items.
         * @return bool|WP_Error
         */
        protected function check_batch_limit($items)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Validate a text value for a text based setting.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string
         */
        public function validate_setting_text_field($value, $setting)
        {
        }
        /**
         * Validate select based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_select_field($value, $setting)
        {
        }
        /**
         * Validate multiselect based settings.
         *
         * @since 3.0.0
         * @param array $values Values.
         * @param array $setting Setting.
         * @return array|WP_Error
         */
        public function validate_setting_multiselect_field($values, $setting)
        {
        }
        /**
         * Validate image_width based settings.
         *
         * @since 3.0.0
         * @param array $values Values.
         * @param array $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_image_width_field($values, $setting)
        {
        }
        /**
         * Validate radio based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_radio_field($value, $setting)
        {
        }
        /**
         * Validate checkbox based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_checkbox_field($value, $setting)
        {
        }
        /**
         * Validate textarea based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string
         */
        public function validate_setting_textarea_field($value, $setting)
        {
        }
        /**
         * Add meta query.
         *
         * @since 3.0.0
         * @param array $args       Query args.
         * @param array $meta_query Meta query.
         * @return array
         */
        protected function add_meta_query($args, $meta_query)
        {
        }
        /**
         * Get the batch schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_public_batch_schema()
        {
        }
        /**
         * Gets an array of fields to be included on the response.
         *
         * Included fields are based on item schema and `_fields=` request argument.
         * Updated from WordPress 5.3, included into this class to support old versions.
         *
         * @since 3.5.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Fields to be included in the response.
         */
        public function get_fields_for_response($request)
        {
        }
    }
    /**
     * WC_REST_Posts_Controller
     *
     * @package Automattic/WooCommerce/RestApi
     * @version  2.6.0
     */
    abstract class WC_REST_Posts_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = '';
        /**
         * Controls visibility on frontend.
         *
         * @var string
         */
        protected $public = \false;
        /**
         * Check if a given request has access to read items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Add post meta fields.
         *
         * @param WP_Post         $post Post Object.
         * @param WP_REST_Request $request WP_REST_Request Object.
         * @return bool|WP_Error
         */
        protected function add_post_meta_fields($post, $request)
        {
        }
        /**
         * Delete post.
         *
         * @param WP_Post $post Post object.
         */
        protected function delete_post($post)
        {
        }
        /**
         * Update a single post.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Post         $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given post.
         */
        protected function prepare_links($post, $request)
        {
        }
        /**
         * Determine the allowed query_vars for a get_items() response and
         * prepare for WP_Query.
         *
         * @param array           $prepared_args Prepared arguments.
         * @param WP_REST_Request $request Request object.
         * @return array          $query_args
         */
        protected function prepare_items_query($prepared_args = array(), $request = \null)
        {
        }
        /**
         * Get all the WP Query vars that are allowed for the API request.
         *
         * @return array
         */
        protected function get_allowed_query_vars()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Update post meta fields.
         *
         * @param WP_Post         $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return bool|WP_Error
         */
        protected function update_post_meta_fields($post, $request)
        {
        }
    }
    /**
     * WC_REST_CRUD_Controller class.
     *
     * @extends WC_REST_Posts_Controller
     */
    abstract class WC_REST_CRUD_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \false;
        /**
         * Get object.
         *
         * @param  int $id Object ID.
         * @return object WC_Data object or WP_Error object.
         */
        protected function get_object($id)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get object permalink.
         *
         * @param  object $object Object.
         * @return string
         */
        protected function get_permalink($object)
        {
        }
        /**
         * Prepares the object for the REST response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        protected function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single post.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get objects.
         *
         * @since  3.0.0
         * @param  array $query_args Query args.
         * @return array
         */
        protected function get_objects($query_args)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Coupons_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'coupons';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_coupon';
        /**
         * Register the routes for coupons.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single coupon output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Only return writable props from schema.
         *
         * @param  array $schema Schema.
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single coupon for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the Coupon's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Coupons_V2_Controller
     */
    class WC_REST_Coupons_Controller extends \WC_REST_Coupons_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Coupons controller.
     *
     * @extends WC_REST_Coupons_Controller
     */
    class Coupons extends \WC_REST_Coupons_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Add coupon code searching to the WC API.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get a collection of posts and add the code search option to WP_Query.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Add code searching to the WP Query
         *
         * @param string $where Where clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_search_code_filter($where, $wp_query)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * WooCommerce Reports exportable controller interface.
     *
     * @since 3.5.0
     */
    interface ExportableInterface
    {
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns();
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Value.
         */
        public function prepare_item_for_export($item);
    }
}
namespace {
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Reports_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports';
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read reports.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass $report Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_V1_Controller
     */
    class WC_REST_Reports_V2_Controller extends \WC_REST_Reports_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_V2_Controller
     */
    class WC_REST_Reports_Controller extends \WC_REST_Reports_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * ExportableTraits class.
     */
    trait ExportableTraits
    {
        /**
         * Format numbers for CSV using store precision setting.
         *
         * @param string|float $value Numeric value.
         * @return string Formatted value.
         */
        public static function csv_number_format($value)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Customers {
    /**
     * REST API Reports customers controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get one report.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Customers controller.
     *
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Customers\Controller
     */
    class Customers extends \Automattic\WooCommerce\Admin\API\Reports\Customers\Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace {
    /**
     * REST API Data controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read site data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read site settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Return the list of data resources.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a data resource object for serialization.
         *
         * @param stdClass        $resource Resource data.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($resource, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the data index schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Data controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class Data extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Return the list of data resources.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
    }
}
namespace {
    /**
     * REST API Data countries controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Countries_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/countries';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Get a list of countries and states.
         *
         * @param  string          $country_code Country code.
         * @param  WP_REST_Request $request      Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_country($country_code = \false, $request)
        {
        }
        /**
         * Return the list of states for all countries.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of states for a given country.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * REST API Data countries controller class.
     *
     * @extends WC_REST_Data_Countries_Controller
     */
    class DataCountries extends \WC_REST_Data_Countries_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
    }
    /**
     * Data Download IP controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class DataDownloadIPs extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/download-ips';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Return the download IPs matching the passed parameters.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given object.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Init class.
     */
    class Init
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Boostrap REST API.
         */
        public function __construct()
        {
        }
        /**
         * Init REST API.
         */
        public function rest_api_init()
        {
        }
        /**
         * Adds data stores.
         *
         * @param array $data_stores List of data stores.
         * @return array
         */
        public static function add_data_stores($data_stores)
        {
        }
        /**
         * Add the currency symbol (in addition to currency code) to each Order
         * object in REST API responses. For use in formatAmount().
         *
         * @param {WP_REST_Response} $response REST response object.
         * @returns {WP_REST_Response}
         */
        public static function add_currency_symbol_to_order_response($response)
        {
        }
    }
    /**
     * Leaderboards controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class Leaderboards extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'leaderboards';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the data for the coupons leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_coupons_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get the data for the categories leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_categories_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get the data for the customers leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_customers_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get the data for the products leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_products_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get an array of all leaderboards.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         * @return array
         */
        public function get_leaderboards($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Return all leaderboards.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Returns a list of allowed leaderboards.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_allowed_items($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get schema for the list of allowed leaderboards.
         *
         * @return array $schema
         */
        public function get_public_allowed_item_schema()
        {
        }
    }
    /**
     * Marketing Controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class Marketing extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'marketing';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Return installed marketing extensions data.
         *
         * @param \WP_REST_Request $request Request data.
         *
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_recommended_plugins($request)
        {
        }
        /**
         * Return installed marketing extensions data.
         *
         * @param \WP_REST_Request $request Request data.
         *
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_knowledge_base_posts($request)
        {
        }
    }
    /**
     * Marketing Overview Controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class MarketingOverview extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'marketing/overview';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Return installed marketing extensions data.
         *
         * @param \WP_REST_Request $request Request data.
         *
         * @return \WP_Error|\WP_REST_Response
         */
        public function activate_plugin($request)
        {
        }
        /**
         * Check if a given request has access to manage plugins.
         *
         * @param \WP_REST_Request $request Full details about the request.
         *
         * @return \WP_Error|boolean
         */
        public function install_plugins_permissions_check($request)
        {
        }
        /**
         * Return installed marketing extensions data.
         *
         * @param \WP_REST_Request $request Request data.
         *
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_installed_plugins($request)
        {
        }
    }
    /**
     * REST API Admin Notes controller class.
     *
     * @extends WC_REST_CRUD_Controller
     */
    class Notes extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'admin/notes';
        /**
         * Register the routes for admin notes.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single note.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all notes.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Check whether a given request has permission to read a single note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Update a single note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Delete all notes.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Request|WP_Error
         */
        public function delete_all_items($request)
        {
        }
        /**
         * Prepare note data.
         *
         * @param WC_Admin_Note   $note     Note data.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_note_data_for_response($note, $request)
        {
        }
        /**
         * Prepare an array with the the requested updates.
         *
         * @param WP_REST_Request $request  Request object.
         * @return array A list of the requested updates values.
         */
        public function get_requested_updates($request)
        {
        }
        /**
         * Undo delete all notes.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Request|WP_Error
         */
        public function undoremove_items($request)
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Prepare a path or query for serialization to the client.
         *
         * @param string $query The query, path, or URL to transform.
         * @return string A fully formed URL.
         */
        public function prepare_query_for_response($query)
        {
        }
        /**
         * Prepare a note object for serialization.
         *
         * @param array           $data Note data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($data, $request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the note's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Admin Note Action controller class.
     *
     * @extends WC_REST_CRUD_Controller
     */
    class NoteActions extends \Automattic\WooCommerce\Admin\API\Notes
    {
        /**
         * Register the routes for admin notes.
         */
        public function register_routes()
        {
        }
        /**
         * Trigger a note action.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function trigger_note_action($request)
        {
        }
        /**
         * Get screen name.
         *
         * @return string The screen name.
         */
        public function get_screen_name()
        {
        }
    }
    /**
     * Onboarding Profile controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class OnboardingProfile extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/profile';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read onboarding profile data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit onboarding profile data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Return all onboarding profile data.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Update onboarding profile data.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_items($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param  array $params The params sent in the request.
         * @return array
         */
        protected function prepare_objects_query($params)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get onboarding profile properties.
         *
         * @return array
         */
        public static function get_profile_properties()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * Onboarding Tasks Controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class OnboardingTasks extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/tasks';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to create a product.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function import_products_permission_check($request)
        {
        }
        /**
         * Check if a given request has access to create a product.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_pages_permission_check($request)
        {
        }
        /**
         * Import sample products from WooCommerce sample CSV.
         *
         * @return WP_Error|WP_REST_Response
         */
        public static function import_sample_products()
        {
        }
        /**
         * Get header mappings from CSV columns.
         *
         * @param string $file File path.
         * @return array Mapped headers.
         */
        public static function get_header_mappings($file)
        {
        }
        /**
         * Sanitize special column name regex.
         *
         * @param  string $value Raw special column name.
         * @return string
         */
        public static function sanitize_special_column_name_regex($value)
        {
        }
        /**
         * Returns a valid cover block with an image, if one exists, or background as a fallback.
         *
         * @param  array $image Image to use for the cover block. Should contain a media ID and image URL.
         * @return string Block content.
         */
        private static function get_homepage_cover_block($image)
        {
        }
        /**
         * Returns a valid media block with an image, if one exists, or a uninitialized media block the user can set.
         *
         * @param  array  $image Image to use for the cover block. Should contain a media ID and image URL.
         * @param  string $align If the image should be aligned to the left or right.
         * @return string Block content.
         */
        private static function get_homepage_media_block($image, $align = 'left')
        {
        }
        /**
         * Returns a homepage template to be inserted into a post. A different template will be used depending on the number of products.
         *
         * @param int $post_id ID of the homepage template.
         * @return string Template contents.
         */
        private static function get_homepage_template($post_id)
        {
        }
        /**
         * Gets the possible industry images from the plugin folder for sideloading. If an image doesn't exist, other.jpg is used a fallback.
         *
         * @return array An array of images by industry.
         */
        private static function get_available_homepage_images()
        {
        }
        /**
         * Uploads a number of images to a homepage template, depending on the selected industry from the profile wizard.
         *
         * @param  int $post_id ID of the homepage template.
         * @param  int $number_of_images The number of images that should be sideloaded (depending on how many media slots are in the template).
         * @return array An array of images that have been attached to the post.
         */
        private static function sideload_homepage_images($post_id, $number_of_images)
        {
        }
        /**
         * Creates base store starter pages like my account and checkout.
         * Note that WC_Install::create_pages already checks if pages exist before creating them again.
         *
         * @return bool
         */
        public static function create_store_pages()
        {
        }
        /**
         * Create a homepage from a template.
         *
         * @return WP_Error|array
         */
        public static function create_homepage()
        {
        }
    }
    /**
     * Onboarding Themes Controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class OnboardingThemes extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/themes';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to manage themes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Installs the requested theme.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Theme installation status.
         */
        public function install_theme($request)
        {
        }
        /**
         * Activate the requested theme.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Theme activation status.
         */
        public function activate_theme($request)
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Options Controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class Options extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'options';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to get options.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if the user has permission given an option name.
         *
         * @param  string          $option Option name.
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean
         */
        public function user_has_permission($option, $request)
        {
        }
        /**
         * Check if a given request has access to update options.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Get an array of options and respective permissions for the current user.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        public function get_option_permissions($request)
        {
        }
        /**
         * Gets an array of options and respective values.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array Options object with option values.
         */
        public function get_options($request)
        {
        }
        /**
         * Updates an array of objects.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array Options object with a boolean if the option was updated.
         */
        public function update_options($request)
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Orders_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \true;
        /**
         * Stores the request.
         *
         * @var array
         */
        protected $request = array();
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Get object. Return false if object is not of required type.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data|bool
         */
        protected function get_object($id)
        {
        }
        /**
         * Expands an order item to get its data.
         *
         * @param WC_Order_item $item Order item data.
         * @return array
         */
        protected function get_order_item_data($item)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Only return writable props from schema.
         *
         * @param  array $schema Schema.
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single order for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @throws WC_REST_Exception But all errors are validated before returning any data.
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Update address.
         *
         * @param WC_Order $order  Order data.
         * @param array    $posted Posted data.
         * @param string   $type   Address type.
         */
        protected function update_address($order, $posted, $type = 'billing')
        {
        }
        /**
         * Gets the product ID from the SKU or posted ID.
         *
         * @throws WC_REST_Exception When SKU or ID is not valid.
         * @param array           $posted Request data.
         * @param string          $action 'create' to add line item or 'update' to update it.
         * @return int
         */
        protected function get_product_id($posted, $action = 'create')
        {
        }
        /**
         * Maybe set an item prop if the value was posted.
         *
         * @param WC_Order_Item $item   Order item.
         * @param string        $prop   Order property.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_prop($item, $prop, $posted)
        {
        }
        /**
         * Maybe set item props if the values were posted.
         *
         * @param WC_Order_Item $item   Order item data.
         * @param string[]      $props  Properties.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_props($item, $props, $posted)
        {
        }
        /**
         * Maybe set item meta if posted.
         *
         * @param WC_Order_Item $item   Order item data.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_meta_data($item, $posted)
        {
        }
        /**
         * Create or update a line item.
         *
         * @param array  $posted Line item data.
         * @param string $action 'create' to add line item or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Product
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_line_items($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order shipping method.
         *
         * @param array  $posted $shipping Item data.
         * @param string $action 'create' to add shipping or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Shipping
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_shipping_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order fee.
         *
         * @param array  $posted Item data.
         * @param string $action 'create' to add fee or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Fee
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_fee_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order coupon.
         *
         * @param array  $posted Item data.
         * @param string $action 'create' to add coupon or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Coupon
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_coupon_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Wrapper method to create/update order items.
         * When updating, the item ID provided is checked to ensure it is associated
         * with the order.
         *
         * @param WC_Order $order order object.
         * @param string   $item_type The item type.
         * @param array    $posted item provided in the request body.
         * @throws WC_REST_Exception If item ID is not associated with order.
         */
        protected function set_item($order, $item_type, $posted)
        {
        }
        /**
         * Helper method to check if the resource ID associated with the provided item is null.
         * Items can be deleted by setting the resource ID to null.
         *
         * @param array $item Item provided in the request body.
         * @return bool True if the item resource ID is null, false otherwise.
         */
        protected function item_is_null($item)
        {
        }
        /**
         * Get order statuses without prefixes.
         *
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Orders_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Calculate coupons.
         *
         * @throws WC_REST_Exception When fails to set any item.
         * @param WP_REST_Request $request Request object.
         * @param WC_Order        $order   Order data.
         * @return bool
         */
        protected function calculate_coupons($request, $order)
        {
        }
        /**
         * Prepare a single order for create or update.
         *
         * @throws WC_REST_Exception When fails to set any item.
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @throws WC_REST_Exception But all errors are validated before returning any data.
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Orders controller.
     *
     * @extends WC_REST_Orders_Controller
     */
    class Orders extends \WC_REST_Orders_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Prepare objects query.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get formatted item data.
         *
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
    }
    /**
     * Plugins Controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class Plugins extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'plugins';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to manage plugins.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Create an alert notification in response to an error installing a plugin.
         *
         * @todo This should be moved to a filter to make this API more generic and less plugin-specific.
         *
         * @param string $slug The slug of the plugin being installed.
         */
        private function create_install_plugin_error_inbox_notification_for_jetpack_installs($slug)
        {
        }
        /**
         * Install the requested plugin.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Plugin Status
         */
        public function install_plugin($request)
        {
        }
        /**
         * Installs the requested plugins.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Plugin Status
         */
        public function install_plugins($request)
        {
        }
        /**
         * Gets an array of plugins that can be installed & activated.
         *
         * @return array
         */
        public static function get_allowed_plugins()
        {
        }
        /**
         * Returns a list of active plugins in API format.
         *
         * @return array Active plugins
         */
        public static function active_plugins()
        {
        }
        /**
         * Returns a list of active plugins.
         *
         * @return array Active plugins
         */
        public static function get_active_plugins()
        {
        }
        /**
         * Returns a list of installed plugins.
         *
         * @return array Installed plugins
         */
        public function installed_plugins()
        {
        }
        /**
         * Activate the requested plugin.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Plugin Status
         */
        public function activate_plugins($request)
        {
        }
        /**
         * Generates a Jetpack Connect URL.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Connection URL for Jetpack
         */
        public function connect_jetpack($request)
        {
        }
        /**
         *  Kicks off the WCCOM Connect process.
         *
         * @return WP_Error|array Connection URL for WooCommerce.com
         */
        public function request_wccom_connect()
        {
        }
        /**
         * Finishes connecting to WooCommerce.com.
         *
         * @param  object $rest_request Request details.
         * @return WP_Error|array Contains success status.
         */
        public function finish_wccom_connect($rest_request)
        {
        }
        /**
         * Returns a URL that can be used to connect to PayPal.
         *
         * @return WP_Error|array Connect URL.
         */
        public function connect_paypal()
        {
        }
        /**
         * Returns a URL that can be used to connect to Square.
         *
         * @return WP_Error|array Connect URL.
         */
        public function connect_square()
        {
        }
        /**
         * Returns a URL that can be used to by WCPay to verify business details with Stripe.
         *
         * @return WP_Error|array Connect URL.
         */
        public function connect_wcpay()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_connect_schema()
        {
        }
    }
}
namespace {
    /**
     * Terms controller class.
     */
    abstract class WC_REST_Terms_Controller extends \WC_REST_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = '';
        /**
         * Register the routes for terms.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the terms.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Check permissions.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @param string          $context Request context.
         * @return bool|WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Get terms associated with a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single term for a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object          $term   Term object.
         * @param WP_REST_Request $request Full details about the request.
         * @return array Links for the given term.
         */
        protected function prepare_links($term, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the terms attached to a product.
         *
         * This is an alternative to `get_terms()` that uses `get_the_terms()`
         * instead, which hits the object cache. There are a few things not
         * supported, notably `include`, `exclude`. In `self::get_items()` these
         * are instead treated as a full query.
         *
         * @param array           $prepared_args Arguments for `get_terms()`.
         * @param WP_REST_Request $request       Full details about the request.
         * @return array List of term objects. (Total count in `$this->total_terms`).
         */
        protected function get_terms_for_product($prepared_args, $request)
        {
        }
        /**
         * Comparison function for sorting terms by a column.
         *
         * Uses `$this->sort_column` to determine field to sort by.
         *
         * @param stdClass $left Term object.
         * @param stdClass $right Term object.
         * @return int <0 if left is higher "priority" than right, 0 if equal, >0 if right is higher "priority" than left.
         */
        protected function compare_terms($left, $right)
        {
        }
        /**
         * Get the query params for collections
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function get_taxonomy($request)
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Categories_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/categories';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_cat';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Categories_V1_Controller
     */
    class WC_REST_Product_Categories_V2_Controller extends \WC_REST_Product_Categories_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Categories_V2_Controller
     */
    class WC_REST_Product_Categories_Controller extends \WC_REST_Product_Categories_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return bool|WP_Error
         *
         * @since 3.5.5
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Product categories controller.
     *
     * @extends WC_REST_Product_Categories_Controller
     */
    class ProductCategories extends \WC_REST_Product_Categories_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
    }
}
namespace {
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Reviews_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhook deliveries.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a new product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all reviews.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Updates a review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
         */
        public function update_item($request)
        {
        }
        /**
         * Deletes a review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment      $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Prepare a single product review to be inserted into the database.
         *
         * @param  WP_REST_Request $request Request object.
         * @return array|WP_Error  $prepared_review
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the reivew, if the ID is valid.
         *
         * @since 3.5.0
         * @param int $id Supplied ID.
         * @return WP_Comment|WP_Error Comment object if ID is valid, WP_Error otherwise.
         */
        protected function get_review($id)
        {
        }
        /**
         * Prepends internal property prefix to query parameters to match our response fields.
         *
         * @since 3.5.0
         * @param string $query_param Query parameter.
         * @return string
         */
        protected function normalize_query_param($query_param)
        {
        }
        /**
         * Checks comment_approved to set comment status for single comment output.
         *
         * @since 3.5.0
         * @param string|int $comment_approved comment status.
         * @return string Comment status.
         */
        protected function prepare_status_response($comment_approved)
        {
        }
        /**
         * Sets the comment_status of a given review object when creating or updating a review.
         *
         * @since 3.5.0
         * @param string|int $new_status New review status.
         * @param int        $id         Review ID.
         * @return bool Whether the status was changed.
         */
        protected function handle_status_param($new_status, $id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Product reviews controller.
     *
     * @extends WC_REST_Product_Reviews_Controller
     */
    class ProductReviews extends \WC_REST_Product_Reviews_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review)
        {
        }
    }
}
namespace {
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Products_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \true;
        /**
         * Initialize product actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @param int $id Object ID.
         *
         * @since  3.0.0
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @since  3.0.0
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @since  3.0.0
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param string     $taxonomy Taxonomy slug.
         *
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param string $name Taxonomy name.
         *
         * @deprecated 3.0.0
         * @return     string
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get product attribute taxonomy name.
         *
         * @param string     $slug    Taxonomy name.
         * @param WC_Product $product Product data.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_attribute_taxonomy_name($slug, $product)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         *
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int   $product_id Product ID.
         * @param array $attribute  Attribute data.
         *
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param string     $context Request context.
         *                            Options: 'view' and 'edit'.
         *
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @param bool            $creating If is creating a new object.
         *
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Set product images.
         *
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         *
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         * @param int        $deprecated Deprecated since 3.0.
         *
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         *
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         *
         * @since  3.0.0
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Clear caches here so in sync with any new variations/children.
         *
         * @param WC_Data $object Object data.
         */
        public function clear_transients($object)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API variations controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Products_V2_Controller
     */
    class WC_REST_Product_Variations_V2_Controller extends \WC_REST_Products_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/variations';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product_variation';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepare a single variation for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Clear caches here so in sync with any new variations.
         *
         * @param WC_Data $object Object data.
         */
        public function clear_transients($object)
        {
        }
        /**
         * Delete a variation.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get the Variation's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API variations controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Variations_V2_Controller
     */
    class WC_REST_Product_Variations_Controller extends \WC_REST_Product_Variations_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single variation output for response.
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare a single variation for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the image for a product variation.
         *
         * @param WC_Product_Variation $variation Variation data.
         * @return array
         */
        protected function get_image($variation)
        {
        }
        /**
         * Set variation image.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param  WC_Product_Variation $variation Variation instance.
         * @param  array                $image    Image data.
         * @return WC_Product_Variation
         */
        protected function set_variation_image($variation, $image)
        {
        }
        /**
         * Get the Variation's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Product variations controller.
     *
     * @extends WC_REST_Product_Variations_Controller
     */
    class ProductVariations extends \WC_REST_Product_Variations_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Add product name and sku filtering to the WC API.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to WP_Query.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
    }
}
namespace {
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Products_V2_Controller
     */
    class WC_REST_Products_Controller extends \WC_REST_Products_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Make extra product orderby features supported by WooCommerce available to the WC API.
         * This includes 'price', 'popularity', and 'rating'.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Set product images.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Add new options for 'orderby' to the collection params.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param string     $context Request context.
         *                            Options: 'view' and 'edit'.
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Products controller.
     *
     * @extends WC_REST_Products_Controller
     */
    class Products extends \WC_REST_Products_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Adds properties that can be embed via ?_embed=1.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Add product name and sku filtering to the WC API.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to WP_Query.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Add `low_stock_amount` property to product data
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Add in conditional select fields to the query.
         *
         * @param string $select Select clause used to select fields from the query.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_fields($select, $wp_query)
        {
        }
        /**
         * Add in conditional search filters for products.
         *
         * @param string $where Where clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_filter($where, $wp_query)
        {
        }
        /**
         * Join posts meta tables when product search or low stock query is present.
         *
         * @param string $join Join clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_join($join, $wp_query)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @param string $sql SQL join.
         * @return string
         */
        protected static function append_product_sorting_table_join($sql)
        {
        }
        /**
         * Group by post ID to prevent duplicates.
         *
         * @param string $groupby Group by clause used to organize posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_group_by($groupby, $wp_query)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * REST API Reports Cache class.
     */
    class Cache
    {
        /**
         * Cache version. Used to invalidate all cached values.
         */
        const VERSION_OPTION = 'woocommerce_reports';
        /**
         * Invalidate cache.
         */
        public static function invalidate()
        {
        }
        /**
         * Get cache version number.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Get cached value.
         *
         * @param string $key Cache key.
         * @return mixed
         */
        public static function get($key)
        {
        }
        /**
         * Update cached value.
         *
         * @param string $key   Cache key.
         * @param mixed  $value New value.
         * @return bool
         */
        public static function set($key, $value)
        {
        }
    }
    /**
     * REST API Reports controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports';
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read reports.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get the order number for an order. If no filter is present for `woocommerce_order_number`, we can just return the ID.
         * Returns the parent order number if the order is actually a refund.
         *
         * @param  int $order_id Order ID.
         * @return string
         */
        public function get_order_number($order_id)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get order statuses without prefixes.
         *
         * @return array
         */
        public function get_order_statuses()
        {
        }
        /**
         * Get order statuses (and labels) without prefixes.
         *
         * @return array
         */
        public function get_order_status_labels()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Categories {
    /**
     * REST API Reports categories controller class.
     *
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/categories';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \Automattic\WooCommerce\Admin\API\Reports\Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * WooCommerce Reports data store interface.
     *
     * @since 3.5.0
     */
    interface DataStoreInterface
    {
        /**
         * Get the data based on args.
         *
         * @param array $args Query parameters.
         * @return stdClass|WP_Error
         */
        public function get_data($args);
    }
    /**
     * Admin\API\Reports\SqlQuery: Common parent for manipulating SQL query clauses.
     */
    class SqlQuery
    {
        /**
         * List of SQL clauses.
         *
         * @var array
         */
        private $sql_clauses = array('select' => array(), 'from' => array(), 'left_join' => array(), 'join' => array(), 'right_join' => array(), 'where' => array(), 'where_time' => array(), 'group_by' => array(), 'having' => array(), 'limit' => array(), 'order_by' => array());
        /**
         * SQL clause merge filters.
         *
         * @var array
         */
        private $sql_filters = array('where' => array('where', 'where_time'), 'join' => array('right_join', 'join', 'left_join'));
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context;
        /**
         * Constructor.
         *
         * @param string $context Optional context passed to filters. Default empty string.
         */
        public function __construct($context = '')
        {
        }
        /**
         * Add a SQL clause to be included when get_data is called.
         *
         * @param string $type   Clause type.
         * @param string $clause SQL clause.
         */
        protected function add_sql_clause($type, $clause)
        {
        }
        /**
         * Get SQL clause by type.
         *
         * @param string $type     Clause type.
         * @param string $handling Whether to filter the return value (filtered|unfiltered). Default unfiltered.
         *
         * @return string SQL clause.
         */
        protected function get_sql_clause($type, $handling = 'unfiltered')
        {
        }
        /**
         * Clear SQL clauses by type.
         *
         * @param string|array $types Clause type.
         */
        protected function clear_sql_clause($types)
        {
        }
        /**
         * Replace strings within SQL clauses by type.
         *
         * @param string $type    Clause type.
         * @param string $search  String to search for.
         * @param string $replace Replacement string.
         */
        protected function str_replace_clause($type, $search, $replace)
        {
        }
        /**
         * Get the full SQL statement.
         *
         * @return string
         */
        public function get_query_statement()
        {
        }
        /**
         * Reinitialize the clause array.
         */
        public function clear_all_clauses()
        {
        }
    }
    /**
     * Admin\API\Reports\DataStore: Common parent for custom report data stores.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\SqlQuery
    {
        /**
         * Cache group for the reports.
         *
         * @var string
         */
        protected $cache_group = 'reports';
        /**
         * Time out for the cache.
         *
         * @var int
         */
        protected $cache_timeout = 3600;
        /**
         * Table used as a data store for this report.
         *
         * @var string
         */
        protected static $table_name = '';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array();
        // @todo This does not really belong here, maybe factor out the comparison as separate class?
        /**
         * Order by property, used in the cmp function.
         *
         * @var string
         */
        private $order_by = '';
        /**
         * Order property, used in the cmp function.
         *
         * @var string
         */
        private $order = '';
        /**
         * Query limit parameters.
         *
         * @var array
         */
        private $limit_parameters = array();
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'reports';
        /**
         * Subquery object for query nesting.
         *
         * @var SqlQuery
         */
        protected $subquery;
        /**
         * Totals query object.
         *
         * @var SqlQuery
         */
        protected $total_query;
        /**
         * Intervals query object.
         *
         * @var SqlQuery
         */
        protected $interval_query;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get table name from database class.
         */
        public static function get_db_table_name()
        {
        }
        /**
         * Set table name from database class.
         */
        protected static function set_db_table_name()
        {
        }
        /**
         * Whether or not the report should use the caching layer.
         *
         * Provides an opportunity for plugins to prevent reports from using cache.
         *
         * @return boolean Whether or not to utilize caching.
         */
        protected function should_use_cache()
        {
        }
        /**
         * Returns string to be used as cache key for the data.
         *
         * @param array $params Query parameters.
         * @return string
         */
        protected function get_cache_key($params)
        {
        }
        /**
         * Wrapper around Cache::get().
         *
         * @param string $cache_key Cache key.
         * @return mixed
         */
        protected function get_cached_data($cache_key)
        {
        }
        /**
         * Wrapper around Cache::set().
         *
         * @param string $cache_key Cache key.
         * @param mixed  $value     New value.
         * @return bool
         */
        protected function set_cached_data($cache_key, $value)
        {
        }
        /**
         * Compares two report data objects by pre-defined object property and ASC/DESC ordering.
         *
         * @param stdClass $a Object a.
         * @param stdClass $b Object b.
         * @return string
         */
        private function interval_cmp($a, $b)
        {
        }
        /**
         * Sorts intervals according to user's request.
         *
         * They are pre-sorted in SQL, but after adding gaps, they need to be sorted including the added ones.
         *
         * @param stdClass $data      Data object, must contain an array under $data->intervals.
         * @param string   $sort_by   Ordering property.
         * @param string   $direction DESC/ASC.
         */
        protected function sort_intervals(&$data, $sort_by, $direction)
        {
        }
        /**
         * Sorts array of arrays based on subarray key $sort_by.
         *
         * @param array  $arr       Array to sort.
         * @param string $sort_by   Ordering property.
         * @param string $direction DESC/ASC.
         */
        protected function sort_array(&$arr, $sort_by, $direction)
        {
        }
        /**
         * Fills in interval gaps from DB with 0-filled objects.
         *
         * @param array    $db_intervals   Array of all intervals present in the db.
         * @param DateTime $start_datetime Start date.
         * @param DateTime $end_datetime   End date.
         * @param string   $time_interval  Time interval, e.g. day, week, month.
         * @param stdClass $data           Data with SQL extracted intervals.
         * @return stdClass
         */
        protected function fill_in_missing_intervals($db_intervals, $start_datetime, $end_datetime, $time_interval, &$data)
        {
        }
        /**
         * Converts input datetime parameters to local timezone. If there are no inputs from the user in query_args,
         * uses default from $defaults.
         *
         * @param array $query_args Array of query arguments.
         * @param array $defaults Array of default values.
         */
        protected function normalize_timezones(&$query_args, $defaults)
        {
        }
        /**
         * Removes extra records from intervals so that only requested number of records get returned.
         *
         * @param stdClass $data           Data from whose intervals the records get removed.
         * @param int      $page_no        Offset requested by the user.
         * @param int      $items_per_page Number of records requested by the user.
         * @param int      $db_interval_count Database interval count.
         * @param int      $expected_interval_count Expected interval count on the output.
         * @param string   $order_by Order by field.
         * @param string   $order ASC or DESC.
         */
        protected function remove_extra_records(&$data, $page_no, $items_per_page, $db_interval_count, $expected_interval_count, $order_by, $order)
        {
        }
        /**
         * Returns expected number of items on the page in case of date ordering.
         *
         * @param int $expected_interval_count Expected number of intervals in total.
         * @param int $items_per_page          Number of items per page.
         * @param int $page_no                 Page number.
         *
         * @return float|int
         */
        protected function expected_intervals_on_page($expected_interval_count, $items_per_page, $page_no)
        {
        }
        /**
         * Returns true if there are any intervals that need to be filled in the response.
         *
         * @param int    $expected_interval_count Expected number of intervals in total.
         * @param int    $db_records              Total number of records for given period in the database.
         * @param int    $items_per_page          Number of items per page.
         * @param int    $page_no                 Page number.
         * @param string $order                   asc or desc.
         * @param string $order_by                Column by which the result will be sorted.
         * @param int    $intervals_count         Number of records for given (possibly shortened) time interval.
         *
         * @return bool
         */
        protected function intervals_missing($expected_interval_count, $db_records, $items_per_page, $page_no, $order, $order_by, $intervals_count)
        {
        }
        /**
         * Updates the LIMIT query part for Intervals query of the report.
         *
         * If there are less records in the database than time intervals, then we need to remap offset in SQL query
         * to fetch correct records.
         *
         * @param array  $query_args Query arguments.
         * @param int    $db_interval_count Database interval count.
         * @param int    $expected_interval_count Expected interval count on the output.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function update_intervals_sql_params(&$query_args, $db_interval_count, $expected_interval_count, $table_name)
        {
        }
        /**
         * Casts strings returned from the database to appropriate data types for output.
         *
         * @param array $array Associative array of values extracted from the database.
         * @return array|WP_Error
         */
        protected function cast_numbers($array)
        {
        }
        /**
         * Returns a list of columns selected by the query_args formatted as a comma separated string.
         *
         * @param array $query_args User-supplied options.
         * @return string
         */
        protected function selected_columns($query_args)
        {
        }
        /**
         * Get the excluded order statuses used when calculating reports.
         *
         * @return array
         */
        protected static function get_excluded_report_order_statuses()
        {
        }
        /**
         * Maps order status provided by the user to the one used in the database.
         *
         * @param string $status Order status.
         * @return string
         */
        protected static function normalize_order_status($status)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Updates start and end dates for intervals so that they represent intervals' borders, not times when data in db were recorded.
         *
         * E.g. if there are db records for only Tuesday and Thursday this week, the actual week interval is [Mon, Sun], not [Tue, Thu].
         *
         * @param DateTime $start_datetime Start date.
         * @param DateTime $end_datetime End date.
         * @param string   $time_interval Time interval, e.g. day, week, month.
         * @param array    $intervals Array of intervals extracted from SQL db.
         */
        protected function update_interval_boundary_dates($start_datetime, $end_datetime, $time_interval, &$intervals)
        {
        }
        /**
         * Change structure of intervals to form a correct response.
         *
         * Also converts local datetimes to GMT and adds them to the intervals.
         *
         * @param array $intervals Time interval, e.g. day, week, month.
         */
        protected function create_interval_subtotals(&$intervals)
        {
        }
        /**
         * Fills WHERE clause of SQL request with date-related constraints.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function add_time_period_sql_params($query_args, $table_name)
        {
        }
        /**
         * Fills LIMIT clause of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_limit_sql_params($query_args)
        {
        }
        /**
         * Fills LIMIT parameters of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_limit_params($query_args = array())
        {
        }
        /**
         * Generates a virtual table given a list of IDs.
         *
         * @param array $ids          Array of IDs.
         * @param array $id_field     Name of the ID field.
         * @param array $other_values Other values that must be contained in the virtual table.
         * @return array
         */
        protected function get_ids_table($ids, $id_field, $other_values = array())
        {
        }
        /**
         * Returns a comma separated list of the fields in the `query_args`, if there aren't, returns `report_columns` keys.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_fields($query_args)
        {
        }
        /**
         * Returns a comma separated list of the field names prepared to be used for a selection after a join with `default_results`.
         *
         * @param array $fields                 Array of fields name.
         * @param array $default_results_fields Fields to load from `default_results` table.
         * @param array $outer_selections       Array of fields that are not selected in the inner query.
         * @return string
         */
        protected function format_join_selections($fields, $default_results_fields, $outer_selections = array())
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         */
        protected function add_order_by_sql_params($query_args)
        {
        }
        /**
         * Fills FROM and WHERE clauses of SQL request for 'Intervals' section of data response based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function add_intervals_sql_params($query_args, $table_name)
        {
        }
        /**
         * Get join and where clauses for refunds based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_refund_subquery($query_args)
        {
        }
        /**
         * Returns an array of products belonging to given categories.
         *
         * @param array $categories List of categories IDs.
         * @return array|stdClass
         */
        protected function get_products_by_cat_ids($categories)
        {
        }
        /**
         * Get WHERE filter by object ids subquery.
         *
         * @param string $select_table Select table name.
         * @param string $select_field Select table object ID field name.
         * @param string $filter_table Lookup table name.
         * @param string $filter_field Lookup table object ID field name.
         * @param string $compare      Comparison string (IN|NOT IN).
         * @param string $id_list      Comma separated ID list.
         *
         * @return string
         */
        protected function get_object_where_filter($select_table, $select_field, $filter_table, $filter_field, $compare, $id_list)
        {
        }
        /**
         * Returns an array of ids of allowed products, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_included_products_array($query_args)
        {
        }
        /**
         * Returns comma separated ids of allowed products, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_products($query_args)
        {
        }
        /**
         * Returns comma separated ids of allowed variations, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_variations($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded products, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_products($query_args)
        {
        }
        /**
         * Returns comma separated ids of included categories, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_categories($query_args)
        {
        }
        /**
         * Returns comma separated ids of included coupons, based on query arguments from the user.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $field      Field name in the parameter list.
         * @return string
         */
        protected function get_included_coupons($query_args, $field = 'coupon_includes')
        {
        }
        /**
         * Returns comma separated ids of excluded coupons, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_coupons($query_args)
        {
        }
        /**
         * Returns comma separated ids of included orders, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_orders($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded orders, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_orders($query_args)
        {
        }
        /**
         * Returns comma separated ids of included users, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_users($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded users, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_users($query_args)
        {
        }
        /**
         * Returns order status subquery to be used in WHERE SQL query, based on query arguments from the user.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $operator   AND or OR, based on match query argument.
         * @return string
         */
        protected function get_status_subquery($query_args, $operator = 'AND')
        {
        }
        /**
         * Add order status SQL clauses if included in query.
         *
         * @param array    $query_args Parameters supplied by the user.
         * @param string   $table_name Database table name.
         * @param SqlQuery $sql_query  Query object.
         */
        protected function add_order_status_clause($query_args, $table_name, &$sql_query)
        {
        }
        /**
         * Add order by SQL clause if included in query.
         *
         * @param array    $query_args Parameters supplied by the user.
         * @param SqlQuery $sql_query  Query object.
         * @return string Order by clause.
         */
        protected function add_order_by_clause($query_args, &$sql_query)
        {
        }
        /**
         * Add order by order SQL clause.
         *
         * @param array    $query_args Parameters supplied by the user.
         * @param SqlQuery $sql_query  Query object.
         */
        protected function add_orderby_order_clause($query_args, &$sql_query)
        {
        }
        /**
         * Returns customer subquery to be used in WHERE SQL query, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_customer_subquery($query_args)
        {
        }
        /**
         * Returns logic operator for WHERE subclause based on 'match' query argument.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_match_operator($query_args)
        {
        }
        /**
         * Returns filtered comma separated ids, based on query arguments from the user.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $field      Query field to filter.
         * @param string $separator  Field separator.
         * @return string
         */
        protected function get_filtered_ids($query_args, $field, $separator = ',')
        {
        }
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Categories {
    /**
     * API\Reports\Categories\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_product_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'categories';
        /**
         * Order by setting used for sorting categories data.
         *
         * @var string
         */
        private $order_by = '';
        /**
         * Order setting used for sorting categories data.
         *
         * @var string
         */
        private $order = '';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('category_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'categories';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Return the database query with parameters used for Categories report: time span and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $from_arg   Target of the JOIN sql param.
         * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
         */
        protected function add_order_by_params($query_args, $from_arg, $id_cell)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Returns an array of ids of included categories, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_categories_array($query_args)
        {
        }
        /**
         * Returns the page of data according to page number and items per page.
         *
         * @param array   $data           Data to paginate.
         * @param integer $page_no        Page number.
         * @param integer $items_per_page Number of items per page.
         * @return array
         */
        protected function page_records($data, $page_no, $items_per_page)
        {
        }
        /**
         * Enriches the category data.
         *
         * @param array $categories_data Categories data.
         * @param array $query_args  Query parameters.
         */
        protected function include_extended_info(&$categories_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * Admin\API\Reports\Query
     */
    abstract class Query extends \WC_Object_Query
    {
        /**
         * Get report data matching the current query vars.
         *
         * @return array|object of WC_Product objects
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Categories {
    /**
     * API\Reports\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        const REPORT_NAME = 'report-categories';
        /**
         * Valid fields for Categories report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get categories data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Coupons {
    /**
     * REST API Reports coupons controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Reports_Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Coupons\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_coupon_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'coupons';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('coupon_id' => 'intval', 'amount' => 'floatval', 'orders_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'coupons';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Returns an array of ids of included coupons, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_included_coupons_array($query_args)
        {
        }
        /**
         * Updates the database query with parameters used for Products report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $from_arg   Target of the JOIN sql param.
         * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
         */
        protected function add_order_by_params($query_args, $from_arg, $id_cell)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the coupon data with extra attributes.
         *
         * @param array $coupon_data Coupon data.
         * @param array $query_args Query parameters.
         */
        protected function include_extended_info(&$coupon_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Get coupon ID for an order.
         *
         * Tries to get the ID from order item meta, then falls back to a query of published coupons.
         *
         * @param \WC_Order_Item_Coupon $coupon_item The coupon order item object.
         * @return int Coupon ID on success, 0 on failure.
         */
        public static function get_coupon_id(\WC_Order_Item_Coupon $coupon_item)
        {
        }
        /**
         * Create or update an an entry in the wc_order_coupon_lookup table for an order.
         *
         * @since 3.5.0
         * @param int $order_id Order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order_coupons($order_id)
        {
        }
        /**
         * Clean coupons data when an order is deleted.
         *
         * @param int $order_id Order ID.
         */
        public static function sync_on_order_delete($order_id)
        {
        }
        /**
         * Gets coupons based on the provided arguments.
         *
         * @todo Upon core merge, including this in core's `class-wc-coupon-data-store-cpt.php` might make more sense.
         * @param array $args Array of args to filter the query by. Supports `include`.
         * @return array Array of results.
         */
        public function get_coupons($args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Coupons\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Coupons\Stats {
    /**
     * REST API Reports coupons stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Coupons\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Coupons\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'date_start_gmt' => 'strval', 'date_end_gmt' => 'strval', 'amount' => 'floatval', 'coupons_count' => 'intval', 'orders_count' => 'intval');
        /**
         * SQL columns to select in the db query.
         *
         * @var array
         */
        protected $report_columns;
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'coupons_stats';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'coupons_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for Products Stats report: categories and order status.
         *
         * @param array $query_args       Query arguments supplied by the user.
         */
        protected function update_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @since 3.5.0
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Coupons\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter
    {
        /**
         * Array of all segment ids.
         *
         * @var array|bool
         */
        protected $all_segment_ids = false;
        /**
         * Array of all segment labels.
         *
         * @var array
         */
        protected $segment_labels = array();
        /**
         * Query arguments supplied by the user for data store.
         *
         * @var array
         */
        protected $query_args = '';
        /**
         * SQL definition for each column.
         *
         * @var array
         */
        protected $report_columns = array();
        /**
         * Constructor.
         *
         * @param array $query_args Query arguments supplied by the user for data store.
         * @param array $report_columns Report columns lookup from data store.
         */
        public function __construct($query_args, $report_columns)
        {
        }
        /**
         * Filters definitions for SELECT clauses based on query_args and joins them into one string usable in SELECT clause.
         *
         * @param array $columns_mapping Column name -> SQL statememt mapping.
         *
         * @return string to be used in SELECT clause statements.
         */
        protected function prepare_selections($columns_mapping)
        {
        }
        /**
         * Update row-level db result for segments in 'totals' section to the format used for output.
         *
         * @param array  $segments_db_result Results from the SQL db query for segmenting.
         * @param string $segment_dimension Name of column used for grouping the result.
         *
         * @return array Reformatted array.
         */
        protected function reformat_totals_segments($segments_db_result, $segment_dimension)
        {
        }
        /**
         * Merges segmented results for totals response part.
         *
         * E.g. $r1 = array(
         *     0 => array(
         *          'product_id' => 3,
         *          'net_amount' => 15,
         *     ),
         * );
         * $r2 = array(
         *     0 => array(
         *          'product_id'      => 3,
         *          'avg_order_value' => 25,
         *     ),
         * );
         *
         * $merged = array(
         *     3 => array(
         *          'segment_id' => 3,
         *          'subtotals'  => array(
         *              'net_amount'      => 15,
         *              'avg_order_value' => 25,
         *          )
         *     ),
         * );
         *
         * @param string $segment_dimension Name of the segment dimension=key in the result arrays used to match records from result sets.
         * @param array  $result1 Array 1 of segmented figures.
         * @param array  $result2 Array 2 of segmented figures.
         *
         * @return array
         */
        protected function merge_segment_totals_results($segment_dimension, $result1, $result2)
        {
        }
        /**
         * Merges segmented results for intervals response part.
         *
         * E.g. $r1 = array(
         *     0 => array(
         *          'product_id'    => 3,
         *          'time_interval' => '2018-12'
         *          'net_amount'    => 15,
         *     ),
         * );
         * $r2 = array(
         *     0 => array(
         *          'product_id'      => 3,
         *          'time_interval' => '2018-12'
         *          'avg_order_value' => 25,
         *     ),
         * );
         *
         * $merged = array(
         *     '2018-12' => array(
         *          'segments' => array(
         *              3 => array(
         *                  'segment_id' => 3,
         *                  'subtotals'  => array(
         *                      'net_amount'      => 15,
         *                      'avg_order_value' => 25,
         *                  ),
         *              ),
         *          ),
         *     ),
         * );
         *
         * @param string $segment_dimension Name of the segment dimension=key in the result arrays used to match records from result sets.
         * @param array  $result1 Array 1 of segmented figures.
         * @param array  $result2 Array 2 of segmented figures.
         *
         * @return array
         */
        protected function merge_segment_intervals_results($segment_dimension, $result1, $result2)
        {
        }
        /**
         * Update row-level db result for segments in 'intervals' section to the format used for output.
         *
         * @param array  $segments_db_result Results from the SQL db query for segmenting.
         * @param string $segment_dimension Name of column used for grouping the result.
         *
         * @return array Reformatted array.
         */
        protected function reformat_intervals_segments($segments_db_result, $segment_dimension)
        {
        }
        /**
         * Fetches all segment ids from db and stores it for later use.
         *
         * @return void
         */
        protected function set_all_segments()
        {
        }
        /**
         * Return all segment ids for given segmentby query parameter.
         *
         * @return array
         */
        protected function get_all_segments()
        {
        }
        /**
         * Return all segment labels for given segmentby query parameter.
         *
         * @return array
         */
        protected function get_segment_labels()
        {
        }
        /**
         * Compares two report data objects by pre-defined object property and ASC/DESC ordering.
         *
         * @param stdClass $a Object a.
         * @param stdClass $b Object b.
         * @return string
         */
        private function segment_cmp($a, $b)
        {
        }
        /**
         * Adds zeroes for segments not present in the data selection.
         *
         * @param array $segments Array of segments from the database for given data points.
         *
         * @return array
         */
        protected function fill_in_missing_segments($segments)
        {
        }
        /**
         * Adds missing segments to intervals, modifies $data.
         *
         * @param stdClass $data Response data.
         */
        protected function fill_in_missing_interval_segments(&$data)
        {
        }
        /**
         * Calculate segments for segmenting property bound to product (e.g. category, product_id, variation_id).
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $query_params Array of SQL clauses for intervals/totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_segments($type, $segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $query_params, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for segmenting property bound to order (e.g. coupon or customer type).
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $query_params Array of SQL clauses for intervals/totals query.
         *
         * @return array
         */
        protected function get_order_related_segments($type, $segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $query_params)
        {
        }
        /**
         * Assign segments to time intervals by updating original $intervals array.
         *
         * @param array $intervals Result array from intervals SQL query.
         * @param array $intervals_segments Result array from interval segments SQL query.
         */
        protected function assign_segments_to_intervals(&$intervals, $intervals_segments)
        {
        }
        /**
         * Returns an array of segments for totals part of REST response.
         *
         * @param array  $query_params Totals SQL query parameters.
         * @param string $table_name Name of the SQL table that is the main order stats table.
         *
         * @return array
         */
        public function get_totals_segments($query_params, $table_name)
        {
        }
        /**
         * Adds an array of segments to data->intervals object.
         *
         * @param stdClass $data Data object representing the REST response.
         * @param array    $intervals_query Intervals SQL query parameters.
         * @param string   $table_name Name of the SQL table that is the main order stats table.
         */
        public function add_intervals_segments(&$data, $intervals_query, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Coupons\Stats {
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for product-related product-level segmenting query
         * (e.g. coupon discount amount for product X when segmenting by product id or category).
         *
         * @param string $products_table Name of SQL table containing the product-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_product_level($products_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-related product-level segmenting query
         * (e.g. orders_count when segmented by category).
         *
         * @param string $coupons_lookup_table Name of SQL table containing the order-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_order_level($coupons_lookup_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-level segmenting query
         * (e.g. discount amount when segmented by coupons).
         *
         * @param string $coupons_lookup_table Name of SQL table containing the order-level info.
         * @param array  $overrides Array of overrides for default column calculations.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function segment_selections_orders($coupons_lookup_table, $overrides = array())
        {
        }
        /**
         * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
        {
        }
        /**
         * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Customers {
    /**
     * Admin\API\Reports\Customers\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_customer_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'customers';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('id' => 'intval', 'user_id' => 'intval', 'orders_count' => 'intval', 'total_spend' => 'floatval', 'avg_order_value' => 'floatval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'customers';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Trigger a customer update if their "last active" meta value was changed.
         * Function expects to be hooked into the `updated_user_meta` action.
         *
         * @param int    $meta_id ID of updated metadata entry.
         * @param int    $user_id ID of the user being updated.
         * @param string $meta_key Meta key being updated.
         */
        public static function update_registered_customer_via_last_active($meta_id, $user_id, $meta_key)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Fills WHERE clause of SQL request with date-related constraints.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function add_time_period_sql_params($query_args, $table_name)
        {
        }
        /**
         * Updates the database query with parameters used for Customers report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Returns an existing customer ID for an order if one exists.
         *
         * @param object $order WC Order.
         * @return int|bool
         */
        public static function get_existing_customer_id_from_order($order)
        {
        }
        /**
         * Get or create a customer from a given order.
         *
         * @param object $order WC Order.
         * @return int|bool
         */
        public static function get_or_create_customer_from_order($order)
        {
        }
        /**
         * Retrieve a guest ID (when user_id is null) by email.
         *
         * @param string $email Email address.
         * @return false|array Customer array if found, boolean false if not.
         */
        public static function get_guest_id_by_email($email)
        {
        }
        /**
         * Retrieve a registered customer row id by user_id.
         *
         * @param string|int $user_id User ID.
         * @return false|int Customer ID if found, boolean false if not.
         */
        public static function get_customer_id_by_user_id($user_id)
        {
        }
        /**
         * Retrieve the oldest orders made by a customer.
         *
         * @param int $customer_id Customer ID.
         * @return array Orders.
         */
        public static function get_oldest_orders($customer_id)
        {
        }
        /**
         * Update the database with customer data.
         *
         * @param int $user_id WP User ID to update customer data for.
         * @return int|bool|null Number or rows modified or false on failure.
         */
        public static function update_registered_customer($user_id)
        {
        }
        /**
         * Check if a user ID is a valid customer or other user role with past orders.
         *
         * @param int $user_id User ID.
         * @return bool
         */
        protected static function is_valid_customer($user_id)
        {
        }
        /**
         * Delete a customer lookup row.
         *
         * @param int $customer_id Customer ID.
         */
        public static function delete_customer($customer_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Customers\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Customers report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Customers\Stats {
    /**
     * REST API Reports customers stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Customers\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Customers\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('customers_count' => 'intval', 'avg_orders_count' => 'floatval', 'avg_total_spend' => 'floatval', 'avg_avg_order_value' => 'floatval');
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'customers_stats';
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'customers_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
    }
    /**
     * API\Reports\Customers\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Customers report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads {
    /**
     * REST API Reports downloads controller class.
     *
     * @extends Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/downloads';
        /**
         * Get items.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param Array $object Object data.
         * @return array        Links for the given post.
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Downloads\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_download_log';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'downloads';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array(
            'id' => 'intval',
            'date' => 'strval',
            'date_gmt' => 'strval',
            'download_id' => 'strval',
            // String because this can sometimes be a hash.
            'file_name' => 'strval',
            'product_id' => 'intval',
            'order_id' => 'intval',
            'user_id' => 'intval',
            'ip_address' => 'strval',
        );
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'downloads';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for downloads report.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns comma separated ids of included ip address, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_ip_addresses($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded ip address, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_ip_addresses($query_args)
        {
        }
        /**
         * Returns comma separated ids of included customers, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_customers($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded customers, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_customers($query_args)
        {
        }
        /**
         * Gets WHERE time clause of SQL request with date-related constraints.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         * @return string
         */
        protected function add_time_period_sql_params($query_args, $table_name)
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         */
        protected function add_order_by($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Files {
    /**
     * REST API Reports downloads files controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/downloads/files';
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads {
    /**
     * API\Reports\Downloads\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for downloads report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get downloads data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Stats {
    /**
     * REST API Reports downloads stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/downloads/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Downloads\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Downloads\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('download_count' => 'intval');
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'downloads_stats';
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'downloads_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Downloads\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Orders report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get revenue data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Export {
    /**
     * Reports Export controller.
     *
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/(?P<type>[a-z]+)/export';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_export_collection_params()
        {
        }
        /**
         * Get the Report Export's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_export_public_schema()
        {
        }
        /**
         * Get the Export status schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_export_status_public_schema()
        {
        }
        /**
         * Export data based on user request params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function export_items($request)
        {
        }
        /**
         * Export status based on user request params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function export_status($request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Import {
    /**
     * Reports Imports controller.
     *
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/import';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function import_permissions_check($request)
        {
        }
        /**
         * Import data based on user request params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function import_items($request)
        {
        }
        /**
         * Prepare request object as query args.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_import_collection_params()
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_import_public_schema()
        {
        }
        /**
         * Cancel all queued import actions.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function cancel_import($request)
        {
        }
        /**
         * Delete all imported items.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_imported_items($request)
        {
        }
        /**
         * Get the status of the current import.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_import_status($request)
        {
        }
        /**
         * Get the total orders and customers based on user supplied params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_import_totals($request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Orders {
    /**
     * REST API Reports orders controller class.
     *
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Reports_Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get products column export value.
         *
         * @param array $products Products from report row.
         * @return string
         */
        protected function _get_products($products)
        {
        }
        /**
         * Get coupons column export value.
         *
         * @param array $coupons Coupons from report row.
         * @return string
         */
        protected function _get_coupons($coupons)
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Orders\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_stats';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'orders';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('order_id' => 'intval', 'parent_id' => 'intval', 'date_created' => 'strval', 'date_created_gmt' => 'strval', 'status' => 'strval', 'customer_id' => 'intval', 'net_total' => 'floatval', 'total_sales' => 'floatval', 'num_items_sold' => 'intval', 'customer_type' => 'strval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'orders';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for orders report: coupons and products filters.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the order data.
         *
         * @param array $orders_data Orders data.
         * @param array $query_args  Query parameters.
         */
        protected function include_extended_info(&$orders_data, $query_args)
        {
        }
        /**
         * Returns the same array index by a given key
         *
         * @param array  $array Array to be looped over.
         * @param string $key Key of values used for new array.
         * @return array
         */
        protected function map_array_by_key($array, $key)
        {
        }
        /**
         * Get product IDs, names, and quantity from order IDs.
         *
         * @param array $order_ids Array of order IDs.
         * @return array
         */
        protected function get_products_by_order_ids($order_ids)
        {
        }
        /**
         * Get customer data from Order data.
         *
         * @param array $orders Array of orders data.
         * @return array
         */
        protected function get_customers_by_orders($orders)
        {
        }
        /**
         * Get coupon information from order IDs.
         *
         * @param array $order_ids Array of order IDs.
         * @return array
         */
        protected function get_coupons_by_order_ids($order_ids)
        {
        }
        /**
         * Get all statuses that have been synced.
         *
         * @return array Unique order statuses.
         */
        public static function get_all_statuses()
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Orders\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Get order data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Orders\Stats {
    /**
     * REST API Reports orders stats controller class.
     *
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Orders\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_stats';
        /**
         * Cron event name.
         */
        const CRON_EVENT = 'wc_order_stats_update';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'orders_stats';
        /**
         * Type for each column to cast values correctly later.
         *
         * @var array
         */
        protected $column_types = array('orders_count' => 'intval', 'num_items_sold' => 'intval', 'gross_sales' => 'floatval', 'total_sales' => 'floatval', 'coupons' => 'floatval', 'coupons_count' => 'intval', 'refunds' => 'floatval', 'taxes' => 'floatval', 'shipping' => 'floatval', 'net_revenue' => 'floatval', 'avg_items_per_order' => 'floatval', 'avg_order_value' => 'floatval', 'total_customers' => 'intval', 'products' => 'intval', 'segment_id' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'orders_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Updates the totals and intervals database queries with parameters used for Orders report: categories, coupons and order status.
         *
         * @param array $query_args      Query arguments supplied by the user.
         */
        protected function orders_stats_sql_filter($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Get unique products based on user time query
         *
         * @param string $from_clause       From clause with date query.
         * @param string $where_time_clause Where clause with date query.
         * @param string $where_clause      Where clause with date query.
         * @return integer Unique product count.
         */
        public function get_unique_product_count($from_clause, $where_time_clause, $where_clause)
        {
        }
        /**
         * Get unique coupons based on user time query
         *
         * @param string $from_clause       From clause with date query.
         * @param string $where_time_clause Where clause with date query.
         * @param string $where_clause      Where clause with date query.
         * @return integer Unique product count.
         */
        public function get_unique_coupon_count($from_clause, $where_time_clause, $where_clause)
        {
        }
        /**
         * Add order information to the lookup table when orders are created or modified.
         *
         * @param int $post_id Post ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order($post_id)
        {
        }
        /**
         * Update the database with stats data.
         *
         * @param WC_Order|WC_Order_Refund $order Order or refund to update row for.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function update($order)
        {
        }
        /**
         * Deletes the order stats when an order is deleted.
         *
         * @param int $post_id Post ID.
         */
        public static function delete_order($post_id)
        {
        }
        /**
         * Calculation methods.
         */
        /**
         * Get number of items sold among all orders.
         *
         * @param array $order WC_Order object.
         * @return int
         */
        protected static function get_num_items_sold($order)
        {
        }
        /**
         * Get the net amount from an order without shipping, tax, or refunds.
         *
         * @param array $order WC_Order object.
         * @return float
         */
        protected static function get_net_total($order)
        {
        }
        /**
         * Check to see if an order's customer has made previous orders or not
         *
         * @param array $order WC_Order object.
         * @return bool
         */
        public static function is_returning_customer($order)
        {
        }
        /**
         * Set a customer's first order and all others to returning.
         *
         * @param int $customer_id Customer ID.
         * @param int $order_id Order ID.
         */
        protected static function set_customer_first_order($customer_id, $order_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Orders\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Orders report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get revenue data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for product-related product-level segmenting query
         * (e.g. products sold, revenue from product X when segmenting by category).
         *
         * @param string $products_table Name of SQL table containing the product-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_product_level($products_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-related product-level segmenting query
         * (e.g. avg items per order when segmented by category).
         *
         * @param string $unique_orders_table Name of SQL table containing the order-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_order_level($unique_orders_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-level segmenting query
         * (e.g. avg items per order or Net Sales when segmented by coupons).
         *
         * @param string $order_stats_table Name of SQL table containing the order-level info.
         * @param array  $overrides Array of overrides for default column calculations.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function segment_selections_orders($order_stats_table, $overrides = array())
        {
        }
        /**
         * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
        {
        }
        /**
         * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * API\Reports\ParameterException class.
     */
    class ParameterException extends \WC_Data_Exception
    {
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\PerformanceIndicators {
    /**
     * REST API Reports Performance indicators controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/performance-indicators';
        /**
         * Contains a list of endpoints by report slug.
         *
         * @var array
         */
        protected $endpoints = array();
        /**
         * Contains a list of active Jetpack module slugs.
         *
         * @var array
         */
        protected $active_jetpack_modules = null;
        /**
         * Contains a list of allowed stats.
         *
         * @var array
         */
        protected $allowed_stats = array();
        /**
         * Contains a list of stat labels.
         *
         * @var array
         */
        protected $labels = array();
        /**
         * Contains a list of endpoints by url.
         *
         * @var array
         */
        protected $urls = array();
        /**
         * Contains a cache of retrieved stats data, grouped by report slug.
         *
         * @var array
         */
        protected $stats_data = array();
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get analytics report data and endpoints.
         */
        public function get_analytics_report_data()
        {
        }
        /**
         * Get active Jetpack modules.
         *
         * @return array List of active Jetpack module slugs.
         */
        public function get_active_jetpack_modules()
        {
        }
        /**
         * Set active Jetpack modules.
         *
         * @param array $modules List of active Jetpack module slugs.
         */
        public function set_active_jetpack_modules($modules)
        {
        }
        /**
         * Get active Jetpack modules and endpoints.
         */
        public function get_jetpack_modules_data()
        {
        }
        /**
         * Get information such as allowed stats, stat labels, and endpoint data from stats reports.
         *
         * @return WP_Error|True
         */
        private function get_indicator_data()
        {
        }
        /**
         * Returns a list of allowed performance indicators.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_allowed_items($request)
        {
        }
        /**
         * Sorts the list of stats. Sorted by custom arrangement.
         *
         * @see https://github.com/woocommerce/woocommerce-admin/issues/1282
         * @param object $a First item.
         * @param object $b Second item.
         * @return order
         */
        public function sort($a, $b)
        {
        }
        /**
         * Get report stats data, avoiding duplicate requests for stats that use the same endpoint.
         *
         * @param string $report Report slug to request data for.
         * @param array  $query_args Report query args.
         * @return WP_REST_Response|WP_Error Report stats data.
         */
        public function get_stats_data($report, $query_args)
        {
        }
        /**
         * Get all reports.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $stat_data    Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($stat_data, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \Automattic\WooCommerce\Admin\API\Reports\Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Returns the endpoint part of a stat request (prefix) and the actual stat total we want.
         * To allow extensions to namespace (example: fue/emails/sent), we break on the last forward slash.
         *
         * @param string $full_stat A stat request string like orders/avg_order_value or fue/emails/sent.
         * @return array Containing the prefix (endpoint) and suffix (stat).
         */
        private function get_stats_parts($full_stat)
        {
        }
        /**
         * Format the data returned from the API for given stats.
         *
         * @param array  $data Data from external endpoint.
         * @param string $stat Name of the stat.
         * @param string $report Name of the report.
         * @param string $chart Name of the chart.
         * @param array  $query_args Query args.
         * @return mixed
         */
        public function format_data_value($data, $stat, $report, $chart, $query_args)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get schema for the list of allowed performance indicators.
         *
         * @return array $schema
         */
        public function get_public_allowed_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Products {
    /**
     * REST API Reports products controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products';
        /**
         * Mapping between external parameter name and name used in query class.
         *
         * @var array
         */
        protected $param_mapping = array('products' => 'product_includes');
        /**
         * Get items.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param Array $object Object data.
         * @return array        Links for the given post.
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get stock status column export value.
         *
         * @param array $status Stock status from report row.
         * @return string
         */
        protected function _get_stock_status($status)
        {
        }
        /**
         * Get categories column export value.
         *
         * @param array $category_ids Category IDs from report row.
         * @return string
         */
        protected function _get_categories($category_ids)
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Products\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_product_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'products';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array(
            'date_start' => 'strval',
            'date_end' => 'strval',
            'product_id' => 'intval',
            'items_sold' => 'intval',
            'net_revenue' => 'floatval',
            'orders_count' => 'intval',
            // Extended attributes.
            'name' => 'strval',
            'price' => 'floatval',
            'image' => 'strval',
            'permalink' => 'strval',
            'stock_status' => 'strval',
            'stock_quantity' => 'intval',
            'low_stock_amount' => 'intval',
            'category_ids' => 'array_values',
            'variations' => 'array_values',
            'sku' => 'strval',
        );
        /**
         * Extended product attributes to include in the data.
         *
         * @var array
         */
        protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'stock_quantity', 'manage_stock', 'low_stock_amount', 'category_ids', 'variations', 'sku');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'products';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Fills FROM clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $arg_name   Target of the JOIN sql param.
         * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
         */
        protected function add_from_sql_params($query_args, $arg_name, $id_cell)
        {
        }
        /**
         * Updates the database query with parameters used for Products report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the product data with attributes specified by the extended_attributes.
         *
         * @param array $products_data Product data.
         * @param array $query_args  Query parameters.
         */
        protected function include_extended_info(&$products_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Create or update an entry in the wc_admin_order_product_lookup table for an order.
         *
         * @since 3.5.0
         * @param int $order_id Order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order_products($order_id)
        {
        }
        /**
         * Clean products data when an order is deleted.
         *
         * @param int $order_id Order ID.
         */
        public static function sync_on_order_delete($order_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Products\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats {
    /**
     * REST API Reports products stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products/stats';
        /**
         * Mapping between external parameter name and name used in query class.
         *
         * @var array
         */
        protected $param_mapping = array('products' => 'product_includes');
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Set the default results to 0 if API returns an empty array
         *
         * @param Mixed $results Report data.
         * @return object
         */
        public function set_default_report_data($results)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Products\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Products\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval', 'variations_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'products_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for Products Stats report: categories and order status.
         *
         * @param array $query_args       Query arguments supplied by the user.
         */
        protected function update_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @since 3.5.0
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Products\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for product-related product-level segmenting query
         * (e.g. products sold, revenue from product X when segmenting by category).
         *
         * @param string $products_table Name of SQL table containing the product-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_product_level($products_table)
        {
        }
        /**
         * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Revenue {
    /**
     * API\Reports\Revenue\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Revenue report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get revenue data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Revenue\Stats {
    /**
     * REST API Reports revenue stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/revenue/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get report items for export.
         *
         * Returns only the interval data.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_export_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Stock {
    /**
     * REST API Reports stock controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/stock';
        /**
         * Maps query arguments from the REST request.
         *
         * @param  WP_REST_Request $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Query products.
         *
         * @param  array $query_args Query args.
         * @return array
         */
        protected function get_products($query_args)
        {
        }
        /**
         * Get all reports.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Add in conditional search filters for products.
         *
         * @param string $where Where clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_filter($where, $wp_query)
        {
        }
        /**
         * Join posts meta tables when product search or low stock query is present.
         *
         * @param string $join Join clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_join($join, $wp_query)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @param string $sql SQL join.
         * @return string
         */
        protected static function append_product_sorting_table_join($sql)
        {
        }
        /**
         * Group by post ID to prevent duplicates.
         *
         * @param string $groupby Group by clause used to organize posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_group_by($groupby, $wp_query)
        {
        }
        /**
         * Custom orderby clauses using the lookup tables.
         *
         * @param array  $args Query args.
         * @param object $wp_query WP_Query object.
         * @return array
         */
        public static function add_wp_query_orderby($args, $wp_query)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  WC_Product      $product  Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($product, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param  WC_Product $product Object data.
         * @return array
         */
        protected function prepare_links($product)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Stock\Stats {
    /**
     * REST API Reports stock stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/stock/stats';
        /**
         * Get Stock Status Totals.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  WC_Product      $report  Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Stock\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Get stock counts for the whole store.
         *
         * @param array $query Not used for the stock stats data store, but needed for the interface.
         * @return array Array of counts.
         */
        public function get_data($query)
        {
        }
        /**
         * Get low stock count (products with stock < low stock amount, but greater than no stock amount).
         *
         * @return int Low stock count.
         */
        private function get_low_stock_count()
        {
        }
        /**
         * Get count for the passed in stock status.
         *
         * @param  string $status Status slug.
         * @return int Count.
         */
        private function get_count($status)
        {
        }
        /**
         * Get product count for the store.
         *
         * @return int Product count.
         */
        private function get_product_count()
        {
        }
    }
    /**
     * API\Reports\Stock\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Taxes {
    /**
     * REST API Reports taxes controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/taxes';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Reports_Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Taxes\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_tax_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'taxes';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('tax_rate_id' => 'intval', 'name' => 'strval', 'tax_rate' => 'floatval', 'country' => 'strval', 'state' => 'strval', 'priority' => 'intval', 'total_tax' => 'floatval', 'order_tax' => 'floatval', 'shipping_tax' => 'floatval', 'orders_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'taxes';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Fills FROM clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args          Query arguments supplied by the user.
         * @param string $order_status_filter Order status subquery.
         */
        protected function add_from_sql_params($query_args, $order_status_filter)
        {
        }
        /**
         * Updates the database query with parameters used for Taxes report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Create or update an entry in the wc_order_tax_lookup table for an order.
         *
         * @param int $order_id Order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order_taxes($order_id)
        {
        }
        /**
         * Clean taxes data when an order is deleted.
         *
         * @param int $order_id Order ID.
         */
        public static function sync_on_order_delete($order_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Taxes\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Taxes report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats {
    /**
     * REST API Reports taxes stats controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/taxes/stats';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Set the default results to 0 if API returns an empty array
         *
         * @param Mixed $results Report data.
         * @return object
         */
        public function set_default_report_data($results)
        {
        }
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Taxes\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_tax_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'taxes_stats';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('tax_codes' => 'intval', 'total_tax' => 'floatval', 'order_tax' => 'floatval', 'shipping_tax' => 'floatval', 'orders_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'taxes_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for Taxes Stats report
         *
         * @param array $query_args       Query arguments supplied by the user.
         */
        protected function update_sql_query_params($query_args)
        {
        }
        /**
         * Get taxes associated with a store.
         *
         * @param array $args Array of args to filter the query by. Supports `include`.
         * @return array An array of all taxes.
         */
        public static function get_taxes($args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Taxes\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Taxes report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get tax stats data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for order-related order-level segmenting query (e.g. tax_rate_id).
         *
         * @param string $lookup_table Name of SQL table containing the order-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_order_level($lookup_table)
        {
        }
        /**
         * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
        {
        }
        /**
         * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class TimeInterval
    {
        /**
         * Format string for ISO DateTime formatter.
         *
         * @var string
         */
        public static $iso_datetime_format = 'Y-m-d\\TH:i:s';
        /**
         * Format string for use in SQL queries.
         *
         * @var string
         */
        public static $sql_datetime_format = 'Y-m-d H:i:s';
        /**
         * Converts local datetime to GMT/UTC time.
         *
         * @param string $datetime_string String representation of local datetime.
         * @return DateTime
         */
        public static function convert_local_datetime_to_gmt($datetime_string)
        {
        }
        /**
         * Returns default 'before' parameter for the reports.
         *
         * @return DateTime
         */
        public static function default_before()
        {
        }
        /**
         * Returns default 'after' parameter for the reports.
         *
         * @return DateTime
         */
        public static function default_after()
        {
        }
        /**
         * Returns date format to be used as grouping clause in SQL.
         *
         * @param string $time_interval Time interval.
         * @param string $table_name Name of the db table relevant for the date constraint.
         * @return mixed
         */
        public static function db_datetime_format($time_interval, $table_name)
        {
        }
        /**
         * Returns quarter for the DateTime.
         *
         * @param DateTime $datetime Local date & time.
         * @return int|null
         */
        public static function quarter($datetime)
        {
        }
        /**
         * Returns simple week number for the DateTime, for week starting on $first_day_of_week.
         *
         * The first week of the year is considered to be the week containing January 1.
         * The second week starts on the next $first_day_of_week.
         *
         * @param DateTime $datetime          Local date for which the week number is to be calculated.
         * @param int      $first_day_of_week 0 for Sunday to 6 for Saturday.
         * @return int
         */
        public static function simple_week_number($datetime, $first_day_of_week)
        {
        }
        /**
         * Returns ISO 8601 week number for the DateTime, if week starts on Monday,
         * otherwise returns simple week number.
         *
         * @see TimeInterval::simple_week_number()
         *
         * @param DateTime $datetime          Local date for which the week number is to be calculated.
         * @param int      $first_day_of_week 0 for Sunday to 6 for Saturday.
         * @return int
         */
        public static function week_number($datetime, $first_day_of_week)
        {
        }
        /**
         * Returns time interval id for the DateTime.
         *
         * @param string   $time_interval Time interval type (week, day, etc).
         * @param DateTime $datetime      Date & time.
         * @return string
         */
        public static function time_interval_id($time_interval, $datetime)
        {
        }
        /**
         * Calculates number of time intervals between two dates, closed interval on both sides.
         *
         * @param DateTime $start_datetime Start date & time.
         * @param DateTime $end_datetime End date & time.
         * @param string   $interval Time interval increment, e.g. hour, day, week.
         *
         * @return int
         */
        public static function intervals_between($start_datetime, $end_datetime, $interval)
        {
        }
        /**
         * Returns a new DateTime object representing the next hour start/previous hour end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_hour_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns a new DateTime object representing the next day start, or previous day end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_day_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns DateTime object representing the next week start, or previous week end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_week_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns a new DateTime object representing the next month start, or previous month end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_month_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns a new DateTime object representing the next quarter start, or previous quarter end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_quarter_start($datetime, $reversed = false)
        {
        }
        /**
         * Return a new DateTime object representing the next year start, or previous year end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_year_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns beginning of next time interval for provided DateTime.
         *
         * E.g. for current DateTime, beginning of next day, week, quarter, etc.
         *
         * @param DateTime $datetime      Date and time.
         * @param string   $time_interval Time interval, e.g. week, day, hour.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function iterate($datetime, $time_interval, $reversed = false)
        {
        }
        /**
         * Returns expected number of items on the page in case of date ordering.
         *
         * @param int $expected_interval_count Expected number of intervals in total.
         * @param int $items_per_page          Number of items per page.
         * @param int $page_no                 Page number.
         *
         * @return float|int
         */
        public static function expected_intervals_on_page($expected_interval_count, $items_per_page, $page_no)
        {
        }
        /**
         * Returns true if there are any intervals that need to be filled in the response.
         *
         * @param int    $expected_interval_count Expected number of intervals in total.
         * @param int    $db_records              Total number of records for given period in the database.
         * @param int    $items_per_page          Number of items per page.
         * @param int    $page_no                 Page number.
         * @param string $order                   asc or desc.
         * @param string $order_by                Column by which the result will be sorted.
         * @param int    $intervals_count         Number of records for given (possibly shortened) time interval.
         *
         * @return bool
         */
        public static function intervals_missing($expected_interval_count, $db_records, $items_per_page, $page_no, $order, $order_by, $intervals_count)
        {
        }
        /**
         * Normalize "*_between" parameters to "*_min" and "*_max" for numeric values
         * and "*_after" and "*_before" for date values.
         *
         * @param array        $request Query params from REST API request.
         * @param string|array $param_names One or more param names to handle. Should not include "_between" suffix.
         * @param bool         $is_date Boolean if the param is date is related.
         * @return array Normalized query values.
         */
        public static function normalize_between_params($request, $param_names, $is_date)
        {
        }
        /**
         * Validate a "*_between" range argument (an array with 2 numeric items).
         *
         * @param  mixed           $value Parameter value.
         * @param  WP_REST_Request $request REST Request.
         * @param  string          $param Parameter name.
         * @return WP_Error|boolean
         */
        public static function rest_validate_between_numeric_arg($value, $request, $param)
        {
        }
        /**
         * Validate a "*_between" range argument (an array with 2 date items).
         *
         * @param  mixed           $value Parameter value.
         * @param  WP_REST_Request $request REST Request.
         * @param  string          $param Parameter name.
         * @return WP_Error|boolean
         */
        public static function rest_validate_between_date_arg($value, $request, $param)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Variations {
    /**
     * REST API Reports products controller class.
     *
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/variations';
        /**
         * Mapping between external parameter name and name used in query class.
         *
         * @var array
         */
        protected $param_mapping = array('products' => 'product_includes');
        /**
         * Get items.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array $object Object data.
         * @return array        Links for the given post.
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get stock status column export value.
         *
         * @param array $status Stock status from report row.
         * @return string
         */
        protected function _get_stock_status($status)
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Variations\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_product_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'variations';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'variation_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'name' => 'strval', 'price' => 'floatval', 'image' => 'strval', 'permalink' => 'strval', 'sku' => 'strval');
        /**
         * Extended product attributes to include in the data.
         *
         * @var array
         */
        protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'stock_quantity', 'low_stock_amount', 'sku');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'variations';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Fills FROM clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $arg_name   Target of the JOIN sql param.
         */
        protected function add_from_sql_params($query_args, $arg_name)
        {
        }
        /**
         * Updates the database query with parameters used for Products report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         *
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the product data with attributes specified by the extended_attributes.
         *
         * @param array $products_data Product data.
         * @param array $query_args Query parameters.
         */
        protected function include_extended_info(&$products_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args Query parameters.
         *
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Variations\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace {
    /**
     * REST API Setting Options controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Setting_Options_V2_Controller extends \WC_REST_Controller
    {
        /**
         * WP REST API namespace/version.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'settings/(?P<group_id>[\\w-]+)';
        /**
         * Register routes.
         *
         * @since 3.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Return a single setting.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Return all settings in a group.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get all settings in a group.
         *
         * @since  3.0.0
         * @param string $group_id Group ID.
         * @return array|WP_Error
         */
        public function get_group_settings($group_id)
        {
        }
        /**
         * Returns a list of countries and states for use in the base location setting.
         *
         * @since  3.0.7
         * @return array Array of states and countries.
         */
        private function get_countries_and_states()
        {
        }
        /**
         * Get setting data.
         *
         * @since  3.0.0
         * @param string $group_id Group ID.
         * @param string $setting_id Setting ID.
         * @return stdClass|WP_Error
         */
        public function get_setting($group_id, $setting_id)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Update a single setting in a group.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare a single setting object for response.
         *
         * @since  3.0.0
         * @param object          $item Setting object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @since  3.0.0
         * @param string $setting_id Setting ID.
         * @param string $group_id Group ID.
         * @return array Links for the given setting.
         */
        protected function prepare_links($setting_id, $group_id)
        {
        }
        /**
         * Makes sure the current user has access to READ the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Filters out bad values from the settings array/filter so we
         * only return known values via the API.
         *
         * @since 3.0.0
         * @param  array $setting Settings.
         * @return array
         */
        public function filter_setting($setting)
        {
        }
        /**
         * For image_width, Crop can return "0" instead of false -- so we want
         * to make sure we return these consistently the same we accept them.
         *
         * @todo remove in 4.0
         * @since 3.0.0
         * @param  array $setting Settings.
         * @return array
         */
        public function cast_image_width($setting)
        {
        }
        /**
         * Callback for allowed keys for each setting response.
         *
         * @since  3.0.0
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_setting_keys($key)
        {
        }
        /**
         * Boolean for if a setting type is a valid supported setting type.
         *
         * @since  3.0.0
         * @param  string $type Type.
         * @return bool
         */
        public function is_setting_type_valid($type)
        {
        }
        /**
         * Get the settings schema, conforming to JSON Schema.
         *
         * @since 3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Setting Options controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Setting_Options_V2_Controller
     */
    class WC_REST_Setting_Options_Controller extends \WC_REST_Setting_Options_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get setting data.
         *
         * @param string $group_id Group ID.
         * @param string $setting_id Setting ID.
         * @return stdClass|WP_Error
         */
        public function get_setting($group_id, $setting_id)
        {
        }
        /**
         * Callback for allowed keys for each setting response.
         *
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_setting_keys($key)
        {
        }
        /**
         * Get all settings in a group.
         *
         * @param string $group_id Group ID.
         * @return array|WP_Error
         */
        public function get_group_settings($group_id)
        {
        }
        /**
         * Returns a list of countries and states for use in the base location setting.
         *
         * @since  3.0.7
         * @return array Array of states and countries.
         */
        private function get_countries_and_states()
        {
        }
        /**
         * Get the settings schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Setting Options controller.
     *
     * @extends WC_REST_Setting_Options_Controller
     */
    class SettingOptions extends \WC_REST_Setting_Options_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Invalidates API cache when updating settings options.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
    }
}
namespace {
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Taxes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'taxes';
        /**
         * Register the routes for taxes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all taxes.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Take tax data from the request and return the updated or newly created rate.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @param stdClass|null $current Existing tax object.
         * @return object
         */
        protected function create_or_update_tax($request, $current = \null)
        {
        }
        /**
         * Create a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single tax output for response.
         *
         * @param stdClass $tax Tax object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($tax, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $tax Tax object.
         * @return array Links for the given tax.
         */
        protected function prepare_links($tax)
        {
        }
        /**
         * Get the Taxes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Taxes_V1_Controller
     */
    class WC_REST_Taxes_V2_Controller extends \WC_REST_Taxes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Taxes_V2_Controller
     */
    class WC_REST_Taxes_Controller extends \WC_REST_Taxes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Taxes controller.
     *
     * @extends WC_REST_Taxes_Controller
     */
    class Taxes extends \WC_REST_Taxes_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get all taxes and allow filtering by tax code.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
    }
    /**
     * Themes controller.
     *
     * @extends WC_REST_Data_Controller
     */
    class Themes extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'themes';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to edit upload plugins/themes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function upload_theme_permissions_check($request)
        {
        }
        /**
         * Upload and install a theme.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function upload_theme($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * \Automattic\WooCommerce\Admin\CategoryLookup class.
     */
    class CategoryLookup
    {
        /**
         * Stores changes to categories we need to sync.
         *
         * @var array
         */
        protected $edited_product_cats = array();
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Init hooks.
         */
        public function init()
        {
        }
        /**
         * Regenerate all lookup table data.
         */
        public function regenerate()
        {
        }
        /**
         * Store edits so we know when the parent ID changes.
         *
         * @param int $category_id Term ID being edited.
         */
        public function before_edit($category_id)
        {
        }
        /**
         * When a product category gets edited, see if we need to sync the table.
         *
         * @param int $category_id Term ID being edited.
         */
        public function on_edit($category_id)
        {
        }
        /**
         * Delete lookup table data from a tree.
         *
         * @param int $category_id Category ID to delete.
         * @param int $category_tree_id Tree to delete from.
         * @return void
         */
        protected function delete($category_id, $category_tree_id)
        {
        }
        /**
         * Updates lookup table data for a category by ID.
         *
         * @param int $category_id Category ID to update.
         */
        protected function update($category_id)
        {
        }
        /**
         * Get category lookup table values to insert.
         *
         * @param int $category_id Category ID to insert.
         * @param int $category_tree_id Tree to insert into.
         * @return string
         */
        protected function get_insert_sql($category_id, $category_tree_id)
        {
        }
        /**
         * Used to construct insert query recursively.
         *
         * @param  array $inserts Array of data to insert.
         * @param  array $terms   Terms to insert.
         * @param  array $parents Parent IDs the terms belong to.
         */
        protected function get_term_insert_values(&$inserts, $terms, $parents = array())
        {
        }
        /**
         * Convert flat terms array into nested array.
         *
         * @param array   $hierarchy Array to put terms into.
         * @param array   $terms Array of terms (id=>parent).
         * @param integer $parent Parent ID.
         */
        protected function unflatten_terms(&$hierarchy, &$terms, $parent = 0)
        {
        }
        /**
         * Get category descendants.
         *
         * @param int $category_id The category ID to lookup.
         * @return array
         */
        protected function get_descendants($category_id)
        {
        }
        /**
         * Return all ancestor category ids for a category.
         *
         * @param int $category_id The category ID to lookup.
         * @return array
         */
        protected function get_ancestors($category_id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\DateTimeProvider {
    /**
     * DateTime Provider Interface.
     */
    interface DateTimeProviderInterface
    {
        /**
         * Returns the current DateTime.
         *
         * @return DateTime
         */
        public function get_now();
    }
    /**
     * Current DateTime Provider.
     *
     * Uses the current DateTime.
     */
    class CurrentDateTimeProvider implements \Automattic\WooCommerce\Admin\DateTimeProvider\DateTimeProviderInterface
    {
        /**
         * Returns the current DateTime.
         *
         * @return DateTime
         */
        public function get_now()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * WC_Admin_Events Class.
     */
    class Events
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Cron event handlers.
         */
        public function init()
        {
        }
        /**
         * Daily events to run.
         *
         * Note: WC_Admin_Notes_Order_Milestones::other_milestones is hooked to this as well.
         */
        public function do_wc_admin_daily()
        {
        }
    }
    /**
     * Feature plugin main class.
     *
     * @internal This file will not be bundled with woo core, only the feature plugin.
     * @internal Note this is not called WC_Admin due to a class already existing in core with that name.
     */
    class FeaturePlugin
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Init the feature plugin, only if we can detect both Gutenberg and WooCommerce.
         */
        public function init()
        {
        }
        /**
         * Install DB and create cron events when activated.
         *
         * @return void
         */
        public function on_activation()
        {
        }
        /**
         * Remove WooCommerce Admin scheduled actions on deactivate.
         *
         * @return void
         */
        public function on_deactivation()
        {
        }
        /**
         * Setup plugin once all other plugins are loaded.
         *
         * @return void
         */
        public function on_plugins_loaded()
        {
        }
        /**
         * Define Constants.
         */
        protected function define_constants()
        {
        }
        /**
         * Load Localisation files.
         */
        protected function load_plugin_textdomain()
        {
        }
        /**
         * Include WC Admin classes.
         */
        public function includes()
        {
        }
        /**
         * Set up our admin hooks and plugin loader.
         */
        protected function hooks()
        {
        }
        /**
         * Get an array of dependency error messages.
         *
         * @return array
         */
        protected function get_dependency_errors()
        {
        }
        /**
         * Returns true if all dependencies for the wc-admin plugin are loaded.
         *
         * @return bool
         */
        public function has_satisfied_dependencies()
        {
        }
        /**
         * Deactivates this plugin.
         */
        public function deactivate_self()
        {
        }
        /**
         * Notify users of the plugin requirements.
         */
        public function render_dependencies_notice()
        {
        }
        /**
         * Overwrites the allowed features array using a local `feature-config.php` file.
         *
         * @param array $features Array of feature slugs.
         */
        public function replace_supported_features($features)
        {
        }
        /**
         * Adds a menu item for the wc-admin devdocs.
         */
        public function register_devdocs_page()
        {
        }
        /**
         * Define constant if not already set.
         *
         * @param string      $name  Constant name.
         * @param string|bool $value Constant value.
         */
        protected function define($name, $value)
        {
        }
        /**
         * Prevent cloning.
         */
        private function __clone()
        {
        }
        /**
         * Prevent unserializing.
         */
        private function __wakeup()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Features {
    /**
     * Contains backend logic for the activity panel feature.
     */
    class ActivityPanels
    {
        /**
         * Class instance.
         *
         * @var ActivityPanels instance
         */
        protected static $instance = null;
        /**
         * Low Stock Transient Name.
         */
        const LOW_STOCK_TRANSIENT_NAME = 'woocommerce_admin_low_out_of_stock_count';
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Adds fields so that we can store activity panel last read and open times.
         *
         * @param array $user_data_fields User data fields.
         * @return array
         */
        public function add_user_data_fields($user_data_fields)
        {
        }
        /**
         * Determines if there are out of stock or low stock products.
         *
         * @return boolean
         */
        public function has_low_stock_products()
        {
        }
        /**
         * Clears transient for out of stock indicator
         *
         * @return boolean
         */
        public static function clear_low_out_of_stock_count_transient()
        {
        }
        /**
         * Add alert count to the component settings.
         *
         * @param array $settings Component settings.
         */
        public function component_settings($settings)
        {
        }
    }
    /**
     * Contains backend logic for the Analytics feature.
     */
    class Analytics
    {
        /**
         * Clear cache tool identifier.
         */
        const CACHE_TOOL_ID = 'clear_woocommerce_analytics_cache';
        /**
         * Class instance.
         *
         * @var Analytics instance
         */
        protected static $instance = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Preload data from the countries endpoint.
         *
         * @param array $endpoints Array of preloaded endpoints.
         * @return array
         */
        public function add_preload_endpoints($endpoints)
        {
        }
        /**
         * Adds fields so that we can store user preferences for the columns to display on a report.
         *
         * @param array $user_data_fields User data fields.
         * @return array
         */
        public function add_user_data_fields($user_data_fields)
        {
        }
        /**
         * Register the cache clearing tool on the WooCommerce > Status > Tools page.
         *
         * @param array $debug_tools Available debug tool registrations.
         * @return array Filtered debug tool registrations.
         */
        public function register_cache_clear_tool($debug_tools)
        {
        }
        /**
         * Registers report pages.
         */
        public function register_pages()
        {
        }
        /**
         * "Clear" analytics cache by invalidating it.
         */
        public function run_clear_cache_tool()
        {
        }
    }
    /**
     * Contains backend logic for the dashboard feature.
     */
    class AnalyticsDashboard
    {
        /**
         * Menu slug.
         */
        const MENU_SLUG = 'wc-admin';
        /**
         * Class instance.
         *
         * @var AnalyticsDashboard instance
         */
        protected static $instance = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Preload data from API endpoints.
         *
         * @param array $endpoints Array of preloaded endpoints.
         * @return array
         */
        public function add_preload_endpoints($endpoints)
        {
        }
        /**
         * Adds fields so that we can store performance indicators, row settings, and chart type settings for users.
         *
         * @param array $user_data_fields User data fields.
         * @return array
         */
        public function add_user_data_fields($user_data_fields)
        {
        }
        /**
         * Preload options to prime state of the application.
         *
         * @param array $options Array of options to preload.
         * @return array
         */
        public function preload_options($options)
        {
        }
        /**
         * Registers dashboard page.
         */
        public function register_page()
        {
        }
        /**
         * Update the WooCommerce menu structure to make our main dashboard/handler
         * the top level link for 'WooCommerce'.
         */
        public function update_link_structure()
        {
        }
        /**
         * Gets an array of plugins that can be installed & activated via the home screen.
         *
         * @param array $plugins Array of plugin slugs to be allowed.
         *
         * @return array
         */
        public static function get_homescreen_allowed_plugins($plugins)
        {
        }
    }
    /**
     * CouponsMovedTrait trait.
     */
    trait CouponsMovedTrait
    {
        /**
         * The GET query key for the legacy menu.
         *
         * @var string
         */
        protected static $query_key = 'legacy_coupon_menu';
        /**
         * The key for storing an option in the DB.
         *
         * @var string
         */
        protected static $option_key = 'wc_admin_show_legacy_coupon_menu';
        /**
         * Get the URL for the legacy coupon management.
         *
         * @return string The unescaped URL for the legacy coupon management page.
         */
        protected static function get_legacy_coupon_url()
        {
        }
        /**
         * Get the URL for the coupon management page.
         *
         * @param array $args Additional URL query arguments.
         *
         * @return string
         */
        protected static function get_coupon_url($args = [])
        {
        }
        /**
         * Get the new URL for managing coupons.
         *
         * @param string $page The management page.
         *
         * @return string
         */
        protected static function get_management_url($page)
        {
        }
        /**
         * Get the WC Admin path for the marking page.
         *
         * @return string
         */
        protected static function get_marketing_path()
        {
        }
        /**
         * Whether we should display the legacy coupon menu item.
         *
         * @return bool
         */
        protected static function should_display_legacy_menu()
        {
        }
        /**
         * Set whether we should display the legacy coupon menu item.
         *
         * @param bool $display Whether the menu should be displayed or not.
         */
        protected static function display_legacy_menu($display = false)
        {
        }
    }
    /**
     * Contains backend logic for the Coupons feature.
     */
    class Coupons
    {
        use \Automattic\WooCommerce\Admin\Features\CouponsMovedTrait;
        /**
         * Class instance.
         *
         * @var Coupons instance
         */
        protected static $instance = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Maybe add menu item back in original spot to help people transition
         */
        public function maybe_add_coupon_menu_redirect()
        {
        }
        /**
         * Call back for transition menu item
         */
        public function coupon_menu_moved()
        {
        }
        /**
         * Modify registered post type shop_coupon
         *
         * @param array $args Array of post type parameters.
         *
         * @return array the filtered parameters.
         */
        public function move_coupons($args)
        {
        }
        /**
         * Undo WC modifications to $parent_file for 'shop_coupon'
         */
        public function fix_coupon_menu_highlight()
        {
        }
        /**
         * Maybe add our wc-admin coupon scripts if viewing coupon pages
         */
        public function maybe_add_marketing_coupon_script()
        {
        }
    }
    /**
     * Contains backend logic for the Marketing feature.
     */
    class Marketing
    {
        use \Automattic\WooCommerce\Admin\Features\CouponsMovedTrait;
        /**
         * Name of recommended plugins transient.
         *
         * @var string
         */
        const RECOMMENDED_PLUGINS_TRANSIENT = 'wc_marketing_recommended_plugins';
        /**
         * Name of knowledge base post transient.
         *
         * @var string
         */
        const KNOWLEDGE_BASE_TRANSIENT = 'wc_marketing_knowledge_base';
        /**
         * Class instance.
         *
         * @var Marketing instance
         */
        protected static $instance = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Add main marketing menu item.
         *
         * Uses priority of 9 so other items can easily be added at the default priority (10).
         */
        public function add_parent_menu_item()
        {
        }
        /**
         * Registers report pages.
         */
        public function register_pages()
        {
        }
        /**
         * Register the main Marketing page, which is Marketing > Overview.
         *
         * This is done separately because we need to ensure the page is registered properly and
         * that the link is done properly. For some reason the normal page registration process
         * gives us the wrong menu link.
         */
        protected function register_overview_page()
        {
        }
        /**
         * Preload options to prime state of the application.
         *
         * @param array $options Array of options to preload.
         * @return array
         */
        public function preload_options($options)
        {
        }
        /**
         * Add settings for marketing feature.
         *
         * @param array $settings Component settings.
         * @return array
         */
        public function component_settings($settings)
        {
        }
        /**
         * Load recommended plugins from WooCommerce.com
         *
         * @return array
         */
        public function get_recommended_plugins()
        {
        }
        /**
         * Load knowledge base posts from WooCommerce.com
         *
         * @param string $category Category of posts to retrieve.
         * @return array
         */
        public function get_knowledge_base_posts($category)
        {
        }
    }
    /**
     * Contains backend logic for the onboarding profile and checklist feature.
     */
    class Onboarding
    {
        /**
         * Class instance.
         *
         * @var Onboarding instance
         */
        protected static $instance = null;
        /**
         * Name of themes transient.
         *
         * @var string
         */
        const THEMES_TRANSIENT = 'wc_onboarding_themes';
        /**
         * Name of product data transient.
         *
         * @var string
         */
        const PRODUCT_DATA_TRANSIENT = 'wc_onboarding_product_data';
        /**
         * Profile data option name.
         */
        const PROFILE_DATA_OPTION = 'woocommerce_onboarding_profile';
        /**
         * Onboarding opt-in option name.
         */
        const OPT_IN_OPTION = 'woocommerce_onboarding_opt_in';
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Adds the ability to toggle the new onboarding experience on or off.
         */
        private function add_toggle_actions()
        {
        }
        /**
         * Add onboarding actions.
         */
        private function add_actions()
        {
        }
        /**
         * Add onboarding filters.
         */
        private function add_filters()
        {
        }
        /**
         * Send profile data to WooCommerce.com.
         */
        public static function send_profile_data()
        {
        }
        /**
         * Send profiler data on profiler change to completion.
         *
         * @param array $old_value Previous value.
         * @param array $value Current value.
         */
        public static function send_profile_data_on_update($old_value, $value)
        {
        }
        /**
         * Send profiler data after a site is connected.
         */
        public static function send_profile_data_on_connect()
        {
        }
        /**
         * Redirect the old onboarding wizard to the profiler.
         */
        public static function redirect_old_onboarding()
        {
        }
        /**
         * Returns true if the profiler should be displayed (not completed and not skipped).
         *
         * @return bool
         */
        public static function should_show_profiler()
        {
        }
        /**
         * Returns true if the task list should be displayed (not completed or hidden off the dashboard).
         *
         * @return bool
         */
        public static function should_show_tasks()
        {
        }
        /**
         * Get a list of allowed industries for the onboarding wizard.
         *
         * @return array
         */
        public static function get_allowed_industries()
        {
        }
        /**
         * Get a list of allowed product types for the onboarding wizard.
         *
         * @return array
         */
        public static function get_allowed_product_types()
        {
        }
        /**
         * Sort themes returned from WooCommerce.com
         *
         * @param  array $themes Array of themes from WooCommerce.com.
         * @return array
         */
        public static function sort_woocommerce_themes($themes)
        {
        }
        /**
         * Get a list of themes for the onboarding wizard.
         *
         * @return array
         */
        public static function get_themes()
        {
        }
        /**
         * Get theme data used in onboarding theme browser.
         *
         * @param WP_Theme $theme Theme to gather data from.
         * @return array
         */
        public static function get_theme_data($theme)
        {
        }
        /**
         * Add theme data to response from themes controller.
         *
         * @param WP_REST_Response $response Rest response.
         * @return WP_REST_Response
         */
        public static function add_uploaded_theme_data($response)
        {
        }
        /**
         * Check if theme has declared support for WooCommerce.
         *
         * @param WP_Theme $theme Theme to check.
         * @return bool
         */
        public static function has_woocommerce_support($theme)
        {
        }
        /**
         * Append dynamic product data from API.
         *
         * @param array $product_types Array of product types.
         * @return array
         */
        public static function append_product_data($product_types)
        {
        }
        /**
         * Delete the stored themes transient.
         */
        public static function delete_themes_transient()
        {
        }
        /**
         * Add profiler items to component settings.
         *
         * @param array $settings Component settings.
         */
        public function component_settings($settings)
        {
        }
        /**
         * Preload options to prime state of the application.
         *
         * @param array $options Array of options to preload.
         * @return array
         */
        public function preload_options($options)
        {
        }
        /**
         * Preload WC setting options to prime state of the application.
         *
         * @param array $options Array of options to preload.
         * @return array
         */
        public function preload_settings($options)
        {
        }
        /**
         * Returns a list of Stripe supported countries. This method can be removed once merged to core.
         *
         * @return array
         */
        private static function get_stripe_supported_countries()
        {
        }
        /**
         * Gets an array of plugins that can be installed & activated via the onboarding wizard.
         *
         * @param array $plugins Array of plugin slugs to be allowed.
         *
         * @return array
         * @todo Handle edgecase of where installed plugins may have versioned folder names (i.e. `jetpack-main/jetpack.php`).
         */
        public static function get_onboarding_allowed_plugins($plugins)
        {
        }
        /**
         * Gets an array of themes that can be installed & activated via the onboarding wizard.
         *
         * @return array
         */
        public static function get_allowed_themes()
        {
        }
        /**
         * Let the app know that we will be showing the onboarding route, so wp-admin elements should be hidden while loading.
         *
         * @param bool $is_loading Indicates if the `woocommerce-admin-is-loading` should be appended or not.
         * @return bool
         */
        public function is_loading($is_loading)
        {
        }
        /**
         * Instead of redirecting back to the payment settings page, we will redirect back to the payments task list with our status.
         *
         * @param string $location URL of redirect.
         * @param int    $status HTTP response status code.
         * @return string URL of redirect.
         */
        public function overwrite_paypal_redirect($location, $status)
        {
        }
        /**
         * Finishes the PayPal connection process by saving the correct settings.
         */
        public function finish_paypal_connect()
        {
        }
        /**
         * Instead of redirecting back to the payment settings page, we will redirect back to the payments task list with our status.
         *
         * @param string $location URL of redirect.
         * @param int    $status HTTP response status code.
         * @return string URL of redirect.
         */
        public function overwrite_square_redirect($location, $status)
        {
        }
        /**
         * Finishes the Square connection process by saving the correct settings.
         */
        public function finish_square_connect()
        {
        }
        /**
         * Update the existing help tab and add an option to enable the new onboarding experience.
         */
        public static function update_help_tab()
        {
        }
        /**
         * Reset the onboarding profiler and redirect to the profiler.
         */
        public static function enable_onboarding()
        {
        }
        /**
         * Track changes to the onboarding option.
         *
         * @param mixed  $mixed Option name or previous value if option previously existed.
         * @param string $value Value of the updated option.
         */
        public static function track_onboarding_toggle($mixed, $value)
        {
        }
        /**
         * Update the help tab setup link to reset the onboarding profiler.
         */
        public static function add_help_tab()
        {
        }
        /**
         * Allows quick access to testing the calypso parts of onboarding.
         */
        public static function calypso_tests()
        {
        }
        /**
         * Reset the onboarding profiler and redirect to the profiler.
         */
        public static function reset_profiler()
        {
        }
        /**
         * Reset the onboarding task list and redirect to the dashboard.
         */
        public static function reset_task_list()
        {
        }
        /**
         * Remove the install notice that prompts the user to visit the old onboarding setup wizard.
         *
         * @param bool   $show Show or hide the notice.
         * @param string $notice The slug of the notice.
         * @return bool
         */
        public static function remove_install_notice($show, $notice)
        {
        }
        /**
         * Redirects the user to the task list if the task list is enabled and finishing a wccom checkout.
         *
         * @todo Once URL params are added to the redirect, we can check those instead of the referer.
         */
        public static function redirect_wccom_install()
        {
        }
        /**
         * When updating WooCommerce, mark the profiler and task list complete.
         *
         * @todo The `maybe_enable_setup_wizard()` method should be revamped on onboarding enable in core.
         * See https://github.com/woocommerce/woocommerce/blob/1ca791f8f2325fe2ee0947b9c47e6a4627366374/includes/class-wc-install.php#L341
         */
        public static function maybe_mark_complete()
        {
        }
    }
    /**
     * Contains the logic for completing onboarding tasks.
     */
    class OnboardingTasks
    {
        /**
         * Class instance.
         *
         * @var OnboardingTasks instance
         */
        protected static $instance = null;
        /**
         * Name of the active task transient.
         *
         * @var string
         */
        const ACTIVE_TASK_TRANSIENT = 'wc_onboarding_active_task';
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue scripts and styles.
         */
        public function add_media_scripts()
        {
        }
        /**
         * Add task items to component settings.
         *
         * @param array $settings Component settings.
         * @return array
         */
        public function component_settings($settings)
        {
        }
        /**
         * Temporarily store the active task to persist across page loads when neccessary (such as publishing a product). Most tasks do not need to do this.
         */
        public static function set_active_task()
        {
        }
        /**
         * Get the name of the active task.
         *
         * @return string
         */
        public static function get_active_task()
        {
        }
        /**
         * Check for active task completion, and clears the transient.
         *
         * @return bool
         */
        public static function is_active_task_complete()
        {
        }
        /**
         * Check for task completion of a given task.
         *
         * @param string $task Name of task.
         * @return bool
         */
        public static function check_task_completion($task)
        {
        }
        /**
         * Hooks into the product page to add a notice to return to the task list if a product was added.
         *
         * @param string $hook Page hook.
         */
        public static function add_onboarding_product_notice_admin_script($hook)
        {
        }
        /**
         * Hooks into the post page to display a different success notice and sets the active page as the site's home page if visted from onboarding.
         *
         * @param string $hook Page hook.
         */
        public static function add_onboarding_homepage_notice_admin_script($hook)
        {
        }
        /**
         * Adds a notice to return to the task list when the save button is clicked on tax settings pages.
         */
        public static function add_onboarding_tax_notice_admin_script()
        {
        }
        /**
         * Adds a notice to return to the task list when the product importeris done running.
         *
         * @param string $hook Page hook.
         */
        public function add_onboarding_product_import_notice_admin_script($hook)
        {
        }
        /**
         * Get an array of countries that support automated tax.
         *
         * @return array
         */
        public static function get_automated_tax_supported_countries()
        {
        }
        /**
         * Records an event when all tasks are completed in the task list.
         *
         * @param mixed $old_value Old value.
         * @param mixed $new_value New value.
         */
        public static function track_completion($old_value, $new_value)
        {
        }
        /**
         * Records an event for individual task completion.
         *
         * @param mixed $old_value Old value.
         * @param mixed $new_value New value.
         */
        public static function track_task_completion($old_value, $new_value)
        {
        }
    }
    /**
     * Shows print shipping label banner on edit order page.
     */
    class ShippingLabelBanner
    {
        /**
         * Singleton for the display rules class
         *
         * @var ShippingLabelBannerDisplayRules
         */
        private $shipping_label_banner_display_rules;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Gets an array of plugins that can be installed & activated via shipping label prompt.
         *
         * @param array $plugins Array of plugin slugs to be allowed.
         *
         * @return array
         */
        public static function get_shipping_banner_allowed_plugins($plugins)
        {
        }
        /**
         * Check if WooCommerce Shipping makes sense for this merchant.
         *
         * @return bool
         */
        private function should_show_meta_box()
        {
        }
        /**
         * Add metabox to order page.
         *
         * @param string   $post_type current post type.
         * @param \WP_Post $post Current post object.
         */
        public function add_meta_boxes($post_type, $post)
        {
        }
        /**
         * Count shippable items
         *
         * @param \WC_Order $order Current order.
         * @return int
         */
        private function count_shippable_items(\WC_Order $order)
        {
        }
        /**
         * Adds JS to order page to render shipping banner.
         *
         * @param string $hook current page hook.
         */
        public function add_print_shipping_label_script($hook)
        {
        }
        /**
         * Render placeholder metabox.
         *
         * @param \WP_Post $post current post.
         * @param array    $args empty args.
         */
        public function meta_box($post, $args)
        {
        }
    }
    /**
     * Determines whether or not the Shipping Label Banner should be displayed
     */
    class ShippingLabelBannerDisplayRules
    {
        /**
         * Holds the installed Jetpack version.
         *
         * @var string
         */
        private $jetpack_version;
        /**
         * Whether or not the installed Jetpack is connected.
         *
         * @var bool
         */
        private $jetpack_connected;
        /**
         * Holds the installed WooCommerce Services version.
         *
         * @var string
         */
        private $wcs_version;
        /**
         * Whether or not there're plugins installed incompatible with the banner.
         *
         * @var bool
         */
        private $no_incompatible_plugins_installed;
        /**
         * Whether or not the WooCommerce Services ToS has been accepted.
         *
         * @var bool
         */
        private $wcs_tos_accepted;
        /**
         * Minimum supported Jetpack version.
         *
         * @var string
         */
        private $min_jetpack_version = '4.4';
        /**
         * Minimum supported WooCommerce Services version.
         *
         * @var string
         */
        private $min_wcs_version = '1.22.5';
        /**
         * Supported countries by USPS, see: https://webpmt.usps.gov/pmt010.cfm
         *
         * @var array
         */
        private $supported_countries = array('US', 'AS', 'PR', 'VI', 'GU', 'MP', 'UM', 'FM', 'MH');
        /**
         * Array of supported currency codes.
         *
         * @var array
         */
        private $supported_currencies = array('USD');
        /**
         * Constructor.
         *
         * @param string $jetpack_version Installed Jetpack version to check.
         * @param bool   $jetpack_connected Is Jetpack connected?.
         * @param string $wcs_version Installed WooCommerce Services version to check.
         * @param bool   $wcs_tos_accepted WooCommerce Services Terms of Service accepted?.
         * @param bool   $incompatible_plugins_installed Are there any incompatible plugins installed?.
         */
        public function __construct($jetpack_version, $jetpack_connected, $wcs_version, $wcs_tos_accepted, $incompatible_plugins_installed)
        {
        }
        /**
         * Determines whether banner is eligible for display (does not include a/b logic).
         */
        public function should_display_banner()
        {
        }
        /**
         * Checks if the banner was not dismissed by the user.
         *
         * @return bool
         */
        private function banner_not_dismissed()
        {
        }
        /**
         * Checks if jetpack is installed and active.
         *
         * @return bool
         */
        private function jetpack_installed_and_active()
        {
        }
        /**
         * Checks if Jetpack version is supported.
         *
         * @return bool
         */
        private function jetpack_up_to_date()
        {
        }
        /**
         * Checks if there's a shippable product in the current order.
         *
         * @return bool
         */
        private function order_has_shippable_products()
        {
        }
        /**
         * Checks if the store is in the US and has its default currency set to USD.
         *
         * @return bool
         */
        private function store_in_us_and_usd()
        {
        }
        /**
         * Checks if WooCommerce Services is not installed.
         *
         * @return bool
         */
        private function wcs_not_installed()
        {
        }
        /**
         * Checks if WooCommerce Services is up to date.
         */
        private function wcs_up_to_date()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * Install Class.
     */
    class Install
    {
        /**
         * Plugin version option name.
         */
        const VERSION_OPTION = 'woocommerce_admin_version';
        /**
         * DB updates and callbacks that need to be run per version.
         *
         * @var array
         */
        protected static $db_updates = array('0.20.1' => array('wc_admin_update_0201_order_status_index', 'wc_admin_update_0201_db_version'), '0.23.0' => array('wc_admin_update_0230_rename_gross_total', 'wc_admin_update_0230_db_version'), '0.25.1' => array('wc_admin_update_0251_remove_unsnooze_action', 'wc_admin_update_0251_db_version'), '1.1.0' => array('wc_admin_update_110_remove_facebook_note', 'wc_admin_update_110_db_version'), '1.3.0' => array('wc_admin_update_130_remove_dismiss_action_from_tracking_opt_in_note', 'wc_admin_update_130_db_version'), '1.4.0' => array('wc_admin_update_140_change_deactivate_plugin_note_type', 'wc_admin_update_140_db_version'));
        /**
         * Migrated option names mapping. New => old.
         *
         * @var array
         */
        protected static $migrated_options = array('woocommerce_onboarding_profile' => 'wc_onboarding_profile', 'woocommerce_admin_install_timestamp' => 'wc_admin_install_timestamp', 'woocommerce_onboarding_opt_in' => 'wc_onboarding_opt_in', 'woocommerce_admin_import_stats' => 'wc_admin_import_stats', 'woocommerce_admin_version' => 'wc_admin_version', 'woocommerce_admin_last_orders_milestone' => 'wc_admin_last_orders_milestone', 'woocommerce_admin-wc-helper-last-refresh' => 'wc-admin-wc-helper-last-refresh', 'woocommerce_admin_report_export_status' => 'wc_admin_report_export_status', 'woocommerce_task_list_complete' => 'woocommerce_task_list_complete', 'woocommerce_task_list_hidden' => 'woocommerce_task_list_hidden');
        /**
         * Hook in tabs.
         */
        public static function init()
        {
        }
        /**
         * Migrate option values to their new keys/names.
         */
        public static function migrate_options()
        {
        }
        /**
         * Check WC Admin version and run the updater is required.
         *
         * This check is done on all requests and runs if the versions do not match.
         */
        public static function check_version()
        {
        }
        /**
         * Install WC Admin.
         */
        public static function install()
        {
        }
        /**
         * Get database schema.
         *
         * @return string
         */
        protected static function get_schema()
        {
        }
        /**
         * Create database tables.
         */
        public static function create_tables()
        {
        }
        /**
         * Return a list of tables. Used to make sure all WC Admin tables are dropped
         * when uninstalling the plugin in a single site or multi site environment.
         *
         * @return array WC tables.
         */
        public static function get_tables()
        {
        }
        /**
         * Adds new tables.
         *
         * @param array $wc_tables List of WooCommerce tables.
         * @return array
         */
        public static function add_tables($wc_tables)
        {
        }
        /**
         * Uninstall tables when MU blog is deleted.
         *
         * @param array $tables List of tables that will be deleted by WP.
         *
         * @return string[]
         */
        public static function wpmu_drop_tables($tables)
        {
        }
        /**
         * Get list of DB update callbacks.
         *
         * @return array
         */
        public static function get_db_update_callbacks()
        {
        }
        /**
         * Is a DB update needed?
         *
         * @return boolean
         */
        public static function needs_db_update()
        {
        }
        /**
         * See if we need to show or run database updates during install.
         */
        private static function maybe_update_db_version()
        {
        }
        /**
         * Push all needed DB updates to the queue for processing.
         */
        private static function update()
        {
        }
        /**
         * Update WC Admin version to current.
         *
         * @param string|null $version New WooCommerce Admin DB version or null.
         */
        public static function update_db_version($version = null)
        {
        }
        /**
         * Schedule cron events.
         */
        public static function create_events()
        {
        }
        /**
         * Delete obsolete notes.
         */
        protected static function delete_obsolete_notes()
        {
        }
        /**
         * Create notes.
         */
        protected static function create_notes()
        {
        }
        /**
         * Drop WooCommerce Admin tables.
         *
         * @return void
         */
        public static function drop_tables()
        {
        }
    }
    /**
     * Loader Class.
     */
    class Loader
    {
        /**
         * App entry point.
         */
        const APP_ENTRY_POINT = 'wc-admin';
        /**
         * Class instance.
         *
         * @var Loader instance
         */
        protected static $instance = null;
        /**
         * An array of classes to load from the includes folder.
         *
         * @var array
         */
        protected static $classes = array();
        /**
         * WordPress capability required to use analytics features.
         *
         * @var string
         */
        protected static $required_capability = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
         */
        public function __construct()
        {
        }
        /**
         * Add custom tables to $wpdb object.
         */
        public static function define_tables()
        {
        }
        /**
         * Returns true if WooCommerce Admin is currently running in a development environment.
         */
        public static function is_dev()
        {
        }
        /**
         * Gets a build configured array of enabled WooCommerce Admin features/sections.
         *
         * @return array Enabled Woocommerce Admin features/sections.
         */
        public static function get_features()
        {
        }
        /**
         * Gets WordPress capability required to use analytics features.
         *
         * @return string
         */
        public static function get_analytics_capability()
        {
        }
        /**
         * Helper function indicating whether the current user has the required analytics capability.
         *
         * @return bool
         */
        public static function user_can_analytics()
        {
        }
        /**
         * Returns if a specific wc-admin feature is enabled.
         *
         * @param  string $feature Feature slug.
         * @return bool Returns true if the feature is enabled.
         */
        public static function is_feature_enabled($feature)
        {
        }
        /**
         * Returns if the onboarding feature of WooCommerce Admin should be enabled.
         *
         * While we preform an a/b test of onboarding, the feature will be enabled within the plugin build, but only if the user received the test/opted in.
         *
         * @return bool Returns true if the onboarding is enabled.
         */
        public static function is_onboarding_enabled()
        {
        }
        /**
         * Determines if a minified JS file should be served.
         *
         * @param  boolean $script_debug Only serve unminified files if script debug is on.
         * @return boolean If js asset should use minified version.
         */
        public static function should_use_minified_js_file($script_debug)
        {
        }
        /**
         * Gets the URL to an asset file.
         *
         * @param  string $file File name (without extension).
         * @param  string $ext File extension.
         * @return string URL to asset.
         */
        public static function get_url($file, $ext)
        {
        }
        /**
         * Gets the file modified time as a cache buster if we're in dev mode, or the plugin version otherwise.
         *
         * @param string $ext File extension.
         * @return string The cache buster value to use for the given file.
         */
        public static function get_file_version($ext)
        {
        }
        /**
         * Gets the path for the asset depending on file type.
         *
         * @param  string $ext File extension.
         * @return string Folder path of asset.
         */
        private static function get_path($ext)
        {
        }
        /**
         * Class loader for enabled WooCommerce Admin features/sections.
         */
        public static function load_features()
        {
        }
        /**
         * Registers a basic page handler for the app entry point.
         *
         * @todo The entry point for the embed needs moved to this class as well.
         */
        public static function register_page_handler()
        {
        }
        /**
         * Registers the profiler page.
         */
        public static function register_profiler_page()
        {
        }
        /**
         * Remove the menu item for the app entry point page.
         */
        public static function remove_app_entry_page_menu_item()
        {
        }
        /**
         * Registers all the neccessary scripts and styles to show the admin experience.
         */
        public static function register_scripts()
        {
        }
        /**
         * Generate a filename to cache translations from JS chunks.
         *
         * @param string $domain Text domain.
         * @param string $locale Locale being retrieved.
         * @return string Filename.
         */
        public static function get_combined_translation_filename($domain, $locale)
        {
        }
        /**
         * Find and combine translation chunk files.
         *
         * Only targets files that aren't represented by a registered script (e.g. not passed to wp_register_script()).
         *
         * @param string $lang_dir Path to language files.
         * @param string $domain Text domain.
         * @param string $locale Locale being retrieved.
         * @return array Combined translation chunk data.
         */
        public static function get_translation_chunk_data($lang_dir, $domain, $locale)
        {
        }
        /**
         * Load translation strings from language packs for dynamic imports.
         *
         * This function combines JSON translation data auto-extracted by GlotPress
         * from Webpack-generated JS chunks into a single file that can be used in
         * subsequent requests. This is necessary since the JS chunks are not known
         * to WordPress via wp_register_script() and wp_set_script_translations().
         *
         * @param string $original_translations JSON encoded translations object.
         * @param string $file File location for the script being translated.
         * @param string $handle Script handle.
         * @param string $domain Text domain.
         *
         * @return string JSON encoded translations object.
         */
        public static function load_script_translations($original_translations, $file, $handle, $domain)
        {
        }
        /**
         * Loads the required scripts on the correct pages.
         */
        public static function load_scripts()
        {
        }
        /**
         * Render a preload link tag for a dependency, optionally
         * checked against a provided allowlist.
         *
         * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
         *
         * @param WP_Dependency $dependency The WP_Dependency being preloaded.
         * @param string        $type Dependency type - 'script' or 'style'.
         * @param array         $allowlist Optional. List of allowed dependency handles.
         */
        public static function maybe_output_preload_link_tag($dependency, $type, $allowlist = array())
        {
        }
        /**
         * Output a preload link tag for dependencies (and their sub dependencies)
         * with an optional allowlist.
         *
         * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
         *
         * @param string $type Dependency type - 'script' or 'style'.
         * @param array  $allowlist Optional. List of allowed dependency handles.
         */
        public static function output_header_preload_tags_for_type($type, $allowlist = array())
        {
        }
        /**
         * Output preload link tags for all enqueued stylesheets and scripts.
         *
         * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
         */
        public static function output_header_preload_tags()
        {
        }
        /**
         * Returns true if we are on a JS powered admin page or
         * a "classic" (non JS app) powered admin page (an embedded page).
         */
        public static function is_admin_or_embed_page()
        {
        }
        /**
         * Returns true if we are on a JS powered admin page.
         */
        public static function is_admin_page()
        {
        }
        /**
         *  Returns true if we are on a "classic" (non JS app) powered admin page.
         *
         * TODO: See usage in `admin.php`. This needs refactored and implemented properly in core.
         */
        public static function is_embed_page()
        {
        }
        /**
         * Returns breadcrumbs for the current page.
         */
        private static function get_embed_breadcrumbs()
        {
        }
        /**
         * Outputs breadcrumbs via PHP for the initial load of an embedded page.
         *
         * @param array $section Section to create breadcrumb from.
         */
        private static function output_breadcrumbs($section)
        {
        }
        /**
         * Set up a div for the header embed to render into.
         * The initial contents here are meant as a place loader for when the PHP page initialy loads.
         */
        public static function embed_page_header()
        {
        }
        /**
         * Adds body classes to the main wp-admin wrapper, allowing us to better target elements in specific scenarios.
         *
         * @param string $admin_body_class Body class to add.
         */
        public static function add_admin_body_classes($admin_body_class = '')
        {
        }
        /**
         * Removes notices that should not be displayed on WC Admin pages.
         */
        public static function remove_notices()
        {
        }
        /**
         * Runs before admin notices action and hides them.
         */
        public static function inject_before_notices()
        {
        }
        /**
         * Runs after admin notices and closes div.
         */
        public static function inject_after_notices()
        {
        }
        /**
         * Edits Admin title based on section of wc-admin.
         *
         * @param string $admin_title Modifies admin title.
         * @todo Can we do some URL rewriting so we can figure out which page they are on server side?
         */
        public static function update_admin_title($admin_title)
        {
        }
        /**
         * Set up a div for the app to render into.
         */
        public static function page_wrapper()
        {
        }
        /**
         * Hooks extra neccessary data into the component settings array already set in WooCommerce core.
         *
         * @param array $settings Array of component settings.
         * @return array Array of component settings.
         */
        public static function add_component_settings($settings)
        {
        }
        /**
         * Format order statuses by removing a leading 'wc-' if present.
         *
         * @param array $statuses Order statuses.
         * @return array formatted statuses.
         */
        public static function get_order_statuses($statuses)
        {
        }
        /**
         * Get all order statuses present in analytics tables that aren't registered.
         *
         * @return array Unregistered order statuses.
         */
        public static function get_unregistered_order_statuses()
        {
        }
        /**
         * Register the admin settings for use in the WC REST API
         *
         * @param array $groups Array of setting groups.
         * @return array
         */
        public static function add_settings_group($groups)
        {
        }
        /**
         * Add WC Admin specific settings
         *
         * @param array $settings Array of settings in wc admin group.
         * @return array
         */
        public static function add_settings($settings)
        {
        }
        /**
         * Gets custom settings used for WC Admin.
         *
         * @param array $settings Array of settings to merge into.
         * @return array
         */
        public static function get_custom_settings($settings)
        {
        }
        /**
         * Return an object defining the currecy options for the site's current currency
         *
         * @return  array  Settings for the current currency {
         *     Array of settings.
         *
         *     @type string $code       Currency code.
         *     @type string $precision  Number of decimals.
         *     @type string $symbol     Symbol for currency.
         * }
         */
        public static function get_currency_settings()
        {
        }
        /**
         * Registers WooCommerce specific user data to the WordPress user API.
         */
        public static function register_user_data()
        {
        }
        /**
         * For all the registered user data fields (  Loader::get_user_data_fields ), fetch the data
         * for returning via the REST API.
         *
         * @param WP_User $user Current user.
         */
        public static function get_user_data_values($user)
        {
        }
        /**
         * For all the registered user data fields ( Loader::get_user_data_fields ), update the data
         * for the REST API.
         *
         * @param array   $values   The new values for the meta.
         * @param WP_User $user     The current user.
         * @param string  $field_id The field id for the user meta.
         */
        public static function update_user_data_values($values, $user, $field_id)
        {
        }
        /**
         * We store some WooCommerce specific user meta attached to users endpoint,
         * so that we can track certain preferences or values such as the inbox activity panel last open time.
         * Additional fields can be added in the function below, and then used via wc-admin's currentUser data.
         *
         * @return array Fields to expose over the WP user endpoint.
         */
        public static function get_user_data_fields()
        {
        }
        /**
         * Helper to update user data fields.
         *
         * @param int    $user_id  User ID.
         * @param string $field Field name.
         * @param mixed  $value  Field value.
         */
        public static function update_user_data_field($user_id, $field, $value)
        {
        }
        /**
         * Helper to retrive user data fields.
         *
         * Migrates old key prefixes as well.
         *
         * @param int    $user_id  User ID.
         * @param string $field Field name.
         * @return mixed The user field value.
         */
        public static function get_user_data_field($user_id, $field)
        {
        }
        /**
         * Injects wp-shared-settings as a dependency if it's present.
         */
        public static function inject_wc_settings_dependencies()
        {
        }
        /**
         * Delete woocommerce_onboarding_homepage_post_id field when the homepage is deleted
         *
         * @param int $post_id The deleted post id.
         */
        public static function delete_homepage($post_id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Marketing {
    /**
     * Installed Marketing Extensions class.
     */
    class InstalledExtensions
    {
        /**
         * Gets an array of plugin data for the "Installed marketing extensions" card.
         *
         * Valid extensions statuses are: installed, activated, configured
         */
        public static function get_data()
        {
        }
        /**
         * Get allowed plugins.
         *
         * @return array
         */
        public static function get_allowed_plugins()
        {
        }
        /**
         * Get AutomateWoo extension data.
         *
         * @return array|bool
         */
        protected static function get_automatewoo_extension_data()
        {
        }
        /**
         * Get MailChimp extension data.
         *
         * @return array|bool
         */
        protected static function get_mailchimp_extension_data()
        {
        }
        /**
         * Get Facebook extension data.
         *
         * @return array|bool
         */
        protected static function get_facebook_extension_data()
        {
        }
        /**
         * Get Google extension data.
         *
         * @return array|bool
         */
        protected static function get_google_extension_data()
        {
        }
        /**
         * Get Hubspot extension data.
         *
         * @return array|bool
         */
        protected static function get_hubspot_extension_data()
        {
        }
        /**
         * Get Amazon / Ebay extension data.
         *
         * @return array|bool
         */
        protected static function get_amazon_ebay_extension_data()
        {
        }
        /**
         * Get an array of basic data for a given extension.
         *
         * @param string $slug Plugin slug.
         *
         * @return array|false
         */
        protected static function get_extension_base_data($slug)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Notes {
    /**
     * WC Admin Note Data Store (Custom Tables)
     */
    class DataStore extends \WC_Data_Store_WP implements \WC_Object_Data_Store_Interface
    {
        /**
         * Method to create a new note in the database.
         *
         * @param WC_Admin_Note $note Admin note.
         */
        public function create(&$note)
        {
        }
        /**
         * Method to read a note.
         *
         * @param WC_Admin_Note $note Admin note.
         * @throws \Exception Throws exception when invalid data is found.
         */
        public function read(&$note)
        {
        }
        /**
         * Updates a note in the database.
         *
         * @param WC_Admin_Note $note Admin note.
         */
        public function update(&$note)
        {
        }
        /**
         * Deletes a note from the database.
         *
         * @param WC_Admin_Note $note Admin note.
         * @param array         $args Array of args to pass to the delete method (not used).
         */
        public function delete(&$note, $args = array())
        {
        }
        /**
         * Read actions from the database.
         *
         * @param WC_Admin_Note $note Admin note.
         */
        private function read_actions(&$note)
        {
        }
        /**
         * Save actions to the database.
         * This function clears old actions, then re-inserts new if any changes are found.
         *
         * @param WC_Admin_Note $note Note object.
         *
         * @return bool|void
         */
        private function save_actions(&$note)
        {
        }
        /**
         * Return an ordered list of notes.
         *
         * @param array $args Query arguments.
         * @return array An array of objects containing a note id.
         */
        public function get_notes($args = array())
        {
        }
        /**
         * Return a count of notes.
         *
         * @param string $type Comma separated list of note types.
         * @param string $status Comma separated list of statuses.
         * @return array An array of objects containing a note id.
         */
        public function get_notes_count($type = array(), $status = array())
        {
        }
        /**
         * Return where clauses for getting notes by status and type. For use in both the count and listing queries.
         *
         *  @param array $args Array of args to pass.
         * @return string Where clauses for the query.
         */
        public function get_notes_where_clauses($args = array())
        {
        }
        /**
         * Find all the notes with a given name.
         *
         * @param string $name Name to search for.
         * @return array An array of matching note ids.
         */
        public function get_notes_with_name($name)
        {
        }
    }
    /**
     * NoteTraits class.
     */
    trait NoteTraits
    {
        /**
         * Test how long WooCommerce Admin has been active.
         *
         * @param int $seconds Time in seconds to check.
         * @return bool Whether or not WooCommerce admin has been active for $seconds.
         */
        public static function wc_admin_active_for($seconds)
        {
        }
        /**
         * Check if the note has been previously added.
         */
        public static function note_exists()
        {
        }
        /**
         * Checks if a note can and should be added.
         *
         * @return bool
         */
        public static function can_be_added()
        {
        }
        /**
         * Add the note if it passes predefined conditions.
         */
        public static function possibly_add_note()
        {
        }
        /**
         * Alias this method for backwards compatibility.
         */
        public static function add_note()
        {
        }
        /**
         * Possibly delete the note, if it exists in the database. Note that this
         * is a hard delete, for where it doesn't make sense to soft delete or
         * action the note.
         */
        public static function possibly_delete_note()
        {
        }
    }
    /**
     * WC_Admin_Note class.
     */
    class WC_Admin_Note extends \WC_Data
    {
        // Note types.
        const E_WC_ADMIN_NOTE_ERROR = 'error';
        // used for presenting error conditions.
        const E_WC_ADMIN_NOTE_WARNING = 'warning';
        // used for presenting warning conditions.
        const E_WC_ADMIN_NOTE_UPDATE = 'update';
        // i.e. used when a new version is available.
        const E_WC_ADMIN_NOTE_INFORMATIONAL = 'info';
        // used for presenting informational messages.
        const E_WC_ADMIN_NOTE_MARKETING = 'marketing';
        // used for adding marketing messages.
        const E_WC_ADMIN_NOTE_SURVEY = 'survey';
        // used for adding survey messages.
        // Note status codes.
        const E_WC_ADMIN_NOTE_PENDING = 'pending';
        // the note is pending - hidden but not actioned.
        const E_WC_ADMIN_NOTE_UNACTIONED = 'unactioned';
        // the note has not yet been actioned by a user.
        const E_WC_ADMIN_NOTE_ACTIONED = 'actioned';
        // the note has had its action completed by a user.
        const E_WC_ADMIN_NOTE_SNOOZED = 'snoozed';
        // the note has been snoozed by a user.
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'admin-note';
        /**
         * Cache group.
         *
         * @var string
         */
        protected $cache_group = 'admin-note';
        /**
         * Note constructor. Loads note data.
         *
         * @param mixed $data Note data, object, or ID.
         */
        public function __construct($data = '')
        {
        }
        /**
         * Merge changes with data and clear.
         *
         * @since 3.0.0
         */
        public function apply_changes()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Helpers
        |--------------------------------------------------------------------------
        |
        | Methods for getting allowed types, statuses.
        |
        */
        /**
         * Get allowed types.
         *
         * @return array
         */
        public static function get_allowed_types()
        {
        }
        /**
         * Get allowed statuses.
         *
         * @return array
         */
        public static function get_allowed_statuses()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Getters
        |--------------------------------------------------------------------------
        |
        | Methods for getting data from the note object.
        |
        */
        /**
         * Returns all data for this object.
         *
         * Override \WC_Data::get_data() to avoid errantly including meta data
         * from ID collisions with the posts table.
         *
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Get note name.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_name($context = 'view')
        {
        }
        /**
         * Get note type.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_type($context = 'view')
        {
        }
        /**
         * Get note locale.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_locale($context = 'view')
        {
        }
        /**
         * Get note title.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_title($context = 'view')
        {
        }
        /**
         * Get note content.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_content($context = 'view')
        {
        }
        /**
         * Get note content data (i.e. values that would be needed for re-localization)
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_content_data($context = 'view')
        {
        }
        /**
         * Get note status.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_status($context = 'view')
        {
        }
        /**
         * Get note source.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_source($context = 'view')
        {
        }
        /**
         * Get date note was created.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return WC_DateTime|NULL object if the date is set or null if there is no date.
         */
        public function get_date_created($context = 'view')
        {
        }
        /**
         * Get date on which user should be reminded of the note (if any).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return WC_DateTime|NULL object if the date is set or null if there is no date.
         */
        public function get_date_reminder($context = 'view')
        {
        }
        /**
         * Get note snoozability.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return bool   Whether or not the note can be snoozed.
         */
        public function get_is_snoozable($context = 'view')
        {
        }
        /**
         * Get actions on the note (if any).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_actions($context = 'view')
        {
        }
        /**
         * Get note layout (the old notes won't have one).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_layout($context = 'view')
        {
        }
        /**
         * Get note image (if any).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_image($context = 'view')
        {
        }
        /**
         * Get deleted status.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_is_deleted($context = 'view')
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Setters
        |--------------------------------------------------------------------------
        |
        | Methods for setting note data. These should not update anything in the
        | database itself and should only change what is stored in the class
        | object.
        |
        */
        /**
         * Set note name.
         *
         * @param string $name Note name.
         */
        public function set_name($name)
        {
        }
        /**
         * Set note type.
         *
         * @param string $type Note type.
         */
        public function set_type($type)
        {
        }
        /**
         * Set note locale.
         *
         * @param string $locale Note locale.
         */
        public function set_locale($locale)
        {
        }
        /**
         * Set note title.
         *
         * @param string $title Note title.
         */
        public function set_title($title)
        {
        }
        /**
         * Set note icon (Deprecated).
         *
         * @param string $icon Note icon.
         */
        public function set_icon($icon)
        {
        }
        /**
         * Set note content.
         *
         * @param string $content Note content.
         */
        public function set_content($content)
        {
        }
        /**
         * Set note data for potential re-localization.
         *
         * @todo Set a default empty array? https://github.com/woocommerce/woocommerce-admin/pull/1763#pullrequestreview-212442921.
         * @param object $content_data Note data.
         */
        public function set_content_data($content_data)
        {
        }
        /**
         * Set note status.
         *
         * @param string $status Note status.
         */
        public function set_status($status)
        {
        }
        /**
         * Set note source.
         *
         * @param string $source Note source.
         */
        public function set_source($source)
        {
        }
        /**
         * Set date note was created. NULL is not allowed
         *
         * @param string|integer $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed.
         */
        public function set_date_created($date)
        {
        }
        /**
         * Set date admin should be reminded of note. NULL IS allowed
         *
         * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
         */
        public function set_date_reminder($date)
        {
        }
        /**
         * Set note snoozability.
         *
         * @param bool $is_snoozable Whether or not the note can be snoozed.
         */
        public function set_is_snoozable($is_snoozable)
        {
        }
        /**
         * Clear actions from a note.
         */
        public function clear_actions()
        {
        }
        /**
         * Set note layout.
         *
         * @param string $layout Note layout.
         */
        public function set_layout($layout)
        {
        }
        /**
         * Set note image.
         *
         * @param string $image Note image.
         */
        public function set_image($image)
        {
        }
        /**
         * Set note deleted status. NULL is not allowed
         *
         * @param bool $is_deleted Note deleted status.
         */
        public function set_is_deleted($is_deleted)
        {
        }
        /**
         * Add an action to the note
         *
         * @param string  $name           Action name (not presented to user).
         * @param string  $label          Action label (presented as button label).
         * @param string  $url            Action URL, if navigation needed. Optional.
         * @param string  $status         Status to transition parent Note to upon click. Defaults to 'actioned'.
         * @param boolean $primary        Whether or not this is the primary action. Defaults to false.
         * @param string  $actioned_text The label to display after the note has been actioned but before it is dismissed in the UI.
         */
        public function add_action($name, $label, $url = '', $status = self::E_WC_ADMIN_NOTE_ACTIONED, $primary = false, $actioned_text = '')
        {
        }
        /**
         * Set actions on a note.
         *
         * @param array $actions Note actions.
         */
        public function set_actions($actions)
        {
        }
    }
    /**
     * Admin Notes class.
     */
    class WC_Admin_Notes
    {
        /**
         * Hook used for recurring "unsnooze" action.
         */
        const UNSNOOZE_HOOK = 'wc_admin_unsnooze_admin_notes';
        /**
         * Hook appropriate actions.
         */
        public static function init()
        {
        }
        /**
         * Get notes from the database.
         *
         * @param string $context Getting notes for what context. Valid values: view, edit.
         * @param array  $args Arguments to pass to the query( e.g. per_page and page).
         * @return array Array of arrays.
         */
        public static function get_notes($context = 'edit', $args = array())
        {
        }
        /**
         * Get admin note using it's ID
         *
         * @param int $note_id Note ID.
         * @return WC_Admin_Note|bool
         */
        public static function get_note($note_id)
        {
        }
        /**
         * Get the total number of notes
         *
         * @param string $type Comma separated list of note types.
         * @param string $status Comma separated list of statuses.
         * @return int
         */
        public static function get_notes_count($type = array(), $status = array())
        {
        }
        /**
         * Deletes admin notes with a given name.
         *
         * @param string|array $names Name(s) to search for.
         */
        public static function delete_notes_with_name($names)
        {
        }
        /**
         * Update a note.
         *
         * @param WC_Admin_Note $note The note that will be updated.
         * @param array         $requested_updates a list of requested updates.
         */
        public static function update_note($note, $requested_updates)
        {
        }
        /**
         * Soft delete of a note.
         *
         * @param WC_Admin_Note $note The note that will be deleted.
         */
        public static function delete_note($note)
        {
        }
        /**
         * Soft delete of all the admin notes. Returns the deleted items.
         *
         * @return array Array of notes.
         */
        public static function delete_all_notes()
        {
        }
        /**
         * Clear note snooze status if the reminder date has been reached.
         */
        public static function unsnooze_notes()
        {
        }
        /**
         * Schedule unsnooze notes event.
         */
        public static function schedule_unsnooze_notes()
        {
        }
        /**
         * Unschedule unsnooze notes event.
         */
        public static function clear_queued_actions()
        {
        }
        /**
         * Delete marketing notes if marketing has been opted out.
         *
         * @param string $old_value Old value.
         * @param string $value New value.
         */
        public static function possibly_delete_marketing_notes($old_value, $value)
        {
        }
        /**
         * Delete actioned survey notes.
         */
        public static function possibly_delete_survey_notes()
        {
        }
    }
    /**
     * WC_Admin_Notes_Choose_Niche.
     */
    class WC_Admin_Notes_Choose_Niche
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-choose-niche';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Coupon_Page_Moved class.
     */
    class WC_Admin_Notes_Coupon_Page_Moved
    {
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits, \Automattic\WooCommerce\Admin\Features\CouponsMovedTrait;
        const NOTE_NAME = 'wc-admin-coupon-page-moved';
        /**
         * Initialize our hooks.
         */
        public function init()
        {
        }
        /**
         * Checks if a note can and should be added.
         *
         * @return bool
         */
        public static function can_be_added()
        {
        }
        /**
         * Get the note object for this class.
         *
         * @return WC_Admin_Note
         */
        public static function get_note()
        {
        }
        /**
         * Find notes that have not been actioned.
         *
         * @return bool
         */
        protected static function has_unactioned_note()
        {
        }
        /**
         * Whether any notes have been dismissed by the user previously.
         *
         * @return bool
         */
        protected static function has_dismissed_note()
        {
        }
        /**
         * Get the data store object.
         *
         * @return DataStore The data store object.
         */
        protected static function get_data_store()
        {
        }
        /**
         * Safe redirect to the coupon page to force page refresh.
         */
        public function redirect_to_coupons()
        {
        }
    }
    /**
     * WC_Admin_Notes_Customize_Store_With_Blocks.
     */
    class WC_Admin_Notes_Customize_Store_With_Blocks
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-customize-store-with-blocks';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Deactivate_Plugin.
     */
    class WC_Admin_Notes_Deactivate_Plugin
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-deactivate-plugin';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
        /**
         * Delete the note if the version is higher than the included.
         */
        public static function delete_note()
        {
        }
        /**
         * Deactivate feature plugin.
         */
        public function deactivate_feature_plugin()
        {
        }
    }
    /**
     * WC_Admin_Notes_Draw_Attention
     */
    class WC_Admin_Notes_Draw_Attention
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-draw-attention';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Check to see if profiler options match before possibly adding note.
         *
         * @param object $old_value The old option value.
         * @param object $value     The new option value.
         * @param string $option    The name of the option.
         */
        public static function check_onboarding_profile($old_value, $value, $option)
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_EU_VAT_Number
     */
    class WC_Admin_Notes_EU_VAT_Number
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-eu-vat-number';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Facebook_Marketing_Expert
     */
    class WC_Admin_Notes_Facebook_Marketing_Expert
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-facebook-marketing-expert';
        /**
         * Name of plugin file.
         */
        const PLUGIN_FILE = 'facebook-for-woocommerce/facebook-for-woocommerce.php';
        /**
         * Possibly add note.
         */
        public static function possibly_add_note()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
        /**
         * Determine if Facebook for WooCommerce is already active or installed
         *
         * @return bool
         */
        protected static function is_facebook_for_woocommerce_installed()
        {
        }
        /**
         * Determine the number of orders in the last month
         *
         * @return int
         */
        protected static function orders_last_month()
        {
        }
    }
    /**
     * WC_Admin_Notes_First_Product.
     */
    class WC_Admin_Notes_First_Product
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-first-product';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Giving_Feedback_Notes
     */
    class WC_Admin_Notes_Giving_Feedback_Notes
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-store-notice-giving-feedback-2';
        /**
         * Get the note.
         */
        protected static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Historical_Data.
     */
    class WC_Admin_Notes_Historical_Data
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-historical-data';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Update status of note to actioned on data import trigger.
         */
        public static function update_status_to_actioned()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Home_Screen_Feedback.
     */
    class WC_Admin_Notes_Home_Screen_Feedback
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-home-screen-feedback';
        const HOMESCREEN_ACCESSED_OPTION_NAME = 'wc_admin_note_home_screen_feedback_homescreen_accessed';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Watch for the homescreen being accessed (by checking to see if it's
         * enabled) and set a time stamp for when it is.
         */
        public function on_init()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Insight_First_Sale.
     */
    class WC_Admin_Notes_Insight_First_Sale
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-insight-first-sale';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Install_JP_And_WCS_Plugins
     */
    class WC_Admin_Notes_Install_JP_And_WCS_Plugins
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-install-jp-and-wcs-plugins';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
        /**
         * Action the Install Jetpack and WooCommerce Services note, if any exists,
         * and as long as both the Jetpack and WooCommerce Services plugins have been
         * activated.
         */
        public static function action_note()
        {
        }
        /**
         * Install the Jetpack and WooCommerce Services plugins in response to the action
         * being clicked in the admin note.
         *
         * @param WC_Admin_Note $note The note being actioned.
         */
        public function install_jp_and_wcs_plugins($note)
        {
        }
        /**
         * Installs and activates the specified plugin.
         *
         * @param string $plugin The plugin slug.
         */
        private function install_and_activate_plugin($plugin)
        {
        }
    }
    /**
     * WC_Admin_Notes_Launch_Checklist
     */
    class WC_Admin_Notes_Launch_Checklist
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-launch-checklist';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Learn_More_About_Product_Settings.
     */
    class WC_Admin_Notes_Learn_More_About_Product_Settings
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-learn-more-about-product-settings';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Marketing
     */
    class WC_Admin_Notes_Marketing
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-marketing-intro';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Migrate_From_Shopify.
     */
    class WC_Admin_Notes_Migrate_From_Shopify
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-migrate-from-shopify';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Mobile_App
     */
    class WC_Admin_Notes_Mobile_App
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-mobile-app';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Need_Some_Inspiration.
     */
    class WC_Admin_Notes_Need_Some_Inspiration
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-need-some-inspiration';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_New_Sales_Record
     */
    class WC_Admin_Notes_New_Sales_Record
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-new-sales-record';
        /**
         * Option name for the sales record date in ISO 8601 (YYYY-MM-DD) date.
         */
        const RECORD_DATE_OPTION_KEY = 'woocommerce_sales_record_date';
        /**
         * Option name for the sales record amount.
         */
        const RECORD_AMOUNT_OPTION_KEY = 'woocommerce_sales_record_amount';
        /**
         * Returns the total of yesterday's sales.
         *
         * @param string $date Date for sales to sum (i.e. YYYY-MM-DD).
         * @return floatval
         */
        public static function sum_sales_for_date($date)
        {
        }
        /**
         * Possibly add a sales record note.
         */
        public static function possibly_add_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Onboarding_Email_Marketing
     */
    class WC_Admin_Notes_Onboarding_Email_Marketing
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-onboarding-email-marketing';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Onboarding_Payments.
     */
    class WC_Admin_Notes_Onboarding_Payments
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-onboarding-payments-reminder';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Onboarding_Profiler.
     */
    class WC_Admin_Notes_Onboarding_Profiler
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-onboarding-profiler-reminder';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
        /**
         * Updates the note status when the profiler is completed.
         *
         * @param mixed $old_value Old value.
         * @param mixed $new_value New value.
         */
        public static function update_status_on_complete($old_value, $new_value)
        {
        }
    }
    /**
     * WC_Admin_Notes_Online_Clothing_Store.
     */
    class WC_Admin_Notes_Online_Clothing_Store
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-online-clothing-store';
        /**
         * Returns whether the industries includes fashion-apparel-accessories.
         *
         * @param array $industries The industries to search.
         *
         * @return bool Whether the industries includes fashion-apparel-accessories.
         */
        private static function is_in_fashion_industry($industries)
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Order_Milestones
     */
    class WC_Admin_Notes_Order_Milestones
    {
        /**
         * Name of the "other milestones" note.
         */
        const NOTE_NAME = 'wc-admin-orders-milestone';
        /**
         * Option key name to store last order milestone.
         */
        const LAST_ORDER_MILESTONE_OPTION_KEY = 'woocommerce_admin_last_orders_milestone';
        /**
         * Hook to process order milestones.
         */
        const PROCESS_ORDERS_MILESTONE_HOOK = 'wc_admin_process_orders_milestone';
        /**
         * Allowed order statuses for calculating milestones.
         *
         * @var array
         */
        protected $allowed_statuses = array('pending', 'processing', 'completed');
        /**
         * Orders count cache.
         *
         * @var int
         */
        protected $orders_count = null;
        /**
         * Further order milestone thresholds.
         *
         * @var array
         */
        protected $milestones = array(1, 10, 100, 250, 500, 1000, 5000, 10000, 500000, 1000000);
        /**
         * Delay hook attachment until after the WC post types have been registered.
         *
         * This is required for retrieving the order count.
         */
        public function __construct()
        {
        }
        /**
         * Hook everything up.
         */
        public function init()
        {
        }
        /**
         * Clear out our hourly milestone hook upon plugin deactivation.
         */
        public function clear_scheduled_event()
        {
        }
        /**
         * Get the total count of orders (in the allowed statuses).
         *
         * @param bool $no_cache Optional. Skip cache.
         * @return int Total orders count.
         */
        public function get_orders_count($no_cache = false)
        {
        }
        /**
         * Backfill the store's current milestone.
         *
         * Used to avoid celebrating milestones that were reached before plugin activation.
         */
        public function backfill_last_milestone()
        {
        }
        /**
         * Get the store's last milestone.
         *
         * @return int Last milestone reached.
         */
        public function get_last_milestone()
        {
        }
        /**
         * Update the last reached milestone.
         *
         * @param int $milestone Last milestone reached.
         */
        public function set_last_milestone($milestone)
        {
        }
        /**
         * Calculate the current orders milestone.
         *
         * Based on the threshold values in $this->milestones.
         *
         * @return int Current orders milestone.
         */
        public function get_current_milestone()
        {
        }
        /**
         * Get the appropriate note title for a given milestone.
         *
         * @param int $milestone Order milestone.
         * @return string Note title for the milestone.
         */
        public function get_note_title_for_milestone($milestone)
        {
        }
        /**
         * Get the appropriate note content for a given milestone.
         *
         * @param int $milestone Order milestone.
         * @return string Note content for the milestone.
         */
        public function get_note_content_for_milestone($milestone)
        {
        }
        /**
         * Get the appropriate note action for a given milestone.
         *
         * @param int $milestone Order milestone.
         * @return array Note actoion (name, label, query) for the milestone.
         */
        public function get_note_action_for_milestone($milestone)
        {
        }
        /**
         * Convenience method to see if the milestone notes are enabled.
         *
         * @return boolean True if milestone notifications are enabled.
         */
        public function are_milestones_enabled()
        {
        }
        /**
         * Add milestone notes for other significant thresholds.
         */
        public function other_milestones()
        {
        }
    }
    /**
     * WC_Admin_Notes_Personalize_Store
     */
    class WC_Admin_Notes_Personalize_Store
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-personalize-store';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Real_Time_Order_Alerts
     */
    class WC_Admin_Notes_Real_Time_Order_Alerts
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-real-time-order-alerts';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Set_Up_Additional_Payment_Types
     */
    class WC_Admin_Notes_Set_Up_Additional_Payment_Types
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-set-up-additional-payment-types';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Executes when the WooCommerce Payments plugin is activated. Possibly
         * adds the note if it isn't already in the database and if it matches any
         * criteria (see get_note()).
         */
        public static function on_activate_wcpay()
        {
        }
        /**
         * Executes when the WooCommerce Payments plugin is deactivated. Possibly
         * hard-deletes the note if it is in the database. Hard-delete is used
         * instead of soft-delete or actioning the note because we need to
         * show the note if the plugin is activated again.
         */
        public static function on_deactivate_wcpay()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Start_Dropshipping_Business.
     */
    class WC_Admin_Notes_Start_Dropshipping_Business
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-start-dropshipping-business';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Tracking_Opt_In
     */
    class WC_Admin_Notes_Tracking_Opt_In
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-usage-tracking-opt-in';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
        /**
         * Opt in to usage tracking when note is actioned.
         *
         * @param WC_Admin_Note $note Note being acted upon.
         */
        public function opt_in_to_tracking($note)
        {
        }
    }
    /**
     * WC_Admin_Notes_WooCommerce_Payments
     */
    class WC_Admin_Notes_WooCommerce_Payments
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-woocommerce-payments';
        /**
         * Name of the note for use in the database.
         */
        const PLUGIN_SLUG = 'woocommerce-payments';
        /**
         * Name of the note for use in the database.
         */
        const PLUGIN_FILE = 'woocommerce-payments/woocommerce-payments.php';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Maybe add a note on WooCommerce Payments for US based sites older than a week without the plugin installed.
         */
        public static function possibly_add_note()
        {
        }
        /**
         * Add a note about WooCommerce Payments.
         */
        public static function get_note()
        {
        }
        /**
         * Check if the WooCommerce Payments plugin is active or installed.
         */
        protected static function is_installed()
        {
        }
        /**
         * Install WooCommerce Payments when note is actioned.
         *
         * @param WC_Admin_Note $note Note being acted upon.
         */
        public function install($note)
        {
        }
    }
    /**
     * WC_Admin_Notes_WooCommerce_Subscriptions.
     */
    class WC_Admin_Notes_WooCommerce_Subscriptions
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-woocommerce-subscriptions';
        /**
         * Get the note.
         */
        public static function get_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Woo_Subscriptions_Notes
     */
    class WC_Admin_Notes_Woo_Subscriptions_Notes
    {
        const LAST_REFRESH_OPTION_KEY = 'woocommerce_admin-wc-helper-last-refresh';
        const CONNECTION_NOTE_NAME = 'wc-admin-wc-helper-connection';
        const SUBSCRIPTION_NOTE_NAME = 'wc-admin-wc-helper-subscription';
        const NOTIFY_WHEN_DAYS_LEFT = 60;
        /**
         * We want to bubble up expiration notices when they cross certain age
         * thresholds. PHP 5.2 doesn't support constant arrays, so we do this.
         *
         * @return array
         */
        private function get_bump_thresholds()
        {
        }
        /**
         * Hook all the things.
         */
        public function __construct()
        {
        }
        /**
         * Reacts to changes in the helper option.
         *
         * @param array $old_value The previous value of the option.
         * @param array $value The new value of the option.
         */
        public function update_option_woocommerce_helper_data($old_value, $value)
        {
        }
        /**
         * Things to do on admin_init.
         */
        public function admin_init()
        {
        }
        /**
         * Checks the connection. Adds a note (as necessary) if there is no connection.
         */
        public function check_connection()
        {
        }
        /**
         * Whether or not we think the site is currently connected to WooCommerce.com.
         *
         * @return bool
         */
        public function is_connected()
        {
        }
        /**
         * Returns the WooCommerce.com provided site ID for this site.
         *
         * @return int|false
         */
        public function get_connected_site_id()
        {
        }
        /**
         * Returns an array of product_ids whose subscriptions are active on this site.
         *
         * @return array
         */
        public function get_subscription_active_product_ids()
        {
        }
        /**
         * Clears all connection or subscription notes.
         */
        public function remove_notes()
        {
        }
        /**
         * Adds a note prompting to connect to WooCommerce.com.
         */
        public function add_no_connection_note()
        {
        }
        /**
         * Gets the product_id (if any) associated with a note.
         *
         * @param WC_Admin_Note $note The note object to interrogate.
         * @return int|false
         */
        public function get_product_id_from_subscription_note(&$note)
        {
        }
        /**
         * Removes notes for product_ids no longer active on this site.
         */
        public function prune_inactive_subscription_notes()
        {
        }
        /**
         * Finds a note for a given product ID, if the note exists at all.
         *
         * @param int $product_id The product ID to search for.
         * @return WC_Admin_Note|false
         */
        public function find_note_for_product_id($product_id)
        {
        }
        /**
         * Deletes a note for a given product ID, if the note exists at all.
         *
         * @param int $product_id The product ID to search for.
         */
        public function delete_any_note_for_product_id($product_id)
        {
        }
        /**
         * Adds or updates a note for an expiring subscription.
         *
         * @param array $subscription The subscription to work with.
         */
        public function add_or_update_subscription_expiring($subscription)
        {
        }
        /**
         * Adds a note for an expired subscription, or updates an expiring note to expired.
         *
         * @param array $subscription The subscription to work with.
         */
        public function add_or_update_subscription_expired($subscription)
        {
        }
        /**
         * For each active subscription on this site, checks the expiration date and creates/updates/deletes notes.
         */
        public function refresh_subscription_notes()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Overrides {
    /**
     * OrderTraits class.
     */
    trait OrderTraits
    {
        /**
         * Calculate shipping amount for line item/product as a total shipping amount ratio based on quantity.
         *
         * @param WC_Order_Item $item Line item from order.
         *
         * @return float|int
         */
        public function get_item_shipping_amount($item)
        {
        }
        /**
         * Calculate shipping tax amount for line item/product as a total shipping tax amount ratio based on quantity.
         *
         * Loosely based on code in includes/admin/meta-boxes/views/html-order-item(s).php.
         *
         * @todo If WC is currently not tax enabled, but it was before (or vice versa), would this work correctly?
         *
         * @param WC_Order_Item $item Line item from order.
         *
         * @return float|int
         */
        public function get_item_shipping_tax_amount($item)
        {
        }
        /**
         * Calculates coupon amount for specified line item/product.
         *
         * Coupon calculation based on woocommerce code in includes/admin/meta-boxes/views/html-order-item.php.
         *
         * @param WC_Order_Item $item Line item from order.
         *
         * @return float
         */
        public function get_item_coupon_amount($item)
        {
        }
    }
    /**
     * WC_Order subclass.
     */
    class Order extends \WC_Order
    {
        /**
         * Order traits.
         */
        use \Automattic\WooCommerce\Admin\Overrides\OrderTraits;
        /**
         * Holds refund amounts and quantities for the order.
         *
         * @var void|array
         */
        protected $refunded_line_items;
        /**
         * Get only core class data in array format.
         *
         * @return array
         */
        public function get_data_without_line_items()
        {
        }
        /**
         * Get order line item data by type.
         *
         * @param string $type Order line item type.
         * @return array|bool Array of line items on success, boolean false on failure.
         */
        public function get_line_item_data($type)
        {
        }
        /**
         * Add filter(s) required to hook this class to substitute WC_Order.
         */
        public static function add_filters()
        {
        }
        /**
         * Filter function to swap class WC_Order for this one in cases when it's suitable.
         *
         * @param string $classname Name of the class to be created.
         * @param string $order_type Type of order object to be created.
         * @param number $order_id Order id to create.
         *
         * @return string
         */
        public static function order_class_name($classname, $order_type, $order_id)
        {
        }
        /**
         * Get the customer ID used for reports in the customer lookup table.
         *
         * @return int
         */
        public function get_report_customer_id()
        {
        }
        /**
         * Returns true if the customer has made an earlier order.
         *
         * @return bool
         */
        public function is_returning_customer()
        {
        }
        /**
         * Get the customer's first name.
         */
        public function get_customer_first_name()
        {
        }
        /**
         * Get the customer's last name.
         */
        public function get_customer_last_name()
        {
        }
    }
    /**
     * WC_Order_Refund subclass.
     */
    class OrderRefund extends \WC_Order_Refund
    {
        /**
         * Order traits.
         */
        use \Automattic\WooCommerce\Admin\Overrides\OrderTraits;
        /**
         * Add filter(s) required to hook this class to substitute WC_Order_Refund.
         */
        public static function add_filters()
        {
        }
        /**
         * Filter function to swap class WC_Order_Refund for this one in cases when it's suitable.
         *
         * @param string $classname Name of the class to be created.
         * @param string $order_type Type of order object to be created.
         * @param number $order_id Order id to create.
         *
         * @return string
         */
        public static function order_class_name($classname, $order_type, $order_id)
        {
        }
        /**
         * Get the customer ID of the parent order used for reports in the customer lookup table.
         *
         * @return int|bool Customer ID of parent order, or false if parent order not found.
         */
        public function get_report_customer_id()
        {
        }
        /**
         * Returns null since refunds should not be counted towards returning customer counts.
         *
         * @return null
         */
        public function is_returning_customer()
        {
        }
    }
    /**
     * Admin\Overrides\ThemeUpgrader Class.
     */
    class ThemeUpgrader extends \Theme_Upgrader
    {
        /**
         * Install a theme package.
         *
         * @param string $package The full local path or URI of the package.
         * @param array  $args {
         *     Optional. Other arguments for installing a theme package. Default empty array.
         *
         *     @type bool $clear_update_cache Whether to clear the updates cache if successful.
         *                                    Default true.
         * }
         *
         * @return bool|WP_Error True if the installation was successful, false or a WP_Error object otherwise.
         */
        public function install($package, $args = array())
        {
        }
    }
    /**
     * Admin\Overrides\ThemeUpgraderSkin Class.
     */
    class ThemeUpgraderSkin extends \Theme_Upgrader_Skin
    {
        /**
         * Avoid undefined property error from \Theme_Upgrader::check_parent_theme_filter().
         *
         * @var array
         */
        public $api;
        /**
         * Hide the skin header display.
         */
        public function header()
        {
        }
        /**
         * Hide the skin footer display.
         */
        public function footer()
        {
        }
        /**
         * Hide the skin feedback display.
         *
         * @param string $string String to display.
         * @param mixed  ...$args Optional text replacements.
         */
        public function feedback($string, ...$args)
        {
        }
        /**
         * Hide the skin after display.
         */
        public function after()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Composer {
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '1.4.0';
        /**
         * Package active.
         *
         * @var bool
         */
        private static $package_active = false;
        /**
         * Active version
         *
         * @var bool
         */
        private static $active_version = null;
        /**
         * Init the package.
         *
         * Only initialize for WP 5.3 or greater.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the active version of WC Admin.
         *
         * @return string
         */
        public static function get_active_version()
        {
        }
        /**
         * Return whether the package is active.
         *
         * @return bool
         */
        public static function is_package_active()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
        /**
         * Add deactivation hook for versions of the plugin that don't have the deactivation note.
         */
        public static function on_deactivation()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * PageController
     */
    class PageController
    {
        // JS-powered page root.
        const PAGE_ROOT = 'wc-admin';
        /**
         * Singleton instance of self.
         *
         * @var PageController
         */
        private static $instance = false;
        /**
         * Current page ID (or false if not registered with this controller).
         *
         * @var string
         */
        private $current_page = null;
        /**
         * Registered pages
         * Contains information (breadcrumbs, menu info) about JS powered pages and classic WooCommerce pages.
         *
         * @var array
         */
        private $pages = array();
        /**
         * We want a single instance of this class so we can accurately track registered menus and pages.
         */
        public static function get_instance()
        {
        }
        /**
         * Connect an existing page to wc-admin.
         *
         * @param array $options {
         *   Array describing the page.
         *
         *   @type string       id           Id to reference the page.
         *   @type string|array title        Page title. Used in menus and breadcrumbs.
         *   @type string|null  parent       Parent ID. Null for new top level page.
         *   @type string       path         Path for this page. E.g. admin.php?page=wc-settings&tab=checkout
         *   @type string       capability   Capability needed to access the page.
         *   @type string       icon         Icon. Dashicons helper class, base64-encoded SVG, or 'none'.
         *   @type int          position     Menu item position.
         *   @type boolean      js_page      If this is a JS-powered page.
         * }
         */
        public function connect_page($options)
        {
        }
        /**
         * Determine the current page ID, if it was registered with this controller.
         */
        public function determine_current_page()
        {
        }
        /**
         * Get breadcrumbs for WooCommerce Admin Page navigation.
         *
         * @return array Navigation pieces (breadcrumbs).
         */
        public function get_breadcrumbs()
        {
        }
        /**
         * Get the current page.
         *
         * @return array|boolean Current page or false if not registered with this controller.
         */
        public function get_current_page()
        {
        }
        /**
         * Returns the current screen ID.
         *
         * This is slightly different from WP's get_current_screen, in that it attaches an action,
         * so certain pages like 'add new' pages can have different breadcrumbs or handling.
         * It also catches some more unique dynamic pages like taxonomy/attribute management.
         *
         * Format:
         * - {$current_screen->action}-{$current_screen->action}-tab-section
         * - {$current_screen->action}-{$current_screen->action}-tab
         * - {$current_screen->action}-{$current_screen->action} if no tab is present
         * - {$current_screen->action} if no action or tab is present
         *
         * @return string Current screen ID.
         */
        public function get_current_screen_id()
        {
        }
        /**
         * Returns the path from an ID.
         *
         * @param  string $id  ID to get path for.
         * @return string Path for the given ID, or the ID on lookup miss.
         */
        public function get_path_from_id($id)
        {
        }
        /**
         * Returns true if we are on a page connected to this controller.
         *
         * @return boolean
         */
        public function is_connected_page()
        {
        }
        /**
         * Returns true if we are on a page registed with this controller.
         *
         * @return boolean
         */
        public function is_registered_page()
        {
        }
        /**
         * Adds a JS powered page to wc-admin.
         *
         * @param array $options {
         *   Array describing the page.
         *
         *   @type string      id           Id to reference the page.
         *   @type string      title        Page title. Used in menus and breadcrumbs.
         *   @type string|null parent       Parent ID. Null for new top level page.
         *   @type string      path         Path for this page, full path in app context; ex /analytics/report
         *   @type string      capability   Capability needed to access the page.
         *   @type string      icon         Icon. Dashicons helper class, base64-encoded SVG, or 'none'.
         *   @type int         position     Menu item position.
         * }
         */
        public function register_page($options)
        {
        }
        /**
         * Set up a div for the app to render into.
         */
        public static function page_wrapper()
        {
        }
    }
    /**
     * Class PluginsHelper
     */
    class PluginsHelper
    {
        /**
         * Get the path to the plugin file relative to the plugins directory from the plugin slug.
         *
         * E.g. 'woocommerce' returns 'woocommerce/woocommerce.php'
         *
         * @param string $slug Plugin slug to get path for.
         *
         * @return string|false
         */
        public static function get_plugin_path_from_slug($slug)
        {
        }
        /**
         * Get an array of installed plugin slugs.
         *
         * @return array
         */
        public static function get_installed_plugin_slugs()
        {
        }
        /**
         * Get an array of active plugin slugs.
         *
         * @return array
         */
        public static function get_active_plugin_slugs()
        {
        }
        /**
         * Checks if a plugin is installed.
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
         *
         * @return bool
         */
        public static function is_plugin_installed($plugin)
        {
        }
        /**
         * Checks if a plugin is active.
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
         *
         * @return bool
         */
        public static function is_plugin_active($plugin)
        {
        }
        /**
         * Get plugin data.
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
         *
         * @return array|false
         */
        public static function get_plugin_data($plugin)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\PluginsProvider {
    /**
     * Plugins Provider Interface
     */
    interface PluginsProviderInterface
    {
        /**
         * Get an array of active plugin slugs.
         *
         * @return array
         */
        public function get_active_plugin_slugs();
        /**
         * Get plugin data.
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
         *
         * @return array|false
         */
        public function get_plugin_data($plugin);
        /**
         * Get the path to the plugin file relative to the plugins directory from the plugin slug.
         *
         * E.g. 'woocommerce' returns 'woocommerce/woocommerce.php'
         *
         * @param string $slug Plugin slug to get path for.
         *
         * @return string|false
         */
        public function get_plugin_path_from_slug($slug);
    }
    /**
     * Plugins Provider.
     *
     * Uses the live PluginsHelper.
     */
    class PluginsProvider implements \Automattic\WooCommerce\Admin\PluginsProvider\PluginsProviderInterface
    {
        /**
         * The deactivated plugin slug.
         *
         * @var string
         */
        private static $deactivated_plugin_slug = '';
        /**
         * Get an array of active plugin slugs.
         *
         * @return array
         */
        public function get_active_plugin_slugs()
        {
        }
        /**
         * Set the deactivated plugin. This is needed because the deactivated_plugin
         * hook happens before the option is updated which means that getting the
         * active plugins includes the deactivated plugin.
         *
         * @param string $plugin_path The path to the plugin being deactivated.
         */
        public static function set_deactivated_plugin($plugin_path)
        {
        }
        /**
         * Get plugin data.
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
         *
         * @return array|false
         */
        public function get_plugin_data($plugin)
        {
        }
        /**
         * Get the path to the plugin file relative to the plugins directory from the plugin slug.
         *
         * E.g. 'woocommerce' returns 'woocommerce/woocommerce.php'
         *
         * @param string $slug Plugin slug to get path for.
         *
         * @return string|false
         */
        public function get_plugin_path_from_slug($slug)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications {
    /**
     * Compare two operands using the specified operation.
     */
    class ComparisonOperation
    {
        /**
         * Compare two operands using the specified operation.
         *
         * @param object $left_operand  The left hand operand.
         * @param object $right_operand The right hand operand.
         * @param string $operation     The operation used to compare the operands.
         */
        public static function compare($left_operand, $right_operand, $operation)
        {
        }
    }
    /**
     * Specs data source poller class.
     * This handles polling specs from JSON endpoints, and
     * stores the specs in to the database as an option.
     */
    class DataSourcePoller
    {
        const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/inbox-notifications/1.0/notifications.json');
        /**
         * Reads the data sources for specs and persists those specs.
         *
         * @return bool Whether any specs were read.
         */
        public static function read_specs_from_data_sources()
        {
        }
        /**
         * Read a single data source and return the read specs
         *
         * @param string $url The URL to read the specs from.
         *
         * @return array The specs that have been read from the data source.
         */
        private static function read_data_source($url)
        {
        }
        /**
         * Merge the specs.
         *
         * @param Array $specs_to_merge_in The specs to merge in to $specs.
         * @param Array $specs             The list of specs being merged into.
         */
        private static function merge_specs($specs_to_merge_in, &$specs)
        {
        }
        /**
         * Validate the spec.
         *
         * @param object $spec The spec to validate.
         *
         * @return bool The result of the validation.
         */
        private static function validate_spec($spec)
        {
        }
        /**
         * Validate the action.
         *
         * @param object $action The action to validate.
         *
         * @return bool The result of the validation.
         */
        private static function validate_action($action)
        {
        }
    }
    /**
     * Evaluates the spec and returns a status.
     */
    class EvaluateAndGetStatus
    {
        /**
         * Evaluates the spec and returns a status.
         *
         * @param array  $spec           The spec to evaluate.
         * @param string $current_status The note's current status.
         * @param object $stored_state   Stored state.
         * @param object $rule_evaluator Evaluates rules into true/false.
         *
         * @return string The evaluated status.
         */
        public static function evaluate($spec, $current_status, $stored_state, $rule_evaluator)
        {
        }
    }
    /**
     * Rule processor interface
     */
    interface RuleProcessorInterface
    {
        /**
         * Processes a rule, returning the boolean result of the processing.
         *
         * @param object $rule         The rule to process.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the processing.
         */
        public function process($rule, $stored_state);
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule);
    }
    /**
     * Rule processor that fails.
     */
    class FailRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Fails the rule.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool Always false.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Class encapsulating getting the processor for a given rule type.
     */
    class GetRuleProcessor
    {
        /**
         * Get the processor for the specified rule type.
         *
         * @param string $rule_type The rule type.
         *
         * @return RuleProcessorInterface The matching processor for the specified rule type, or a FailRuleProcessor if no matching processor is found.
         */
        public static function get_processor($rule_type)
        {
        }
    }
    /**
     * Rule processor that passes (or fails) when the site is on the eCommerce
     * plan.
     */
    class IsEcommerceRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Passes (or fails) based on whether the site is on the eCommerce plan or
         * not.
         *
         * @param object $rule         The rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validate the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor that negates the rules in the rule's operand.
     */
    class NotRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param RuleEvaluator $rule_evaluator The rule evaluator to use.
         */
        public function __construct($rule_evaluator = null)
        {
        }
        /**
         * Evaluates the rules in the operand and negates the result.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor that performs a comparison operation against a value in the
     * onboarding profile.
     */
    class OnboardingProfileRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Performs a comparison operation against a value in the onboarding
         * profile.
         *
         * @param object $rule         The rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor that performs an OR operation on the rule's left and right
     * operands.
     */
    class OrRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param RuleEvaluator $rule_evaluator The rule evaluator to use.
         */
        public function __construct($rule_evaluator = null)
        {
        }
        /**
         * Performs an OR operation on the rule's left and right operands.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor for publishing based on the number of orders.
     */
    class OrderCountRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param object $orders_provider The orders provider.
         */
        public function __construct($orders_provider = null)
        {
        }
        /**
         * Process the rule.
         *
         * @param object $rule         The rule to process.
         * @param object $stored_state Stored state.
         *
         * @return bool Whether the rule passes or not.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Provider for order-related queries and operations.
     */
    class OrdersProvider
    {
        /**
         * Allowed order statuses for calculating milestones.
         *
         * @var array
         */
        protected $allowed_statuses = array('pending', 'processing', 'completed');
        /**
         * Returns the number of orders.
         *
         * @return integer The number of orders.
         */
        public function get_order_count()
        {
        }
    }
    /**
     * Rule processor that passes.
     */
    class PassRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Passes the rule.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool Always true.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor for sending when the provided plugin is activated and
     * matches the specified version.
     */
    class PluginVersionRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param PluginsProviderInterface $plugins_provider The plugins provider.
         */
        public function __construct($plugins_provider = null)
        {
        }
        /**
         * Process the rule.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool Whether the rule passes or not.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor for sending when the provided plugins are activated.
     */
    class PluginsActivatedRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param PluginsProviderInterface $plugins_provider The plugins provider.
         */
        public function __construct($plugins_provider = null)
        {
        }
        /**
         * Process the rule.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool Whether the rule passes or not.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor that performs a comparison operation against the number of
     * products.
     */
    class ProductCountRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param object $product_query The product query.
         */
        public function __construct($product_query = null)
        {
        }
        /**
         * Performs a comparison operation against the number of products.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor for sending after a specified date/time.
     */
    class PublishAfterTimeRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param DateTimeProviderInterface $date_time_provider The DateTime provider.
         */
        public function __construct($date_time_provider = null)
        {
        }
        /**
         * Process the rule.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool Whether the rule passes or not.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Rule processor for sending before a specified date/time.
     */
    class PublishBeforeTimeRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor.
         *
         * @param DateTimeProviderInterface $date_time_provider The DateTime provider.
         */
        public function __construct($date_time_provider = null)
        {
        }
        /**
         * Process the rule.
         *
         * @param object $rule         The specific rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool Whether the rule passes or not.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Remote Inbox Notifications engine.
     * This goes through the specs and runs (creates admin notes) for those
     * specs that are able to be triggered.
     */
    class RemoteInboxNotificationsEngine
    {
        const SPECS_OPTION_NAME = 'wc_remote_inbox_notifications_specs';
        const STORED_STATE_OPTION_NAME = 'wc_remote_inbox_notifications_stored_state';
        /**
         * Initialize the engine.
         */
        public static function init()
        {
        }
        /**
         * This is triggered when the profile option is updated and if the
         * profiler is being completed, triggers a run of the engine.
         *
         * @param mixed $old_value Old value.
         * @param mixed $new_value New value.
         */
        public static function update_profile_option($old_value, $new_value)
        {
        }
        /**
         * Init is continued via admin_init so that WC is loaded when the product
         * query is used, otherwise the query generates a "0 = 1" in the WHERE
         * condition and thus doesn't return any results.
         */
        public static function on_admin_init()
        {
        }
        /**
         * Go through the specs and run them.
         */
        public static function run()
        {
        }
        /**
         * Gets the stored state option, and does the initial set up if it doesn't
         * already exist.
         *
         * @return object The stored state option.
         */
        public static function get_stored_state()
        {
        }
        /**
         * The deactivated_plugin hook happens before the option is updated
         * (https://github.com/WordPress/WordPress/blob/master/wp-admin/includes/plugin.php#L826)
         * so this captures the deactivated plugin path and pushes it into the
         * PluginsProvider.
         *
         * @param string $plugin Path to the plugin file relative to the plugins directory.
         */
        public static function run_on_deactivated_plugin($plugin)
        {
        }
        /**
         * Update the stored state option.
         *
         * @param object $stored_state The stored state.
         */
        public static function update_stored_state($stored_state)
        {
        }
    }
    /**
     * Evaluate the given rules as an AND operation - return false early if a
     * rule evaluates to false.
     */
    class RuleEvaluator
    {
        /**
         * Constructor.
         *
         * @param GetRuleProcessor $get_rule_processor The GetRuleProcessor to use.
         */
        public function __construct($get_rule_processor = null)
        {
        }
        /**
         * Evaluate the given rules as an AND operation - return false early if a
         * rule evaluates to false.
         *
         * @param array|object $rules        The rule or rules being processed.
         * @param object       $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function evaluate($rules, $stored_state)
        {
        }
    }
    /**
     * Runs a single spec.
     */
    class SpecRunner
    {
        /**
         * Run the spec.
         *
         * @param object $spec         The spec to run.
         * @param object $stored_state Stored state.
         */
        public static function run_spec($spec, $stored_state)
        {
        }
        /**
         * Get the URL for an action.
         *
         * @param object $action The action.
         *
         * @return string The URL for the action.
         */
        private static function get_url($action)
        {
        }
        /**
         * Get the locale for the WordPress locale, or fall back to the en_US
         * locale.
         *
         * @param Array $locales The locales to search through.
         *
         * @returns object The locale that was found, or null if no matching locale was found.
         */
        public static function get_locale($locales)
        {
        }
        /**
         * Get the action locale that matches the note locale, or fall back to the
         * en_US locale.
         *
         * @param Array $action_locales The locales from the spec's action.
         *
         * @return object The matching locale, or the en_US fallback locale, or null if neither was found.
         */
        public static function get_action_locale($action_locales)
        {
        }
    }
    /**
     * Rule processor that performs a comparison operation against a value in the
     * stored state object.
     */
    class StoredStateRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Performs a comparison operation against a value in the stored state object.
         *
         * @param object $rule         The rule being processed by this rule processor.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
    /**
     * Handles stored state setup for products.
     */
    class StoredStateSetupForProducts
    {
        /**
         * Initialize the class
         */
        public static function init()
        {
        }
        /**
         * Set initial stored state values.
         *
         * @param object $stored_state The stored state.
         *
         * @return object The stored state.
         */
        public static function init_stored_state($stored_state)
        {
        }
        /**
         * Are there products query.
         *
         * @return bool
         */
        private static function are_there_products()
        {
        }
        /**
         * Runs on product importer steps.
         */
        public static function run_on_product_importer()
        {
        }
        /**
         * Runs when a post status transitions, but we're only interested if it is
         * a product being published.
         *
         * @param string $new_status The new status.
         * @param string $old_status The old status.
         * @param Post   $post       The post.
         */
        public static function run_on_transition_post_status($new_status, $old_status, $post)
        {
        }
    }
    /**
     * WCAdminActiveForProvider class
     */
    class WCAdminActiveForProvider
    {
        /**
         * Get the number of seconds that the store has been active.
         *
         * @return number Number of seconds.
         */
        public function get_wcadmin_active_for_in_seconds()
        {
        }
    }
    /**
     * Rule processor for publishing if wc-admin has been active for at least the
     * given number of seconds.
     */
    class WCAdminActiveForRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
    {
        /**
         * Constructor
         *
         * @param object $wcadmin_active_for_provider Provides the amount of time wcadmin has been active for.
         */
        public function __construct($wcadmin_active_for_provider = null)
        {
        }
        /**
         * Performs a comparison operation against the amount of time wc-admin has
         * been active for in days.
         *
         * @param object $rule         The rule being processed.
         * @param object $stored_state Stored state.
         *
         * @return bool The result of the operation.
         */
        public function process($rule, $stored_state)
        {
        }
        /**
         * Validates the rule.
         *
         * @param object $rule The rule to validate.
         *
         * @return bool Pass/fail.
         */
        public function validate($rule)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * ReportCSVEmail Class.
     */
    class ReportCSVEmail extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * This email has no user-facing settings.
         */
        public function init_form_fields()
        {
        }
        /**
         * This email has no user-facing settings.
         */
        public function init_settings()
        {
        }
        /**
         * Return email type.
         *
         * @return string
         */
        public function get_email_type()
        {
        }
        /**
         * Get email heading.
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Get email subject.
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get content html.
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Trigger the sending of this email.
         *
         * @param int    $user_id User ID to email.
         * @param string $report_type The type of report export being emailed.
         * @param string $download_url The URL for downloading the report.
         */
        public function trigger($user_id, $report_type, $download_url)
        {
        }
    }
    /**
     * ReportCSVExporter Class.
     */
    class ReportCSVExporter extends \WC_CSV_Batch_Exporter
    {
        /**
         * Type of report being exported.
         *
         * @var string
         */
        protected $report_type;
        /**
         * Parameters for the report query.
         *
         * @var array
         */
        protected $report_args;
        /**
         * REST controller for the report.
         *
         * @var WC_REST_Reports_Controller
         */
        protected $controller;
        /**
         * Constructor.
         *
         * @param string $type Report type. E.g. 'customers'.
         * @param array  $args Report parameters.
         */
        public function __construct($type = false, $args = array())
        {
        }
        /**
         * Setter for report type.
         *
         * @param string $type The report type. E.g. customers.
         */
        public function set_report_type($type)
        {
        }
        /**
         * Setter for report args.
         *
         * @param array $args The report args.
         */
        public function set_report_args($args)
        {
        }
        /**
         * Get a REST controller instance for the report type.
         *
         * @return bool|WC_REST_Reports_Controller Report controller instance or boolean false on error.
         */
        protected function map_report_controller()
        {
        }
        /**
         * Get the report columns from the controller.
         *
         * @return array Array of report column names.
         */
        protected function get_report_columns()
        {
        }
        /**
         * Get total % complete.
         *
         * Forces an int from parent::get_percent_complete(), which can return a float.
         *
         * @return int Percent complete.
         */
        public function get_percent_complete()
        {
        }
        /**
         * Get total number of rows in export.
         *
         * @return int Number of rows to export.
         */
        public function get_total_rows()
        {
        }
        /**
         * Prepare data for export.
         */
        public function prepare_data_to_export()
        {
        }
        /**
         * Generate row data from a raw report item.
         *
         * @param object $item Report item data.
         * @return array CSV row data.
         */
        protected function get_raw_row_data($item)
        {
        }
        /**
         * Get the export row for a given report item.
         *
         * @param object $item Report item data.
         * @return array CSV row data.
         */
        protected function generate_row_data($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Schedulers {
    /**
     * SchedulerTraits class.
     */
    trait SchedulerTraits
    {
        /**
         * Action scheduler group.
         *
         * @var string|null
         */
        public static $group = 'wc-admin-data';
        /**
         * Queue instance.
         *
         * @var WC_Queue_Interface
         */
        protected static $queue = null;
        /**
         * Add all actions as hooks.
         */
        public static function init()
        {
        }
        /**
         * Get queue instance.
         *
         * @return WC_Queue_Interface
         */
        public static function queue()
        {
        }
        /**
         * Set queue instance.
         *
         * @param WC_Queue_Interface $queue Queue instance.
         */
        public static function set_queue($queue)
        {
        }
        /**
         * Gets the default scheduler actions for batching and scheduling actions.
         */
        public static function get_default_scheduler_actions()
        {
        }
        /**
         * Gets the actions for this specific scheduler.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         */
        public static function get_actions()
        {
        }
        /**
         * Get an action tag name from the action name.
         *
         * @param string $action_name The action name.
         * @return string|null
         */
        public static function get_action($action_name)
        {
        }
        /**
         * Returns an array of actions and dependencies as key => value pairs.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Get dependencies associated with an action.
         *
         * @param string $action_name The action slug.
         * @return string|null
         */
        public static function get_dependency($action_name)
        {
        }
        /**
         * Batch action size.
         */
        public static function get_batch_sizes()
        {
        }
        /**
         * Returns the batch size for an action.
         *
         * @param string $action Single batch action name.
         * @return int Batch size.
         */
        public static function get_batch_size($action)
        {
        }
        /**
         * Flatten multidimensional arrays to store for scheduling.
         *
         * @param array $args Argument array.
         * @return string
         */
        public static function flatten_args($args)
        {
        }
        /**
         * Check if existing jobs exist for an action and arguments.
         *
         * @param string $action_name Action name.
         * @param array  $args Array of arguments to pass to action.
         * @return bool
         */
        public static function has_existing_jobs($action_name, $args)
        {
        }
        /**
         * Get the next blocking job for an action.
         *
         * @param string $action_name Action name.
         * @return false|ActionScheduler_Action
         */
        public static function get_next_blocking_job($action_name)
        {
        }
        /**
         * Check for blocking jobs and reschedule if any exist.
         */
        public static function do_action_or_reschedule()
        {
        }
        /**
         * Get the DateTime for the next scheduled time an action should run.
         * This function allows backwards compatibility with Action Scheduler < v3.0.
         *
         * @param \ActionScheduler_Action $action Action.
         * @return DateTime|null
         */
        public static function get_next_action_time($action)
        {
        }
        /**
         * Schedule an action to run and check for dependencies.
         *
         * @param string $action_name Action name.
         * @param array  $args Array of arguments to pass to action.
         */
        public static function schedule_action($action_name, $args = array())
        {
        }
        /**
         * Queue a large number of batch jobs, respecting the batch size limit.
         * Reduces a range of batches down to "single batch" jobs.
         *
         * @param int    $range_start Starting batch number.
         * @param int    $range_end Ending batch number.
         * @param string $single_batch_action Action to schedule for a single batch.
         * @param array  $action_args Action arguments.
         * @return void
         */
        public static function queue_batches($range_start, $range_end, $single_batch_action, $action_args = array())
        {
        }
        /**
         * Clears all queued actions.
         */
        public static function clear_queued_actions()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * ReportExporter Class.
     */
    class ReportExporter
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'report_exporter';
        /**
         * Scheduler traits.
         */
        use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
            init as scheduler_init;
        }
        /**
         * Export status option name.
         */
        const EXPORT_STATUS_OPTION = 'woocommerce_admin_report_export_status';
        /**
         * Export file download action.
         */
        const DOWNLOAD_EXPORT_ACTION = 'woocommerce_admin_download_report_csv';
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Add action dependencies.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Hook in action methods.
         */
        public static function init()
        {
        }
        /**
         * Queue up actions for a full report export.
         *
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param string $report_type Report type. E.g. 'customers'.
         * @param array  $report_args Report parameters, passed to data query.
         * @param bool   $send_email Optional. Send an email when the export is complete.
         * @return int Number of items to export.
         */
        public static function queue_report_export($export_id, $report_type, $report_args = array(), $send_email = false)
        {
        }
        /**
         * Process a report export action.
         *
         * @param int    $page_number Page number for this action.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param string $report_type Report type. E.g. 'customers'.
         * @param array  $report_args Report parameters, passed to data query.
         * @return void
         */
        public static function export_report($page_number, $export_id, $report_type, $report_args)
        {
        }
        /**
         * Generate a key to reference an export status.
         *
         * @param string $report_type Report type. E.g. 'customers'.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @return string Status key.
         */
        protected static function get_status_key($report_type, $export_id)
        {
        }
        /**
         * Update the completion percentage of a report export.
         *
         * @param string $report_type Report type. E.g. 'customers'.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param int    $percentage Completion percentage.
         * @return void
         */
        public static function update_export_percentage_complete($report_type, $export_id, $percentage)
        {
        }
        /**
         * Get the completion percentage of a report export.
         *
         * @param string $report_type Report type. E.g. 'customers'.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @return bool|int Completion percentage, or false if export not found.
         */
        public static function get_export_percentage_complete($report_type, $export_id)
        {
        }
        /**
         * Serve the export file.
         */
        public static function download_export_file()
        {
        }
        /**
         * Process a report export email action.
         *
         * @param int    $user_id User ID that requested the email.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param string $report_type Report type. E.g. 'customers'.
         * @return void
         */
        public static function email_report_download_link($user_id, $export_id, $report_type)
        {
        }
    }
    /**
     * ReportsSync Class.
     */
    class ReportsSync
    {
        /**
         * Hook in sync methods.
         */
        public static function init()
        {
        }
        /**
         * Get classes for syncing data.
         *
         * @return array
         * @throws \Exception Throws exception when invalid data is found.
         */
        public static function get_schedulers()
        {
        }
        /**
         * Returns true if an import is in progress.
         *
         * @return bool
         */
        public static function is_importing()
        {
        }
        /**
         * Regenerate data for reports.
         *
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         * @return string
         */
        public static function regenerate_report_data($days, $skip_existing)
        {
        }
        /**
         * Update the import stat totals and counts.
         *
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         */
        public static function reset_import_stats($days, $skip_existing)
        {
        }
        /**
         * Get stats for current import.
         *
         * @return array
         */
        public static function get_import_stats()
        {
        }
        /**
         * Get the import totals for all syncs.
         *
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         * @return array
         */
        public static function get_import_totals($days, $skip_existing)
        {
        }
        /**
         * Clears all queued actions.
         */
        public static function clear_queued_actions()
        {
        }
        /**
         * Delete all data for reports.
         *
         * @return string
         */
        public static function delete_report_data()
        {
        }
        /**
         * Clear the count cache when products are added or updated, or when
         * the no/low stock options are changed.
         *
         * @param int $id Post/product ID.
         */
        public static function clear_stock_count_cache($id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Schedulers {
    interface ImportInterface
    {
        /**
         * Get items based on query and return IDs along with total available.
         *
         * @param int      $limit Number of records to retrieve.
         * @param int      $page  Page number.
         * @param int|bool $days Number of days prior to current date to limit search results.
         * @param bool     $skip_existing Skip already imported items.
         */
        public static function get_items($limit, $page, $days, $skip_existing);
        /**
         * Get total number of items already imported.
         *
         * @return null
         */
        public static function get_total_imported();
    }
    /**
     * ImportScheduler class.
     */
    abstract class ImportScheduler implements \Automattic\WooCommerce\Admin\Schedulers\ImportInterface
    {
        /**
         * Import stats option name.
         */
        const IMPORT_STATS_OPTION = 'woocommerce_admin_import_stats';
        /**
         * Scheduler traits.
         */
        use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
            get_batch_sizes as get_scheduler_batch_sizes;
        }
        /**
         * Returns true if an import is in progress.
         *
         * @return bool
         */
        public static function is_importing()
        {
        }
        /**
         * Get batch sizes.
         *
         * @retun array
         */
        public static function get_batch_sizes()
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Queue the imports into multiple batches.
         *
         * @param integer|boolean $days Number of days to import.
         * @param boolean         $skip_existing Skip exisiting records.
         */
        public static function import_batch_init($days, $skip_existing)
        {
        }
        /**
         * Imports a batch of items to update.
         *
         * @param int      $batch_number Batch number to import (essentially a query page number).
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         * @return void
         */
        public static function import_batch($batch_number, $days, $skip_existing)
        {
        }
        /**
         * Queue item deletion in batches.
         */
        public static function delete_batch_init()
        {
        }
        /**
         * Delete a batch by passing the count to be deleted to the child delete method.
         *
         * @return void
         */
        public static function delete_batch()
        {
        }
    }
    /**
     * CustomersScheduler Class.
     */
    class CustomersScheduler extends \Automattic\WooCommerce\Admin\Schedulers\ImportScheduler
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'customers';
        /**
         * Attach customer lookup update hooks.
         */
        public static function init()
        {
        }
        /**
         * Add customer dependencies.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Get the customer IDs and total count that need to be synced.
         *
         * @param int      $limit Number of records to retrieve.
         * @param int      $page  Page number.
         * @param int|bool $days Number of days prior to current date to limit search results.
         * @param bool     $skip_existing Skip already imported customers.
         */
        public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
        {
        }
        /**
         * Exclude users that already exist in our customer lookup table.
         *
         * Meant to be hooked into 'pre_user_query' action.
         *
         * @param WP_User_Query $wp_user_query WP_User_Query to modify.
         */
        public static function exclude_existing_customers_from_query($wp_user_query)
        {
        }
        /**
         * Get total number of rows imported.
         *
         * @return int
         */
        public static function get_total_imported()
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Schedule import.
         *
         * @param int $user_id User ID.
         * @return void
         */
        public static function schedule_import($user_id)
        {
        }
        /**
         * Schedule an action to anonymize a single Order.
         *
         * @param WC_Order $order Order object.
         * @return void
         */
        public static function schedule_anonymize($order)
        {
        }
        /**
         * Imports a single customer.
         *
         * @param int $user_id User ID.
         * @return void
         */
        public static function import($user_id)
        {
        }
        /**
         * Delete a batch of customers.
         *
         * @param int $batch_size Number of items to delete.
         * @return void
         */
        public static function delete($batch_size)
        {
        }
        /**
         * Anonymize the customer data for a single order.
         *
         * @param int $order_id Order id.
         * @return void
         */
        public static function anonymize($order_id)
        {
        }
    }
    /**
     * OrdersScheduler Class.
     */
    class OrdersScheduler extends \Automattic\WooCommerce\Admin\Schedulers\ImportScheduler
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'orders';
        /**
         * Attach order lookup update hooks.
         */
        public static function init()
        {
        }
        /**
         * Add customer dependencies.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Get the order/refund IDs and total count that need to be synced.
         *
         * @param int      $limit Number of records to retrieve.
         * @param int      $page  Page number.
         * @param int|bool $days Number of days prior to current date to limit search results.
         * @param bool     $skip_existing Skip already imported orders.
         */
        public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
        {
        }
        /**
         * Get total number of rows imported.
         */
        public static function get_total_imported()
        {
        }
        /**
         * Schedule this import if the post is an order or refund.
         *
         * @param int $post_id Post ID.
         */
        public static function possibly_schedule_import($post_id)
        {
        }
        /**
         * Imports a single order or refund to update lookup tables for.
         * If an error is encountered in one of the updates, a retry action is scheduled.
         *
         * @param int $order_id Order or refund ID.
         * @return void
         */
        public static function import($order_id)
        {
        }
        /**
         * Delete a batch of orders.
         *
         * @param int $batch_size Number of items to delete.
         * @return void
         */
        public static function delete($batch_size)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Assets class.
     */
    class Assets
    {
        /**
         * Initialize class features on init.
         *
         * @since 2.5.0
         * Moved most initialization to BootStrap and AssetDataRegistry
         * classes as a part of ongoing refactor
         */
        public static function init()
        {
        }
        /**
         * Register block scripts & styles.
         *
         * @since 2.5.0
         * Moved data related enqueuing to new AssetDataRegistry class
         * as part of ongoing refactoring.
         */
        public static function register_assets()
        {
        }
        /**
         * Add body classes.
         *
         * @param array $classes Array of CSS classnames.
         * @return array Modified array of CSS classnames.
         */
        public static function add_theme_body_class($classes = [])
        {
        }
        /**
         * Add theme class to admin body.
         *
         * @param array $classes String with the CSS classnames.
         * @return array Modified string of CSS classnames.
         */
        public static function add_theme_admin_body_class($classes = '')
        {
        }
        /**
         * Returns block-related data for enqueued wc-block-settings script.
         *
         * This is used to map site settings & data into JS-accessible variables.
         *
         * @param array $settings The original settings array from the filter.
         *
         * @since 2.4.0
         * @since 2.5.0 returned merged data along with incoming $settings
         */
        public static function get_wc_block_data($settings)
        {
        }
        /**
         * Format a page object into a standard array of data.
         *
         * @param WP_Post|int $page Page object or ID.
         * @return array
         */
        protected static function format_page_resource($page)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         * @return string The cache buster value to use for the given file.
         */
        protected static function get_file_version($file)
        {
        }
        /**
         * Queues a block script in the frontend.
         *
         * @since 2.3.0
         * @since 2.6.0 Changed $name to $script_name and added $handle argument.
         * @since 2.9.0 Made it so scripts are not loaded in admin pages.
         *
         * @param string $script_name  Name of the script used to identify the file inside build folder.
         * @param string $handle       Optional. Provided if the handle should be different than the script name. `wc-` prefix automatically added.
         * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
         */
        public static function register_block_script($script_name, $handle = '', $dependencies = [])
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @since 2.0.0
         *
         * @param string $handle Name of the stylesheet. Should be unique.
         * @param string $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
         * @param array  $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                       'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         */
        protected static function register_style($handle, $src, $deps = [], $media = 'all')
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Assets {
    /**
     * The Api class provides an interface to various asset registration helpers.
     *
     * @since 2.5.0
     */
    class Api
    {
        /**
         * Reference to the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor for class
         *
         * @param Package $package An instance of Package.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file (relative to the plugin
         *                     directory).
         * @return string The cache buster value to use for the given file.
         */
        protected function get_file_version($file)
        {
        }
        /**
         * Retrieve the url to an asset for this plugin.
         *
         * @param string $relative_path An optional relative path appended to the
         *                              returned url.
         *
         * @return string
         */
        protected function get_asset_url($relative_path = '')
        {
        }
        /**
         * Registers a script according to `wp_register_script`, additionally
         * loading the translations for the file.
         *
         * @since 2.5.0
         *
         * @param string $handle        Name of the script. Should be unique.
         * @param string $relative_src  Relative url for the script to the path
         *                              from plugin root.
         * @param array  $dependencies  Optional. An array of registered script
         *                              handles this script depends on. Default
         *                              empty array.
         * @param bool   $has_i18n      Optional. Whether to add a script
         *                              translation call to this file. Default:
         *                              true.
         */
        public function register_script($handle, $relative_src, $dependencies = [], $has_i18n = true)
        {
        }
        /**
         * Queues a block script in the frontend.
         *
         * @since 2.5.0
         * @since 2.6.0 Changed $name to $script_name and added $handle argument.
         * @since 2.9.0 Made it so scripts are not loaded in admin pages.
         *
         * @param string $script_name  Name of the script used to identify the file inside build folder.
         * @param string $handle       Optional. Provided if the handle should be different than the script name. `wc-` prefix automatically added.
         * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
         */
        public function register_block_script($script_name, $handle = '', $dependencies = [])
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @since 2.5.0
         * @since 2.6.0 Change src to be relative source.
         *
         * @param string $handle       Name of the stylesheet. Should be unique.
         * @param string $relative_src Relative source of the stylesheet to the plugin path.
         * @param array  $deps         Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string $media        Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                             'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         */
        public function register_style($handle, $relative_src, $deps = [], $media = 'all')
        {
        }
        /**
         * Returns the appropriate asset path for loading either legacy builds or
         * current builds.
         *
         * @param   string $filename  Filename for asset path (without extension).
         * @param   string $type      File type (.css or .js).
         *
         * @return  string             The generated path.
         */
        public function get_block_asset_build_path($filename, $type = 'js')
        {
        }
    }
    /**
     * Class instance for registering data used on the current view session by
     * assets.
     *
     * @since 2.5.0
     */
    class AssetDataRegistry
    {
        /**
         * Contains registered data.
         *
         * @var array
         */
        private $data = [];
        /**
         * Lazy data is an array of closures that will be invoked just before
         * asset data is generated for the enqueued script.
         *
         * @var array
         */
        private $lazy_data = [];
        /**
         * Asset handle for registered data.
         *
         * @var string
         */
        private $handle = 'wc-settings';
        /**
         * Asset API interface for various asset registration.
         *
         * @var API
         */
        private $api;
        /**
         * Constructor
         *
         * @param Api $asset_api  Asset API interface for various asset registration.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Hook into WP asset registration for enqueueing asset data.
         */
        protected function init()
        {
        }
        /**
         * Exposes core asset data
         *
         * @return array  An array containing core data.
         */
        protected function get_core_data()
        {
        }
        /**
         * Returns block-related data for enqueued wc-settings script.
         * Format order statuses by removing a leading 'wc-' if present.
         *
         * @param array $statuses Order statuses.
         * @return array formatted statuses.
         */
        protected function get_order_statuses($statuses)
        {
        }
        /**
         * Used for on demand initialization of asset data and registering it with
         * the internal data registry.
         *
         * Note: core data will overwrite any externally registered data via the api.
         */
        protected function initialize_core_data()
        {
        }
        /**
         * Loops through each registered lazy data callback and adds the returned
         * value to the data array.
         *
         * This method is executed right before preparing the data for printing to
         * the rendered screen.
         *
         * @return void
         */
        protected function execute_lazy_data()
        {
        }
        /**
         * Exposes private registered data to child classes.
         *
         * @return array  The registered data on the private data property
         */
        protected function get()
        {
        }
        /**
         * Allows checking whether a key exists.
         *
         * @param string $key  The key to check if exists.
         * @return bool  Whether the key exists in the current data registry.
         */
        public function exists($key)
        {
        }
        /**
         * Interface for adding data to the registry.
         *
         * @param string $key  The key used to reference the data being registered.
         *                     You can only register data that is not already in the
         *                     registry identified by the given key.
         * @param mixed  $data If not a function, registered to the registry as is.
         *                     If a function, then the callback is invoked right
         *                     before output to the screen.
         *
         * @throws InvalidArgumentException  Only throws when site is in debug mode.
         *                                   Always logs the error.
         */
        public function add($key, $data)
        {
        }
        /**
         * Callback for registering the data script via WordPress API.
         *
         * @return void
         */
        public function register_data_script()
        {
        }
        /**
         * Callback for enqueuing asset data via the WP api.
         *
         * Note: while this is hooked into print/admin_print_scripts, it still only
         * happens if the script attached to `wc-settings` handle is enqueued. This
         * is done to allow for any potentially expensive data generation to only
         * happen for routes that need it.
         */
        public function enqueue_asset_data()
        {
        }
        /**
         * See self::add() for docs.
         *
         * @param   string $key   Key for the data.
         * @param   mixed  $data  Value for the data.
         *
         * @throws InvalidArgumentException  If key is not a string or already
         *                                   exists in internal data cache.
         */
        protected function add_data($key, $data)
        {
        }
        /**
         * Exposes whether the current site is in debug mode or not.
         *
         * @return boolean  True means the site is in debug mode.
         */
        protected function debug()
        {
        }
    }
    /**
     * Backwards Compatibility class for plugins using wcSettings in prior versions.
     *
     * Note: This will be removed at some point.
     *
     * @since 2.5.0
     */
    class BackCompatAssetDataRegistry extends \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry
    {
        /**
         * Overrides parent method.
         *
         * @see AssetDataRegistry::enqueue_asset_data
         */
        public function enqueue_asset_data()
        {
        }
        /**
         * Override parent method.
         *
         * @see AssetDataRegistry::get_core_data
         *
         * @return array  An array of data to output for enqueued script.
         */
        protected function get_core_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\BlockTypes {
    /**
     * AbstractBlock class.
     */
    abstract class AbstractBlock
    {
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $namespace = 'woocommerce';
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Tracks if assets have been enqueued.
         *
         * @var boolean
         */
        protected $enqueued_assets = false;
        /**
         * Constructor
         *
         * @param string $block_name Optional set block name during construct.
         */
        public function __construct($block_name = '')
        {
        }
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the block.
         *
         * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
         * @param string          $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = [], $content = '')
        {
        }
        /**
         * Enqueue assets used for rendering the block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        public function enqueue_assets(array $attributes = [])
        {
        }
        /**
         * Enqueue assets used for rendering the block in editor context.
         *
         * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
         */
        public function enqueue_editor_assets()
        {
        }
        /**
         * Injects block attributes into the block.
         *
         * @param string $content HTML content to inject into.
         * @param array  $attributes Key value pairs of attributes.
         * @return string Rendered block with data attributes.
         */
        protected function inject_html_data_attributes($content, array $attributes)
        {
        }
        /**
         * Converts block attributes to HTML data attributes.
         *
         * @param array $attributes Key value pairs of attributes.
         * @return string Rendered HTML attributes.
         */
        protected function get_html_data_attributes(array $attributes)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
        /**
         * Script to append the correct sizing class to a block skeleton.
         *
         * @return string
         */
        protected function get_skeleton_inline_script()
        {
        }
    }
    /**
     * AbstractDynamicBlock class.
     */
    abstract class AbstractDynamicBlock
    {
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $namespace = 'woocommerce';
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Include and render a dynamic block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public abstract function render($attributes = array(), $content = '');
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
        /**
         * Get the schema for the alignment property.
         *
         * @return array Property definition for align.
         */
        protected function get_schema_align()
        {
        }
        /**
         * Get the schema for a list of IDs.
         *
         * @return array Property definition for a list of numeric ids.
         */
        protected function get_schema_list_ids()
        {
        }
        /**
         * Get the schema for a boolean value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_boolean($default = true)
        {
        }
        /**
         * Get the schema for a numeric value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_number($default)
        {
        }
        /**
         * Get the schema for a string value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_string($default = '')
        {
        }
    }
    /**
     * AbstractProductGrid class.
     */
    abstract class AbstractProductGrid extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Attributes.
         *
         * @var array
         */
        protected $attributes = array();
        /**
         * InnerBlocks content.
         *
         * @var string
         */
        protected $content = '';
        /**
         * Query args.
         *
         * @var array
         */
        protected $query_args = array();
        /**
         * Get a set of attributes shared across most of the grid blocks.
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_attributes()
        {
        }
        /**
         * Include and render the dynamic block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the schema for the contentVisibility attribute
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_schema_content_visibility()
        {
        }
        /**
         * Get the schema for the orderby attribute.
         *
         * @return array Property definition of `orderby` attribute.
         */
        protected function get_schema_orderby()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        protected function parse_attributes($attributes)
        {
        }
        /**
         * Parse query args.
         *
         * @return array
         */
        protected function parse_query_args()
        {
        }
        /**
         * Parse query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_ordering_query_args(&$query_args)
        {
        }
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected abstract function set_block_query_args(&$query_args);
        /**
         * Set categories query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_categories_query_args(&$query_args)
        {
        }
        /**
         * Set visibility query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_visibility_query_args(&$query_args)
        {
        }
        /**
         * Works out the item limit based on rows and columns, or returns default.
         *
         * @return int
         */
        protected function get_products_limit()
        {
        }
        /**
         * Run the query and return an array of product IDs
         *
         * @return array List of product IDs
         */
        protected function get_products()
        {
        }
        /**
         * Get the list of classes to apply to this block.
         *
         * @return string space-separated list of classes.
         */
        protected function get_container_classes()
        {
        }
        /**
         * Render a single products.
         *
         * @param int $id Product ID.
         * @return string Rendered product output.
         */
        public function render_product($id)
        {
        }
        /**
         * Get the product image.
         *
         * @param \WC_Product $product Product.
         * @return string
         */
        protected function get_image_html($product)
        {
        }
        /**
         * Get the product title.
         *
         * @param \WC_Product $product Product.
         * @return string
         */
        protected function get_title_html($product)
        {
        }
        /**
         * Render the rating icons.
         *
         * @param WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_rating_html($product)
        {
        }
        /**
         * Get the price.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_price_html($product)
        {
        }
        /**
         * Get the sale badge.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_sale_badge_html($product)
        {
        }
        /**
         * Get the button.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_button_html($product)
        {
        }
        /**
         * Get the "add to cart" button.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_add_to_cart($product)
        {
        }
    }
    /**
     * ActiveFilters class.
     */
    class ActiveFilters extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'active-filters';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * AllProducts class.
     */
    class AllProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'all-products';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
    /**
     * AllReviews class.
     */
    class AllReviews extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'all-reviews';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * AtomicBlock class.
     */
    class AtomicBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Inject attributes and block name.
         *
         * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
         * @param string          $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = [], $content = '')
        {
        }
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Converts block attributes to HTML data attributes.
         *
         * @param array $attributes Key value pairs of attributes.
         * @return string Rendered HTML attributes.
         */
        protected function get_html_data_attributes(array $attributes)
        {
        }
    }
    /**
     * AttributeFilter class.
     */
    class AttributeFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'attribute-filter';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * Cart class.
     */
    class Cart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Cart block.
         *
         * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
         * @param string          $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Removes accents from an array of values, sorts by the values, then returns the original array values sorted.
         *
         * @param array $array Array of values to sort.
         * @return array Sorted array.
         */
        protected function deep_sort_with_accents($array)
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
        /**
         * Hydrate the cart block with data from the API.
         *
         * @param AssetDataRegistry $data_registry Data registry instance.
         */
        protected function hydrate_from_api(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $data_registry)
        {
        }
        /**
         * Render skeleton markup for the cart block.
         */
        protected function get_skeleton()
        {
        }
    }
    /**
     * Checkout class.
     */
    class Checkout extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the block.
         *
         * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
         * @param string          $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Check if we're viewing a checkout page endpoint, rather than the main checkout page itself.
         *
         * @return boolean
         */
        protected function is_checkout_endpoint()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Removes accents from an array of values, sorts by the values, then returns the original array values sorted.
         *
         * @param array $array Array of values to sort.
         * @return array Sorted array.
         */
        protected function deep_sort_with_accents($array)
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
        /**
         * Get customer payment methods for use in checkout.
         *
         * @param AssetDataRegistry $data_registry Data registry instance.
         */
        protected function hydrate_customer_payment_methods(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $data_registry)
        {
        }
        /**
         * Hydrate the checkout block with data from the API.
         *
         * @param AssetDataRegistry $data_registry Data registry instance.
         */
        protected function hydrate_from_api(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $data_registry)
        {
        }
        /**
         * Render skeleton markup for the checkout block.
         */
        protected function get_skeleton()
        {
        }
        /**
         * Callback for woocommerce_payment_methods_list_item filter to add token id
         * to the generated list.
         *
         * @param array     $list_item The current list item for the saved payment method.
         * @param \WC_Token $token     The token for the current list item.
         *
         * @return array The list item with the token id added.
         */
        public static function include_token_id_with_payment_methods($list_item, $token)
        {
        }
    }
    /**
     * FeaturedCategory class.
     */
    class FeaturedCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-category';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true);
        /**
         * Render the Featured Category block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param \WP_Term $category Term object.
         * @return string
         */
        public function get_styles($attributes, $category)
        {
        }
        /**
         * Get class names for the block container.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string
         */
        public function get_classes($attributes)
        {
        }
        /**
         * Returns the main product image URL.
         *
         * @param \WP_Term $category Term object.
         * @param string   $size    Image size, defaults to 'full'.
         * @return string
         */
        public function get_image($category, $size = 'full')
        {
        }
    }
    /**
     * FeaturedProduct class.
     */
    class FeaturedProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-product';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true, 'showPrice' => true);
        /**
         * Render the Featured Product block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array       $attributes Block attributes. Default empty array.
         * @param \WC_Product $product Product object.
         * @return string
         */
        public function get_styles($attributes, $product)
        {
        }
        /**
         * Get class names for the block container.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string
         */
        public function get_classes($attributes)
        {
        }
        /**
         * Returns the main product image URL.
         *
         * @param \WC_Product $product Product object.
         * @param string      $size    Image size, defaults to 'full'.
         * @return string
         */
        public function get_image($product, $size = 'full')
        {
        }
    }
    /**
     * HandpickedProducts class.
     */
    class HandpickedProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'handpicked-products';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Set visibility query args. Handpicked products will show hidden products if chosen.
         *
         * @param array $query_args Query args.
         */
        protected function set_visibility_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * PriceFilter class.
     */
    class PriceFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'price-filter';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * ProductBestSellers class.
     */
    class ProductBestSellers extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-best-sellers';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductCategories class.
     */
    class ProductCategories extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-categories';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('hasCount' => true, 'hasImage' => false, 'hasEmpty' => false, 'isDropdown' => false, 'isHierarchical' => true);
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
        /**
         * Render the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the list of classes to apply to this block.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string space-separated list of classes.
         */
        protected function get_container_classes($attributes = array())
        {
        }
        /**
         * Get categories (terms) from the db.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array
         */
        protected function get_categories($attributes)
        {
        }
        /**
         * Build hierarchical tree of categories.
         *
         * @param array $categories List of terms.
         * @return array
         */
        protected function build_category_tree($categories)
        {
        }
        /**
         * Build hierarchical tree of categories by appending children in the tree.
         *
         * @param array $categories List of terms.
         * @param array $categories_by_parent List of terms grouped by parent.
         * @return array
         */
        protected function fill_category_children($categories, $categories_by_parent)
        {
        }
        /**
         * Render the category list as a dropdown.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @return string Rendered output.
         */
        protected function renderDropdown($categories, $attributes, $uid)
        {
        }
        /**
         * Render dropdown options list.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @param int   $depth Current depth.
         * @return string Rendered output.
         */
        protected function renderDropdownOptions($categories, $attributes, $uid, $depth = 0)
        {
        }
        /**
         * Render the category list as a list.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @param int   $depth Current depth.
         * @return string Rendered output.
         */
        protected function renderList($categories, $attributes, $uid, $depth = 0)
        {
        }
        /**
         * Render a list of terms.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @param int   $depth Current depth.
         * @return string Rendered output.
         */
        protected function renderListItems($categories, $attributes, $uid, $depth = 0)
        {
        }
        /**
         * Returns the category image html
         *
         * @param \WP_Term $category Term object.
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $size Image size, defaults to 'woocommerce_thumbnail'.
         * @return string
         */
        public function get_image_html($category, $attributes, $size = 'woocommerce_thumbnail')
        {
        }
        /**
         * Get the count, if displaying.
         *
         * @param object $category Term object.
         * @param array  $attributes Block attributes. Default empty array.
         * @return string
         */
        protected function getCount($category, $attributes)
        {
        }
    }
    /**
     * ProductCategory class.
     */
    class ProductCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-category';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductNew class.
     */
    class ProductNew extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-new';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductOnSale class.
     */
    class ProductOnSale extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-on-sale';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductSearch class.
     */
    class ProductSearch extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-search';
    }
    /**
     * ProductTag class.
     */
    class ProductTag extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-tag';
        /**
         * Set args specific to this block.
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductTopRated class.
     */
    class ProductTopRated extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-top-rated';
        /**
         * Force orderby to rating.
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductsByAttribute class.
     */
    class ProductsByAttribute extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'products-by-attribute';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ReviewsByCategory class.
     */
    class ReviewsByCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'reviews-by-category';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * ReviewsByProduct class.
     */
    class ReviewsByProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'reviews-by-product';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * SingleProduct class.
     */
    class SingleProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'single-product';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Register/enqueue scripts used for this block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
        /**
         * Render the block on the frontend.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain {
    /**
     * Takes care of bootstrapping the plugin.
     *
     * @since 2.5.0
     */
    class Bootstrap
    {
        /**
         * Holds the Dependency Injection Container
         *
         * @var Container
         */
        private $container;
        /**
         * Holds the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor
         *
         * @param Container $container  The Dependency Injection Container.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
        /**
         * Init the package - load the blocks library and define constants.
         */
        protected function init()
        {
        }
        /**
         * Check core dependencies exist.
         *
         * @return boolean
         */
        protected function has_core_dependencies()
        {
        }
        /**
         * See if files have been built or not.
         *
         * @return bool
         */
        protected function is_built()
        {
        }
        /**
         * Add a notice stating that the build has not been done yet.
         */
        protected function add_build_notice()
        {
        }
        /**
         * Define the global feature flag.
         */
        protected function define_feature_flag()
        {
        }
        /**
         * Register core dependencies with the container.
         */
        protected function register_dependencies()
        {
        }
        /**
         * Register payment method integrations with the container.
         *
         * @internal Stripe is a temporary method that is used for setting up payment method integrations with Cart and
         *           Checkout blocks. This logic should get moved to the payment gateway extensions.
         */
        protected function register_payment_methods()
        {
        }
    }
    /**
     * Main package class.
     *
     * @since 2.5.0
     */
    class Package
    {
        /**
         * Holds the current version of the blocks plugin.
         *
         * @var string
         */
        private $version;
        /**
         * Holds the main path to the blocks plugin directory.
         *
         * @var string
         */
        private $path;
        /**
         * Constructor
         *
         * @param string $version      Version of the plugin.
         * @param string $plugin_path  Path to the main plugin file.
         */
        public function __construct($version, $plugin_path)
        {
        }
        /**
         * Returns the version of the plugin.
         *
         * @return string
         */
        public function get_version()
        {
        }
        /**
         * Returns the path to the plugin directory.
         *
         * @param string $relative_path  If provided, the relative path will be
         *                               appended to the plugin path.
         *
         * @return string
         */
        public function get_path($relative_path = '')
        {
        }
        /**
         * Returns the url to the blocks plugin directory.
         *
         * @param string $relative_url If provided, the relative url will be
         *                             appended to the plugin url.
         *
         * @return string
         */
        public function get_url($relative_url = '')
        {
        }
        /**
         * Checks if we're executing the code in an experimental build mode.
         *
         * @return boolean
         */
        public static function is_experimental_build()
        {
        }
        /**
         * Checks if we're executing the code in an feature plugin or experimental build mode.
         *
         * @return boolean
         */
        public static function is_feature_plugin_build()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain\Services {
    /**
     * Service class for adding DraftOrder functionality to WooCommerce core.
     */
    class DraftOrders
    {
        const DB_STATUS = 'wc-checkout-draft';
        const STATUS = 'checkout-draft';
        /**
         * Holds the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor
         *
         * @param Package $package An instance of the package class.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Set all hooks related to adding Checkout Draft order functionality to Woo Core.
         */
        public function init()
        {
        }
        /**
         * Installation related logic for Draft order functionality.
         *
         * @internal
         */
        public function install()
        {
        }
        /**
         * Remove cronjobs if they exist (but only from admin).
         *
         * @internal
         */
        public function uninstall()
        {
        }
        /**
         * Maybe create cron events.
         */
        protected function maybe_create_cronjobs()
        {
        }
        /**
         * Unschedule cron jobs that are present.
         */
        protected function maybe_remove_cronjobs()
        {
        }
        /**
         * Register custom order status for orders created via the API during checkout.
         *
         * Draft order status is used before payment is attempted, during checkout, when a cart is converted to an order.
         *
         * @param array $statuses Array of statuses.
         * @internal
         * @return array
         */
        public function register_draft_order_status(array $statuses)
        {
        }
        /**
         * Register custom order post status for orders created via the API during checkout.
         *
         * @param array $statuses Array of statuses.
         * @internal
         * @return array
         */
        public function register_draft_order_post_status(array $statuses)
        {
        }
        /**
         * Append draft status to a list of statuses.
         *
         * @param array $statuses Array of statuses.
         * @internal
         * @return array
         */
        public function append_draft_order_post_status($statuses)
        {
        }
        /**
         * Delete draft orders older than a day in batches of 20.
         *
         * Ran on a daily cron schedule.
         *
         * @internal
         */
        public function delete_expired_draft_orders()
        {
        }
        /**
         * Asserts whether incoming order results are expected given the query
         * this service class executes.
         *
         * @param WC_Order[] $order_results The order results being asserted.
         * @param int        $expected_batch_size The expected batch size for the results.
         * @throws Exception If any assertions fail, an exception is thrown.
         */
        private function assert_order_results($order_results, $expected_batch_size)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Installer class.
     */
    class Installer
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Installation tasks ran on admin_init callback.
         */
        public function install()
        {
        }
        /**
         * Initialize class features.
         */
        protected function init()
        {
        }
        /**
         * Set up the database tables which the plugin needs to function.
         */
        public function maybe_create_tables()
        {
        }
        /**
         * Create database table, if it doesn't already exist.
         *
         * Based on admin/install-helper.php maybe_create_table function.
         *
         * @param string $table_name Database table name.
         * @param string $create_sql Create database table SQL.
         * @return bool False on error, true if already exists or success.
         */
        protected function maybe_create_table($table_name, $create_sql)
        {
        }
        /**
         * Add a notice if table creation fails.
         *
         * @param string $table_name Name of the missing table.
         */
        protected function add_create_table_notice($table_name)
        {
        }
    }
    /**
     * Library class.
     */
    class Library
    {
        /**
         * Initialize block library features.
         */
        public static function init()
        {
        }
        /**
         * Register custom tables within $wpdb object.
         */
        public static function define_tables()
        {
        }
        /**
         * Register blocks, hooking up assets and render functions as needed.
         */
        public static function register_blocks()
        {
        }
        /**
         * Register atomic blocks on the PHP side.
         */
        protected static function register_atomic_blocks()
        {
        }
    }
    /**
     * Main package class.
     *
     * @since 2.5.0
     */
    class Package
    {
        /**
         * For back compat this is provided. Ideally, you should register your
         * class with Automattic\Woocommerce\Blocks\Container and make Package a
         * dependency.
         *
         * @since 2.5.0
         * @return Package  The Package instance class
         */
        protected static function get_package()
        {
        }
        /**
         * Init the package - load the blocks library and define constants.
         *
         * @since 2.5.0 Handled by new NewPackage.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
        /**
         * Checks if we're executing the code in an experimental build mode.
         *
         * @return boolean
         */
        public static function is_experimental_build()
        {
        }
        /**
         * Checks if we're executing the code in an feature plugin or experimental build mode.
         *
         * @return boolean
         */
        public static function is_feature_plugin_build()
        {
        }
        /**
         * Loads the dependency injection container for woocommerce blocks.
         *
         * @param boolean $reset Used to reset the container to a fresh instance.
         *                       Note: this means all dependencies will be
         *                       reconstructed.
         */
        public static function container($reset = false)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Payments {
    /**
     *  The Api class provides an interface to payment method registration.
     *
     * @since 2.6.0
     */
    class Api
    {
        /**
         * Reference to the PaymentMethodRegistry instance.
         *
         * @var PaymentMethodRegistry
         */
        private $payment_method_registry;
        /**
         * Reference to the AssetDataRegistry instance.
         *
         * @var AssetDataRegistry
         */
        private $asset_registry;
        /**
         * Constructor
         *
         * @param PaymentMethodRegistry $payment_method_registry An instance of Payment Method Registry.
         * @param AssetDataRegistry     $asset_registry  Used for registering data to pass along to the request.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_registry)
        {
        }
        /**
         * Initialize class features.
         */
        protected function init()
        {
        }
        /**
         * Add payment method script handles as script dependencies.
         *
         * @param array  $dependencies Array of script dependencies.
         * @param string $handle Script handle.
         * @return array
         */
        public function add_payment_method_script_dependencies($dependencies, $handle)
        {
        }
        /**
         * Add payment method data to Asset Registry.
         */
        public function add_payment_method_script_data()
        {
        }
        /**
         * Register payment method integrations bundled with blocks.
         *
         * @param PaymentMethodRegistry $payment_method_registry Payment method registry instance.
         */
        public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
        {
        }
        /**
         * Attempt to process a payment for the checkout API if no payment methods support the
         * woocommerce_rest_checkout_process_payment_with_context action.
         *
         * @param PaymentContext $context Holds context for the payment.
         * @param PaymentResult  $result  Result of the payment.
         */
        public function process_legacy_payment(\Automattic\WooCommerce\Blocks\Payments\PaymentContext $context, \Automattic\WooCommerce\Blocks\Payments\PaymentResult &$result)
        {
        }
    }
    interface PaymentMethodTypeInterface
    {
        /**
         * The name of the payment method
         *
         * @return string
         */
        public function get_name();
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active();
        /**
         * When called invokes any initialization/setup for the payment method type
         * instance.
         */
        public function initialize();
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the frontend context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles();
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the admin context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles_for_admin();
        /**
         * An array of key, value pairs of data made available to payment methods
         * client side.
         *
         * @return array
         */
        public function get_payment_method_data();
    }
}
namespace Automattic\WooCommerce\Blocks\Payments\Integrations {
    /**
     * AbstractPaymentMethodType class.
     *
     * @since 2.6.0
     */
    abstract class AbstractPaymentMethodType implements \Automattic\WooCommerce\Blocks\Payments\PaymentMethodTypeInterface
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = '';
        /**
         * Settings from the WP options table
         *
         * @var array
         */
        protected $settings = [];
        /**
         * Get a setting from the settings array if set.
         *
         * @param string $name Setting name.
         * @param mixed  $default Value that is returned if the setting does not exist.
         * @return mixed
         */
        protected function get_setting($name, $default = '')
        {
        }
        /**
         * Returns the name of the payment method.
         */
        public function get_name()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the frontend context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the admin context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles_for_admin()
        {
        }
        /**
         * An array of key, value pairs of data made available to payment methods
         * client side.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Bank Transfer (BACS) payment method integration
     *
     * @since 3.0.0
     */
    final class BankTransfer extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name/id/slug (matches id in WC_Gateway_BACS in core).
         *
         * @var string
         */
        protected $name = 'bacs';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Cash on Delivery (COD) payment method integration
     *
     * @since 3.0.0
     */
    final class CashOnDelivery extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name/id/slug (matches id in WC_Gateway_COD in core).
         *
         * @var string
         */
        protected $name = 'cod';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Return enable_for_virtual option.
         *
         * @return boolean True if store allows COD payment for orders containing only virtual products.
         */
        private function get_enable_for_virtual()
        {
        }
        /**
         * Return enable_for_methods option.
         *
         * @return array Array of shipping methods (string ids) that allow COD. (If empty, all support COD.)
         */
        private function get_enable_for_methods()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Cheque payment method integration
     *
     * @since 2.6.0
     */
    final class Cheque extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'cheque';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * PayPal Standard payment method integration
     *
     * @since 2.6.0
     */
    final class PayPal extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'paypal';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Stripe payment method integration
     *
     * @since 2.6.0
     */
    final class Stripe extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'stripe';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
        /**
         * Determine if store allows cards to be saved during checkout.
         *
         * @return bool True if merchant allows shopper to save card (payment method) during checkout).
         */
        private function get_allow_saved_cards()
        {
        }
        /**
         * Returns the label to use accompanying the total in the stripe statement.
         *
         * @return string Statement descriptor.
         */
        private function get_total_label()
        {
        }
        /**
         * Returns the publishable api key for the Stripe service.
         *
         * @return string Public api key.
         */
        private function get_publishable_key()
        {
        }
        /**
         * Returns whether to allow prepaid cards for payments.
         *
         * @return bool True means to allow prepaid card (default).
         */
        private function get_allow_prepaid_card()
        {
        }
        /**
         * Return the button type for the payment button.
         *
         * @return string Defaults to 'default'.
         */
        private function get_button_type()
        {
        }
        /**
         * Return the theme to use for the payment button.
         *
         * @return string Defaults to 'dark'.
         */
        private function get_button_theme()
        {
        }
        /**
         * Return the height for the payment button.
         *
         * @return string A pixel value for the height (defaults to '64').
         */
        private function get_button_height()
        {
        }
        /**
         * Return the inline cc option.
         *
         * @return boolean True if the inline CC form option is enabled.
         */
        private function get_inline_cc_form()
        {
        }
        /**
         * Return the locale for the payment button.
         *
         * @return string Defaults to en_US.
         */
        private function get_button_locale()
        {
        }
        /**
         * Return the icons urls.
         *
         * @return array Arrays of icons metadata.
         */
        private function get_icons()
        {
        }
        /**
         * Add payment request data to the order meta as hooked on the
         * woocommerce_rest_checkout_process_payment_with_context action.
         *
         * @param PaymentContext $context Holds context for the payment.
         * @param PaymentResult  $result  Result object for the payment.
         */
        public function add_payment_request_order_meta(\Automattic\WooCommerce\Blocks\Payments\PaymentContext $context, \Automattic\WooCommerce\Blocks\Payments\PaymentResult &$result)
        {
        }
        /**
         * Handles any potential stripe intents on the order that need handled.
         *
         * This is configured to execute after legacy payment processing has
         * happened on the woocommerce_rest_checkout_process_payment_with_context
         * action hook.
         *
         * @param PaymentContext $context Holds context for the payment.
         * @param PaymentResult  $result  Result object for the payment.
         */
        public function add_stripe_intents(\Automattic\WooCommerce\Blocks\Payments\PaymentContext $context, \Automattic\WooCommerce\Blocks\Payments\PaymentResult &$result)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Payments {
    /**
     * PaymentContext class.
     */
    class PaymentContext
    {
        /**
         * Payment method ID.
         *
         * @var string
         */
        protected $payment_method = '';
        /**
         * Order object for the order being paid.
         *
         * @var \WC_Order
         */
        protected $order;
        /**
         * Holds data to send to the payment gateway to support payment.
         *
         * @var array Key value pairs.
         */
        protected $payment_data = [];
        /**
         * Magic getter for protected properties.
         *
         * @param string $name Property name.
         */
        public function __get($name)
        {
        }
        /**
         * Set the chosen payment method ID context.
         *
         * @param string $payment_method Payment method ID.
         */
        public function set_payment_method($payment_method)
        {
        }
        /**
         * Retrieve the payment method instance for the current set payment method.
         *
         * @return {\WC_Payment_Gateway|null} An instance of the payment gateway if it exists.
         */
        public function get_payment_method_instance()
        {
        }
        /**
         * Set the order context.
         *
         * @param \WC_Order $order Order object.
         */
        public function set_order(\WC_Order $order)
        {
        }
        /**
         * Set payment data context.
         *
         * @param array $payment_data Array of key value pairs of data.
         */
        public function set_payment_data($payment_data = [])
        {
        }
    }
    /**
     * Class used for interacting with payment method types.
     *
     * @since 2.6.0
     */
    final class PaymentMethodRegistry
    {
        /**
         * Registered payment methods, as `$name => $instance` pairs.
         *
         * @var PaymentMethodTypeInterface[]
         */
        private $registered_payment_methods = [];
        /**
         * Registers a payment method.
         *
         * @param PaymentMethodTypeInterface $payment_method_type An instance of PaymentMethodTypeInterface.
         *
         * @return boolean True means registered successfully.
         */
        public function register(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodTypeInterface $payment_method_type)
        {
        }
        /**
         * Initializes all payment method types.
         */
        public function initialize()
        {
        }
        /**
         * Un-register a payment method.
         *
         * @param string|PaymentMethodTypeInterface $name Payment method name, or alternatively a PaymentMethodTypeInterface instance.
         * @return boolean True means unregistered successfully.
         */
        public function unregister($name)
        {
        }
        /**
         * Retrieves a registered payment method.
         *
         * @param string $name Payment method name.
         * @return PaymentMethodTypeInterface|null The registered payment method, or null if it is not registered.
         */
        public function get_registered($name)
        {
        }
        /**
         * Retrieves all registered payment methods.
         *
         * @return PaymentMethodTypeInterface[]
         */
        public function get_all_registered()
        {
        }
        /**
         * Checks if a payment method is registered.
         *
         * @param string $name Payment method name.
         * @return bool True if the payment method is registered, false otherwise.
         */
        public function is_registered($name)
        {
        }
        /**
         * Retrieves all registered payment methods that are also active.
         *
         * @return PaymentMethodTypeInterface[]
         */
        public function get_all_active_registered()
        {
        }
        /**
         * Gets an array of all registered payment method script handles.
         *
         * @return string[]
         */
        public function get_all_registered_script_handles()
        {
        }
        /**
         * Gets an array of all registered payment method script data.
         *
         * @return array
         */
        public function get_all_registered_script_data()
        {
        }
    }
    /**
     * PaymentResult class.
     */
    class PaymentResult
    {
        /**
         * List of valid payment statuses.
         *
         * @var array
         */
        protected $valid_statuses = ['success', 'failure', 'pending', 'error'];
        /**
         * Current payment status.
         *
         * @var string
         */
        protected $status = '';
        /**
         * Array of details about the payment.
         *
         * @var string
         */
        protected $payment_details = [];
        /**
         * Redirect URL for checkout.
         *
         * @var string
         */
        protected $redirect_url = '';
        /**
         * Constructor.
         *
         * @param string $status Sets the payment status for the result.
         */
        public function __construct($status = '')
        {
        }
        /**
         * Magic getter for protected properties.
         *
         * @param string $name Property name.
         */
        public function __get($name)
        {
        }
        /**
         * Set payment status.
         *
         * @throws \Exception When an invalid status is provided.
         *
         * @param string $payment_status Status to set.
         */
        public function set_status($payment_status)
        {
        }
        /**
         * Set payment details.
         *
         * @param array $payment_details Array of key value pairs of data.
         */
        public function set_payment_details($payment_details = [])
        {
        }
        /**
         * Set redirect URL.
         *
         * @param array $redirect_url URL to redirect the customer to after checkout.
         */
        public function set_redirect_url($redirect_url = [])
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Registry {
    /**
     * An abstract class for dependency types.
     *
     * Dependency types are instances of a dependency used by the
     * Dependency Injection Container for storing dependencies to invoke as they
     * are needed.
     *
     * @since 2.5.0
     */
    abstract class AbstractDependencyType
    {
        /**
         * Holds a callable or value provided for this type.
         *
         * @var mixed
         */
        private $callable_or_value;
        /**
         * Constructor
         *
         * @param mixed $callable_or_value  A callable or value for the dependency
         *                                  type instance.
         */
        public function __construct($callable_or_value)
        {
        }
        /**
         * Resolver for the internal dependency value.
         *
         * @param Container $container  The Dependency Injection Container.
         *
         * @return mixed
         */
        protected function resolve_value(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
        /**
         * Retrieves the value stored internally for this DependencyType
         *
         * @param Container $container  The Dependency Injection Container.
         *
         * @return void
         */
        public abstract function get(\Automattic\WooCommerce\Blocks\Registry\Container $container);
    }
    /**
     * A simple Dependency Injection Container
     *
     * This is used to manage dependencies used throughout the plugin.
     *
     * @since 2.5.0
     */
    class Container
    {
        /**
         * A map of Dependency Type objects used to resolve dependencies.
         *
         * @var AbstractDependencyType[]
         */
        private $registry = [];
        /**
         * Public api for adding a factory to the container.
         *
         * Factory dependencies will have the instantiation callback invoked
         * everytime the dependency is requested.
         *
         * Typical Usage:
         *
         * ```
         * $container->register( MyClass::class, $container->factory( $mycallback ) );
         * ```
         *
         * @param Closure $instantiation_callback  This will be invoked when the
         *                                         dependency is required.  It will
         *                                         receive an instance of this
         *                                         container so the callback can
         *                                         retrieve dependencies from the
         *                                         container.
         *
         * @return FactoryType  An instance of the FactoryType dependency.
         */
        public function factory(\Closure $instantiation_callback)
        {
        }
        /**
         * Interface for registering a new dependency with the container.
         *
         * By default, the $value will be added as a shared dependency.  This means
         * that it will be a single instance shared among any other classes having
         * that dependency.
         *
         * If you want a new instance everytime it's required, then wrap the value
         * in a call to the factory method (@see Container::factory for example)
         *
         * Note: Currently if the provided id already is registered in the container,
         * the provided value is ignored.
         *
         * @param string $id    A unique string identifier for the provided value.
         *                      Typically it's the fully qualified name for the
         *                      dependency.
         * @param mixed  $value The value for the dependency. Typically, this is a
         *                      closure that will create the class instance needed.
         */
        public function register($id, $value)
        {
        }
        /**
         * Interface for retrieving the dependency stored in the container for the
         * given identifier.
         *
         * @param string $id  The identifier for the dependency being retrieved.
         * @throws Exception  If there is no dependency for the given identifier in
         *                    the container.
         *
         * @return mixed  Typically a class instance.
         */
        public function get($id)
        {
        }
    }
    /**
     * Definition for the FactoryType dependency type.
     *
     * @since 2.5.0
     */
    class FactoryType extends \Automattic\WooCommerce\Blocks\Registry\AbstractDependencyType
    {
        /**
         * Invokes and returns the value from the stored internal callback.
         *
         * @param Container $container  An instance of the dependency injection
         *                              container.
         *
         * @return mixed
         */
        public function get(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
    }
    /**
     * A definition for the SharedType dependency type.
     *
     * @since 2.5.0
     */
    class SharedType extends \Automattic\WooCommerce\Blocks\Registry\AbstractDependencyType
    {
        /**
         * Holds a cached instance of the value stored (or returned) internally.
         *
         * @var mixed
         */
        private $shared_instance;
        /**
         * Returns the internal stored and shared value after initial generation.
         *
         * @param Container $container An instance of the dependency injection
         *                             container.
         *
         * @return mixed
         */
        public function get(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * RestApi class.
     */
    class RestApi
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Initialize class features.
         */
        protected function init()
        {
        }
        /**
         * Register REST API routes.
         */
        public function register_rest_routes()
        {
        }
        /**
         * Get routes for a namespace.
         *
         * @param string $namespace Namespace to retrieve.
         * @return array|null
         */
        public function get_routes_from_namespace($namespace)
        {
        }
        /**
         * The Store API does not require authentication.
         *
         * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
         * @return \WP_Error|null|bool
         */
        public function store_api_authentication($result)
        {
        }
        /**
         * Check if is request to the Store API.
         *
         * @return bool
         */
        protected function is_request_to_store_api()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\StoreApi\Routes {
    /**
     * RouteInterface.
     */
    interface RouteInterface
    {
        /**
         * Get the namespace for this route.
         *
         * @return string
         */
        public function get_namespace();
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path();
        /**
         * Get arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args();
    }
    /**
     * AbstractRoute class.
     */
    abstract class AbstractRoute implements \Automattic\WooCommerce\Blocks\StoreApi\Routes\RouteInterface
    {
        /**
         * Schema class instance.
         *
         * @var AbstractSchema
         */
        protected $schema;
        /**
         * Constructor.
         *
         * @param AbstractSchema $schema Schema class for this route.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema $schema)
        {
        }
        /**
         * Get the namespace for this route.
         *
         * @return string
         */
        public function get_namespace()
        {
        }
        /**
         * Get item schema properties.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the route response based on the type of request.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
        /**
         * For non-GET endpoints, require and validate a nonce to prevent CSRF attacks.
         *
         * Nonces will mismatch if the logged in session cookie is different! If using a client to test, set this cookie
         * to match the logged in cookie in your browser.
         *
         * @throws RouteException On error.
         *
         * @param \WP_REST_Request $request Request object.
         */
        protected function check_nonce(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for GET requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for POST requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for PUT requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         */
        protected function get_route_update_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for DELETE requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 500.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
        {
        }
        /**
         * Prepare a single item for response.
         *
         * @param mixed            $item Item to format to schema.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, \WP_REST_Request $request)
        {
        }
        /**
         * Retrieves the context param.
         *
         * Ensures consistent descriptions between endpoints, and populates enum from schema.
         *
         * @param array $args Optional. Additional arguments for context parameter. Default empty array.
         * @return array Context parameter details.
         */
        protected function get_context_param($args = array())
        {
        }
        /**
         * Prepares a response for insertion into a collection.
         *
         * @param \WP_REST_Response $response Response object.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        protected function prepare_response_for_collection(\WP_REST_Response $response)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param mixed            $item Item to prepare.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($item, $request)
        {
        }
        /**
         * Retrieves the query params for the collections.
         *
         * @return array Query parameters for the collection.
         */
        public function get_collection_params()
        {
        }
        /**
         * Makes the cart and sessions available to a route by loading them from core.
         */
        protected function maybe_load_cart()
        {
        }
    }
    /**
     * Cart class.
     */
    abstract class AbstractCartRoute extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the route response based on the type of request.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
        /**
         * If shipping/tax data has changed on the server since last calculation, trigger a recalculation now.
         *
         * @return void
         */
        protected function maybe_recalculate_totals()
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 500.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
        {
        }
    }
    /**
     * AbstractTermsRoute class.
     */
    abstract class AbstractTermsRoute extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the query params for collections of attributes.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get terms matching passed in args.
         *
         * @param string           $taxonomy Taxonomy to get terms from.
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        protected function get_terms_response($taxonomy, $request)
        {
        }
        /**
         * Get count of terms for current query.
         *
         * @param string $taxonomy Taxonomy to get terms from.
         * @param array  $args Array of args to pass to wp_count_terms.
         * @return int
         */
        protected function get_term_count($taxonomy, $args)
        {
        }
    }
    /**
     * Cart class.
     */
    class Cart extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartAddItem class.
     */
    class CartAddItem extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartApplyCoupon class.
     */
    class CartApplyCoupon extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartCoupons class.
     */
    class CartCoupons extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of cart coupons.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Add a coupon to the cart and return the result.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Deletes all coupons in the cart.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string           $coupon_code Coupon code.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($coupon_code, $request)
        {
        }
    }
    /**
     * CartCouponsByCode class.
     */
    class CartCouponsByCode extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single cart coupon.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Delete a single cart coupon.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartItems class.
     */
    class CartItems extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of cart items.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Creates one item from the collection.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Deletes all items in the cart.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array            $cart_item Object to prepare.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($cart_item, $request)
        {
        }
    }
    /**
     * CartItemsByKey class.
     */
    class CartItemsByKey extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single cart items.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Update a single cart item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_update_response(\WP_REST_Request $request)
        {
        }
        /**
         * Delete a single cart item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array            $cart_item Object to prepare.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($cart_item, $request)
        {
        }
    }
    /**
     * CartRemoveCoupon class.
     */
    class CartRemoveCoupon extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartRemoveItem class.
     */
    class CartRemoveItem extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartSelectShippingRate class.
     */
    class CartSelectShippingRate extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartUpdateItem class.
     */
    class CartUpdateItem extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartUpdateShipping class.
     */
    class CartUpdateShipping extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
    {
        /**
         * Get the namespace for this route.
         *
         * @return string
         */
        public function get_namespace()
        {
        }
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Format the request address.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_REST_Response
         */
        public function validate_shipping_address($request)
        {
        }
    }
    /**
     * Checkout class.
     */
    class Checkout extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Enforce nonces for all checkout endpoints.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Convert the cart into a new draft order, or update an existing draft order, and return an updated cart response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Update the order.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_update_response(\WP_REST_Request $request)
        {
        }
        /**
         * Update and process payment for the order.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 500.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
        {
        }
        /**
         * Gets draft order data from the customer session.
         *
         * @return array
         */
        protected function get_draft_order_id()
        {
        }
        /**
         * Updates draft order data in the customer session.
         *
         * @param integer $order_id Draft order ID.
         */
        protected function set_draft_order_id($order_id)
        {
        }
        /**
         * Get an order object, either using a current draft order, or returning a new one.
         *
         * @param integer $order_id Draft order ID.
         * @return \WC_Order|boolean Either the draft order, or false if one has not yet been created.
         */
        protected function get_draft_order_object($order_id)
        {
        }
        /**
         * Create or update a draft order based on the cart.
         *
         * @throws RouteException On error.
         *
         * @return \WC_Order Order object.
         */
        protected function create_or_update_draft_order()
        {
        }
        /**
         * Update an order using the posted values from the request.
         *
         * @param \WC_Order        $order Object to prepare for the response.
         * @param \WP_REST_Request $request Full details about the request.
         */
        protected function update_order_from_request(\WC_Order $order, \WP_REST_Request $request)
        {
        }
        /**
         * For orders which do not require payment, just update status.
         *
         * @param \WC_Order        $order Order object.
         * @param \WP_REST_Request $request Request object.
         * @return PaymentResult
         */
        protected function process_without_payment(\WC_Order $order, \WP_REST_Request $request)
        {
        }
        /**
         * Fires an action hook instructing active payment gateways to process the payment for an order and provide a result.
         *
         * @throws RouteException On error.
         * @param \WC_Order        $order Order object.
         * @param \WP_REST_Request $request Request object.
         * @return PaymentResult
         */
        protected function process_payment(\WC_Order $order, \WP_REST_Request $request)
        {
        }
        /**
         * Gets the chosen payment method ID from the request.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return string
         */
        protected function get_request_payment_method_id(\WP_REST_Request $request)
        {
        }
        /**
         * Gets the chosen payment method from the request.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WC_Payment_Gateway
         */
        protected function get_request_payment_method(\WP_REST_Request $request)
        {
        }
        /**
         * Gets and formats payment request data.
         *
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function get_request_payment_data(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductAttributeTerms class.
     */
    class ProductAttributeTerms extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractTermsRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of attribute terms.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductAttributes class.
     */
    class ProductAttributes extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of attributes.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductAttributesById class.
     */
    class ProductAttributesById extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductCategories class.
     */
    class ProductCategories extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractTermsRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of terms.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductCategoriesById class.
     */
    class ProductCategoriesById extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductCollectionData route.
     */
    class ProductCollectionData extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to \WP_Query.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get the query params for collections of products.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * ProductReviews class.
     */
    class ProductReviews extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of reviews.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepends internal property prefix to query parameters to match our response fields.
         *
         * @param string $query_param Query parameter.
         * @return string
         */
        protected function normalize_query_param($query_param)
        {
        }
        /**
         * Get the query params for collections of products.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * ProductTags class.
     */
    class ProductTags extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractTermsRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of terms.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Products class.
     */
    class Products extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to \WP_Query.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \WC_Product      $item Product object.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($item, $request)
        {
        }
        /**
         * Get the query params for collections of products.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * ProductsById class.
     */
    class ProductsById extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ReserveStockRouteExceptionException class.
     */
    class RouteException extends \Exception
    {
        /**
         * Sanitized error code.
         *
         * @var string
         */
        public $error_code;
        /**
         * Additional error data.
         *
         * @var array
         */
        public $additional_data = [];
        /**
         * Setup exception.
         *
         * @param string $error_code       Machine-readable error code, e.g `woocommerce_invalid_product_id`.
         * @param string $message          User-friendly translated error message, e.g. 'Product ID is invalid'.
         * @param int    $http_status_code Proper HTTP status code to respond with, e.g. 400.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         */
        public function __construct($error_code, $message, $http_status_code = 400, $additional_data = [])
        {
        }
        /**
         * Returns the error code.
         *
         * @return string
         */
        public function getErrorCode()
        {
        }
        /**
         * Returns additional error data.
         *
         * @return array
         */
        public function getAdditionalData()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\StoreApi {
    /**
     * RoutesController class.
     */
    class RoutesController
    {
        /**
         * Stores schemas.
         *
         * @var SchemaController
         */
        protected $schemas;
        /**
         * Stores routes.
         *
         * @var AbstractRoute[]
         */
        protected $routes = [];
        /**
         * Constructor.
         *
         * @param SchemaController $schemas Schema controller class passed to each route.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\SchemaController $schemas)
        {
        }
        /**
         * Get a route class instance.
         *
         * @throws Exception If the schema does not exist.
         *
         * @param string $name Name of schema.
         * @return AbstractRoute
         */
        public function get($name)
        {
        }
        /**
         * Register defined list of routes with WordPress.
         */
        public function register_routes()
        {
        }
        /**
         * Load route class instances.
         */
        protected function initialize()
        {
        }
    }
    /**
     * SchemaController class.
     */
    class SchemaController
    {
        /**
         * Stores schema class instances.
         *
         * @var AbstractSchema[]
         */
        protected $schemas = [];
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get a schema class instance.
         *
         * @throws Exception If the schema does not exist.
         *
         * @param string $name Name of schema.
         * @return AbstractSchema
         */
        public function get($name)
        {
        }
        /**
         * Load schema class instances.
         */
        protected function initialize()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas {
    /**
     * AbstractBlock class.
     *
     * @since 2.5.0
     */
    abstract class AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'Schema';
        /**
         * Returns the full item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Returns the public schema.
         *
         * @return array
         */
        public function get_public_item_schema()
        {
        }
        /**
         * Retrieves an array of endpoint arguments from the item schema for the controller.
         *
         * @param string $method Optional. HTTP method of the request.
         * @return array Endpoint arguments.
         */
        public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
        {
        }
        /**
         * Force all schema properties to be readonly.
         *
         * @param array $properties Schema.
         * @return array Updated schema.
         */
        protected function force_schema_readonly($properties)
        {
        }
        /**
         * Returns consistent currency schema used across endpoints for prices.
         *
         * @return array
         */
        protected function get_store_currency_properties()
        {
        }
        /**
         * Prepares a list of store currency data to return in responses.
         *
         * @todo Core could use a more defined currency object format, making use of
         * constants for currency format rather than strings, and holding this type
         * of information instead of plugins/blocks needed to normalize things
         * themselves.
         *
         * @return array
         */
        protected function get_store_currency_response()
        {
        }
        /**
         * Convert monetary values from WooCommerce to string based integers, using
         * the smallest unit of a currency.
         *
         * @param string|float $amount Monetary amount with decimals.
         * @param int          $decimals Number of decimals the amount is formatted with.
         * @param int          $rounding_mode Defaults to the PHP_ROUND_HALF_UP constant.
         * @return string      The new amount.
         */
        protected function prepare_money_response($amount, $decimals = 2, $rounding_mode = PHP_ROUND_HALF_UP)
        {
        }
        /**
         * Prepares HTML based content, such as post titles and content, for the API response.
         *
         * The wptexturize, convert_chars, and trim functions are also used in the `the_title` filter.
         * The function wp_kses_post removes disallowed HTML tags.
         *
         * @param string|array $response Data to format.
         * @return string|array Formatted data.
         */
        protected function prepare_html_response($response)
        {
        }
    }
    /**
     * BillingAddressSchema class.
     *
     * Provides a generic billing address schema for composition in other schemas.
     */
    class BillingAddressSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'billing_address';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WC_Order|\WC_Customer $address An object with billing address.
         *
         * @throws RouteException When the invalid object types are provided.
         * @return stdClass
         */
        public function get_item_response($address)
        {
        }
    }
    /**
     * CartCouponSchema class.
     *
     * @since 2.5.0
     */
    class CartCouponSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart_coupon';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Check given coupon exists.
         *
         * @param string $coupon_code Coupon code.
         * @return bool
         */
        public function coupon_exists($coupon_code)
        {
        }
        /**
         * Convert a WooCommerce cart item to an object suitable for the response.
         *
         * @param string $coupon_code Coupon code from the cart.
         * @return array
         */
        public function get_item_response($coupon_code)
        {
        }
    }
    /**
     * ProductSchema class.
     *
     * @since 2.5.0
     */
    class ProductSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
        {
        }
        /**
         * Product schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        public function get_item_response($product)
        {
        }
        /**
         * Get list of product images.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        protected function get_images(\WC_Product $product)
        {
        }
        /**
         * Gets remaining stock amount for a product.
         *
         * @param \WC_Product $product Product instance.
         * @return integer|null
         */
        protected function get_remaining_stock(\WC_Product $product)
        {
        }
        /**
         * If a product has low stock, return the remaining stock amount for display.
         *
         * @param \WC_Product $product Product instance.
         * @return integer|null
         */
        protected function get_low_stock_remaining(\WC_Product $product)
        {
        }
        /**
         * Get the quantity limit for an item in the cart.
         *
         * @param \WC_Product $product Product instance.
         * @return int
         */
        protected function get_product_quantity_limit(\WC_Product $product)
        {
        }
        /**
         * Returns true if the given attribute is valid.
         *
         * @param mixed $attribute Object or variable to check.
         * @return boolean
         */
        protected function filter_valid_attribute($attribute)
        {
        }
        /**
         * Returns true if the given attribute is valid and used for variations.
         *
         * @param mixed $attribute Object or variable to check.
         * @return boolean
         */
        protected function filter_variation_attribute($attribute)
        {
        }
        /**
         * Get variation IDs and attributes from the DB.
         *
         * @param \WC_Product $product Product instance.
         * @returns array
         */
        protected function get_variations(\WC_Product $product)
        {
        }
        /**
         * Get list of product attributes and attribute terms.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        protected function get_attributes(\WC_Product $product)
        {
        }
        /**
         * Prepare an attribute term for the response.
         *
         * @param \WP_Term $term Term object.
         * @return object
         */
        protected function prepare_product_attribute_taxonomy_value(\WP_Term $term)
        {
        }
        /**
         * Prepare an attribute term for the response.
         *
         * @param string $name Attribute term name.
         * @param int    $id Attribute term ID.
         * @param string $slug Attribute term slug.
         * @return object
         */
        protected function prepare_product_attribute_value($name, $id = 0, $slug = '')
        {
        }
        /**
         * Get an array of pricing data.
         *
         * @param \WC_Product $product Product instance.
         * @param string      $tax_display_mode If returned prices are incl or excl of tax.
         * @return array
         */
        protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
        {
        }
        /**
         * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
         *
         * @param string $tax_display_mode Provided tax display mode.
         * @return string Valid tax display mode.
         */
        protected function get_tax_display_mode($tax_display_mode = '')
        {
        }
        /**
         * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
         *
         * @param string $tax_display_mode If returned prices are incl or excl of tax.
         * @return string Function name.
         */
        protected function get_price_function_from_tax_display_mode($tax_display_mode)
        {
        }
        /**
         * Get price range from certain product types.
         *
         * @param \WC_Product $product Product instance.
         * @param string      $tax_display_mode If returned prices are incl or excl of tax.
         * @return object|null
         */
        protected function get_price_range(\WC_Product $product, $tax_display_mode = '')
        {
        }
        /**
         * Returns a list of terms assigned to the product.
         *
         * @param \WC_Product $product Product object.
         * @param string      $taxonomy Taxonomy name.
         * @return array Array of terms (id, name, slug).
         */
        protected function get_term_list(\WC_Product $product, $taxonomy = '')
        {
        }
    }
    /**
     * CartItemSchema class.
     *
     * @since 2.5.0
     */
    class CartItemSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ProductSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart_item';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
        {
        }
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce cart item to an object suitable for the response.
         *
         * @param array $cart_item Cart item array.
         * @return array
         */
        public function get_item_response($cart_item)
        {
        }
        /**
         * Get an array of pricing data.
         *
         * @param \WC_Product $product Product instance.
         * @param string      $tax_display_mode If returned prices are incl or excl of tax.
         * @return array
         */
        protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
        {
        }
        /**
         * Returns the remaining stock for a product if it has stock.
         *
         * This also factors in draft orders.
         *
         * @param \WC_Product $product Product instance.
         * @return integer|null
         */
        protected function get_remaining_stock(\WC_Product $product)
        {
        }
        /**
         * Format variation data, for example convert slugs such as attribute_pa_size to Size.
         *
         * @param array       $variation_data Array of data from the cart.
         * @param \WC_Product $product Product data.
         * @return array
         */
        protected function format_variation_data($variation_data, $product)
        {
        }
    }
    /**
     * CartSchema class.
     *
     * @since 2.5.0
     */
    class CartSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart';
        /**
         * Item schema instance.
         *
         * @var CartItemSchema
         */
        protected $item_schema;
        /**
         * Coupon schema instance.
         *
         * @var CartCouponSchema
         */
        protected $coupon_schema;
        /**
         * Shipping rates schema instance.
         *
         * @var CartShippingRateSchema
         */
        protected $shipping_rate_schema;
        /**
         * Shipping address schema instance.
         *
         * @var ShippingAddressSchema
         */
        protected $shipping_address_schema;
        /**
         * Error schema instance.
         *
         * @var ErrorSchema
         */
        protected $error_schema;
        /**
         * Constructor.
         *
         * @param CartItemSchema         $item_schema Item schema instance.
         * @param CartCouponSchema       $coupon_schema Coupon schema instance.
         * @param CartShippingRateSchema $shipping_rate_schema Shipping rates schema instance.
         * @param ShippingAddressSchema  $shipping_address_schema Shipping address schema instance.
         * @param ErrorSchema            $error_schema Error schema instance.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartItemSchema $item_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartCouponSchema $coupon_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartShippingRateSchema $shipping_rate_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ShippingAddressSchema $shipping_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ErrorSchema $error_schema)
        {
        }
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a woo cart into an object suitable for the response.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        public function get_item_response($cart)
        {
        }
        /**
         * Get tax lines from the cart and format to match schema.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        protected function get_tax_lines($cart)
        {
        }
        /**
         * Get cart validation errors.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        protected function get_cart_errors($cart)
        {
        }
    }
    /**
     * CartShippingRateSchema class.
     */
    class CartShippingRateSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart-shipping-rate';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Schema for a single rate.
         *
         * @return array
         */
        protected function get_rate_properties()
        {
        }
        /**
         * Convert a shipping rate from WooCommerce into a valid response.
         *
         * @param array $package Shipping package complete with rates from WooCommerce.
         * @return array
         */
        public function get_item_response($package)
        {
        }
        /**
         * Prepare an array of rates from a package for the response.
         *
         * @param array $package Shipping package complete with rates from WooCommerce.
         * @return array
         */
        protected function prepare_rates_response($package)
        {
        }
        /**
         * Response for a single rate.
         *
         * @param WC_Shipping_Rate $rate Rate object.
         * @param string           $selected_rate Selected rate.
         * @return array
         */
        protected function get_rate_response($rate, $selected_rate = '')
        {
        }
        /**
         * Gets a prop of the rate object, if callable.
         *
         * @param WC_Shipping_Rate $rate Rate object.
         * @param string           $prop Prop name.
         * @return string
         */
        protected function get_rate_prop($rate, $prop)
        {
        }
        /**
         * Converts rate meta data into a suitable response object.
         *
         * @param WC_Shipping_Rate $rate Rate object.
         * @return array
         */
        protected function get_rate_meta_data($rate)
        {
        }
    }
    /**
     * CheckoutSchema class.
     */
    class CheckoutSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'checkout';
        /**
         * Billing address schema instance.
         *
         * @var BillingAddressSchema
         */
        protected $billing_address_schema;
        /**
         * Shipping address schema instance.
         *
         * @var ShippingAddressSchema
         */
        protected $shipping_address_schema;
        /**
         * Constructor.
         *
         * @param BillingAddressSchema  $billing_address_schema Billing address schema instance.
         * @param ShippingAddressSchema $shipping_address_schema Shipping address schema instance.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\BillingAddressSchema $billing_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ShippingAddressSchema $shipping_address_schema)
        {
        }
        /**
         * Checkout schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Return the response for checkout.
         *
         * @param object $item Results from checkout action.
         * @return array
         */
        public function get_item_response($item)
        {
        }
        /**
         * Get the checkout response based on the current order and any payments.
         *
         * @param \WC_Order     $order Order object.
         * @param PaymentResult $payment_result Payment result object.
         * @return array
         */
        protected function get_checkout_response(\WC_Order $order, \Automattic\WooCommerce\Blocks\Payments\PaymentResult $payment_result = null)
        {
        }
        /**
         * This prepares the payment details for the response so it's following the
         * schema where it's an array of objects.
         *
         * @param array $payment_details An array of payment details from the processed payment.
         *
         * @return array An array of objects where each object has the key and value
         *               as distinct properties.
         */
        protected function prepare_payment_details_for_response(array $payment_details)
        {
        }
    }
    /**
     * ErrorSchema class.
     *
     * @since 2.5.0
     */
    class ErrorSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'error';
        /**
         * Product schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param \WP_Error $error Error object.
         * @return array
         */
        public function get_item_response(\WP_Error $error)
        {
        }
    }
    /**
     * ImageAttachmentSchema class.
     */
    class ImageAttachmentSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'image';
        /**
         * Product schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param int $attachment_id Image attachment ID.
         * @return array|null
         */
        public function get_item_response($attachment_id)
        {
        }
    }
    /**
     * OrderCouponSchema class.
     */
    class OrderCouponSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'order_coupon';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert an order coupon to an object suitable for the response.
         *
         * @param \WC_Order_Item_Coupon $coupon Order coupon array.
         * @return array
         */
        public function get_item_response(\WC_Order_Item_Coupon $coupon)
        {
        }
    }
    /**
     * ProductAttributeSchema class.
     *
     * @since 2.5.0
     */
    class ProductAttributeSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product_attribute';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert an attribute object into an object suitable for the response.
         *
         * @param object $attribute Attribute object.
         * @return array
         */
        public function get_item_response($attribute)
        {
        }
    }
    /**
     * TermSchema class.
     *
     * @since 2.5.0
     */
    class TermSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'term';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WP_Term $term Term object.
         * @return array
         */
        public function get_item_response($term)
        {
        }
    }
    /**
     * ProductCategorySchema class.
     */
    class ProductCategorySchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\TermSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product-category';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
        {
        }
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WP_Term $term Term object.
         * @return array
         */
        public function get_item_response($term)
        {
        }
        /**
         * Get total number of reviews for products in a category.
         *
         * @param \WP_Term $term Term object.
         * @return int
         */
        protected function get_category_review_count($term)
        {
        }
    }
    /**
     * ProductCollectionDataSchema class.
     *
     * @since 2.5.0
     */
    class ProductCollectionDataSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product-collection-data';
        /**
         * Product collection data schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Format data.
         *
         * @param array $data Collection data to format and return.
         * @return array
         */
        public function get_item_response($data)
        {
        }
    }
    /**
     * ProductReviewSchema class.
     */
    class ProductReviewSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product_review';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
        {
        }
        /**
         * Product review schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param \WP_Comment $review Product review object.
         * @return array
         */
        public function get_item_response(\WP_Comment $review)
        {
        }
    }
    /**
     * ShippingAddressSchema class.
     *
     * Provides a generic shipping address schema for composition in other schemas.
     *
     * @since 2.5.0
     */
    class ShippingAddressSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'shipping_address';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WC_Order|\WC_Customer $address An object with shipping address.
         *
         * @throws RouteException When the invalid object types are provided.
         * @return stdClass
         */
        public function get_item_response($address)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\StoreApi\Utilities {
    /**
     * Woo Cart Controller class.
     *
     * @since 2.5.0
     */
    class CartController
    {
        /**
         * Based on the core cart class but returns errors rather than rendering notices directly.
         *
         * @todo Overriding the core add_to_cart method was necessary because core outputs notices when an item is added to
         * the cart. For us this would cause notices to build up and output on the store, out of context. Core would need
         * refactoring to split notices out from other cart actions.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return string|Error
         */
        public function add_to_cart($request)
        {
        }
        /**
         * Based on core `set_quantity` method, but validates if an item is sold individually first.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param string  $item_id Cart item id.
         * @param integer $quantity Cart quantity.
         */
        public function set_cart_item_quantity($item_id, $quantity = 1)
        {
        }
        /**
         * Validate all items in the cart and check for errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         * @param array       $request Add to cart request params.
         */
        public function validate_add_to_cart(\WC_Product $product, $request)
        {
        }
        /**
         * Validate all items in the cart and check for errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         */
        public function validate_cart_items()
        {
        }
        /**
         * Validates an existing cart item and returns any errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $cart_item Cart item array.
         */
        public function validate_cart_item($cart_item)
        {
        }
        /**
         * Validate all coupons in the cart and check for errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         */
        public function validate_cart_coupons()
        {
        }
        /**
         * Validate all items in the cart and get a list of errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         */
        public function get_cart_item_errors()
        {
        }
        /**
         * Validate all items in the cart and get a list of errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         */
        public function get_cart_coupon_errors()
        {
        }
        /**
         * Get main instance of cart class.
         *
         * @throws RouteException When cart cannot be loaded.
         * @return \WC_Cart
         */
        public function get_cart_instance()
        {
        }
        /**
         * Return a cart item from the woo core cart class.
         *
         * @param string $item_id Cart item id.
         * @return array
         */
        public function get_cart_item($item_id)
        {
        }
        /**
         * Returns all cart items.
         *
         * @param callable $callback Optional callback to apply to the array filter.
         * @return array
         */
        public function get_cart_items($callback = null)
        {
        }
        /**
         * Get hashes for items in the current cart. Useful for tracking changes.
         *
         * @return array
         */
        public function get_cart_hashes()
        {
        }
        /**
         * Empty cart contents.
         */
        public function empty_cart()
        {
        }
        /**
         * See if cart has applied coupon by code.
         *
         * @param string $coupon_code Cart coupon code.
         * @return bool
         */
        public function has_coupon($coupon_code)
        {
        }
        /**
         * Returns all applied coupons.
         *
         * @param callable $callback Optional callback to apply to the array filter.
         * @return array
         */
        public function get_cart_coupons($callback = null)
        {
        }
        /**
         * Get shipping packages from the cart with calculated shipping rates.
         *
         * @todo this can be refactored once https://github.com/woocommerce/woocommerce/pull/26101 lands.
         *
         * @param bool $calculate_rates Should rates for the packages also be returned.
         * @return array
         */
        public function get_shipping_packages($calculate_rates = true)
        {
        }
        /**
         * Selects a shipping rate.
         *
         * @param int    $package_id ID of the package to choose a rate for.
         * @param string $rate_id ID of the rate being chosen.
         */
        public function select_shipping_rate($package_id, $rate_id)
        {
        }
        /**
         * Based on the core cart class but returns errors rather than rendering notices directly.
         *
         * @todo Overriding the core apply_coupon method was necessary because core outputs notices when a coupon gets
         * applied. For us this would cause notices to build up and output on the store, out of context. Core would need
         * refactoring to split notices out from other cart actions.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param string $coupon_code Coupon code.
         */
        public function apply_coupon($coupon_code)
        {
        }
        /**
         * Validates an existing cart coupon and returns any errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         */
        protected function validate_cart_coupon(\WC_Coupon $coupon)
        {
        }
        /**
         * Gets the qty of a product across line items.
         *
         * @param \WC_Product $product Product object.
         * @return int
         */
        protected function get_product_quantity_in_cart($product)
        {
        }
        /**
         * Gets remaining stock for a product.
         *
         * @param \WC_Product $product Product object.
         * @return int
         */
        protected function get_remaining_stock_for_product($product)
        {
        }
        /**
         * Get a product object to be added to the cart.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return \WC_Product|Error Returns a product object if purchasable.
         */
        protected function get_product_for_cart($request)
        {
        }
        /**
         * For a given product, get the product ID.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         * @return int
         */
        protected function get_product_id(\WC_Product $product)
        {
        }
        /**
         * For a given product, get the variation ID.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         * @return int
         */
        protected function get_variation_id(\WC_Product $product)
        {
        }
        /**
         * Default exception thrown when an item cannot be added to the cart.
         *
         * @throws RouteException Exception with code woocommerce_rest_cart_product_is_not_purchasable.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         */
        protected function throw_default_product_exception(\WC_Product $product)
        {
        }
        /**
         * Filter data for add to cart requests.
         *
         * @param array $request Add to cart request params.
         * @return array Updated request array.
         */
        protected function filter_request_data($request)
        {
        }
        /**
         * If variations are set, validate and format the values ready to add to the cart.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return array Updated request array.
         */
        protected function parse_variation_data($request)
        {
        }
        /**
         * Try to match request data to a variation ID and return the ID.
         *
         * @throws RouteException Exception if variation cannot be found.
         *
         * @param array       $request Add to cart request params.
         * @param \WC_Product $product Product being added to the cart.
         * @return int Matching variation ID.
         */
        protected function get_variation_id_from_variation_data($request, $product)
        {
        }
        /**
         * Format and sanitize variation data posted to the API.
         *
         * Labels are converted to names (e.g. Size to pa_size), and values are cleaned.
         *
         * @throws RouteException Exception if variation cannot be found.
         *
         * @param array $variation_data Key value pairs of attributes and values.
         * @param array $variable_product_attributes Product attributes we're expecting.
         * @return array
         */
        protected function sanitize_variation_data($variation_data, $variable_product_attributes)
        {
        }
        /**
         * Get product attributes from the variable product (which may be the parent if the product object is a variation).
         *
         * @throws RouteException Exception if product is invalid.
         *
         * @param \WC_Product $product Product being added to the cart.
         * @return array
         */
        protected function get_variable_product_attributes($product)
        {
        }
    }
    /**
     * NoticeHandler class.
     */
    class NoticeHandler
    {
        /**
         * Convert queued error notices into an exception.
         *
         * For example, Payment methods may add error notices during validate_fields call to prevent checkout.
         * Since we're not rendering notices at all, we need to convert them to exceptions.
         *
         * This method will find the first error message and thrown an exception instead. Discards notices once complete.
         *
         * @throws RouteException If an error notice is detected, Exception is thrown.
         *
         * @param string $error_code Error code for the thrown exceptions.
         */
        public static function convert_notices_to_exceptions($error_code = 'unknown_server_error')
        {
        }
    }
    /**
     * OrderController class.
     */
    class OrderController
    {
        /**
         * Create order and set props based on global settings.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @return \WC_Order A new order object.
         */
        public function create_order_from_cart()
        {
        }
        /**
         * Update an order using data from the current cart.
         *
         * @param \WC_Order $order The order object to update.
         */
        public function update_order_from_cart(\WC_Order $order)
        {
        }
        /**
         * Copies order data to customer object (not the session), so values persist for future checkouts.
         *
         * @param \WC_Order $order Order object.
         */
        public function sync_customer_data_with_order(\WC_Order $order)
        {
        }
        /**
         * Final validation ran before payment is taken.
         *
         * By this point we have an order populated with customer data and items.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param \WC_Order $order Order object.
         */
        public function validate_order_before_payment(\WC_Order $order)
        {
        }
        /**
         * Check email restrictions of a coupon against the order.
         *
         * @throws \Exception Exception if invalid data is detected.
         *
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         * @param \WC_Order  $order Order object.
         */
        protected function validate_coupon_email_restriction(\WC_Coupon $coupon, $order)
        {
        }
        /**
         * Check usage restrictions of a coupon against the order.
         *
         * @throws \Exception Exception if invalid data is detected.
         *
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         * @param \WC_Order  $order Order object.
         */
        protected function validate_coupon_usage_limit(\WC_Coupon $coupon, $order)
        {
        }
        /**
         * Changes default order status to draft for orders created via this API.
         *
         * @return string
         */
        public function default_order_status()
        {
        }
        /**
         * Create order line items.
         *
         * @param \WC_Order $order The order object to update.
         */
        protected function update_line_items_from_cart(\WC_Order $order)
        {
        }
        /**
         * Update address data from cart and/or customer session data.
         *
         * @param \WC_Order $order The order object to update.
         */
        protected function update_addresses_from_cart(\WC_Order $order)
        {
        }
    }
    /**
     * Pagination class.
     *
     * @since 2.5.0
     */
    class Pagination
    {
        /**
         * Add pagination headers to a response object.
         *
         * @param \WP_REST_Response $response Reference to the response object.
         * @param \WP_REST_Request  $request The request object.
         * @param int               $total_items Total items found.
         * @param int               $total_pages Total pages found.
         * @return \WP_REST_Response
         */
        public function add_headers($response, $request, $total_items, $total_pages)
        {
        }
        /**
         * Get current page.
         *
         * @param \WP_REST_Request $request The request object.
         * @return int Get the page from the request object.
         */
        protected function get_current_page($request)
        {
        }
        /**
         * Get base for links from the request object.
         *
         * @param \WP_REST_Request $request The request object.
         * @return string
         */
        protected function get_link_base($request)
        {
        }
        /**
         * Add a page link.
         *
         * @param \WP_REST_Response $response Reference to the response object.
         * @param string            $name Page link name. e.g. prev.
         * @param int               $page Page number.
         * @param string            $link_base Base URL.
         */
        protected function add_page_link(&$response, $name, $page, $link_base)
        {
        }
    }
    /**
     * Product Query filters class.
     *
     * @since 2.5.0
     */
    class ProductQueryFilters
    {
        /**
         * Get filtered min price for current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @return array
         */
        public function get_filtered_price($request)
        {
        }
        /**
         * Get attribute counts for the current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @param array            $attributes Attributes to count, either names or ids.
         * @return array termId=>count pairs.
         */
        public function get_attribute_counts($request, $attributes = [])
        {
        }
        /**
         * Get rating counts for the current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @return array rating=>count pairs.
         */
        public function get_rating_counts($request)
        {
        }
    }
    /**
     * Product Query class.
     *
     * @since 2.5.0
     */
    class ProductQuery
    {
        /**
         * Prepare query args to pass to WP_Query for a REST API request.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function prepare_objects_query($request)
        {
        }
        /**
         * Get results of query.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function get_results($request)
        {
        }
        /**
         * Get objects.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function get_objects($request)
        {
        }
        /**
         * Get last modified date for all products.
         *
         * @return int timestamp.
         */
        public function get_last_modified()
        {
        }
        /**
         * Add in conditional search filters for products.
         *
         * @param array     $args Query args.
         * @param \WC_Query $wp_query WC_Query object.
         * @return array
         */
        public function add_query_clauses($args, $wp_query)
        {
        }
        /**
         * Add in conditional price filters.
         *
         * @param array     $args Query args.
         * @param \WC_Query $wp_query WC_Query object.
         * @return array
         */
        protected function add_price_filter_clauses($args, $wp_query)
        {
        }
        /**
         * Get query for price filters when dealing with displayed taxes.
         *
         * @param float  $price_filter Price filter to apply.
         * @param string $column Price being filtered (min or max).
         * @param string $operator Comparison operator for column.
         * @return string Constructed query.
         */
        protected function get_price_filter_query_for_displayed_taxes($price_filter, $column = 'min_price', $operator = '>=')
        {
        }
        /**
         * If price filters need adjustment to work with displayed taxes, this returns true.
         *
         * This logic is used when prices are stored in the database differently to how they are being displayed, with regards
         * to taxes.
         *
         * @return boolean
         */
        protected function adjust_price_filters_for_displayed_taxes()
        {
        }
        /**
         * Converts price filter from subunits to decimal.
         *
         * @param string|int $price_filter Raw price filter in subunit format.
         * @return float Price filter in decimal format.
         */
        protected function prepare_price_filter($price_filter)
        {
        }
        /**
         * Adjusts a price filter based on a tax class and whether or not the amount includes or excludes taxes.
         *
         * This calculation logic is based on `wc_get_price_excluding_tax` and `wc_get_price_including_tax` in core.
         *
         * @param float  $price_filter Price filter amount as entered.
         * @param string $tax_class Tax class for adjustment.
         * @return float
         */
        protected function adjust_price_filter_for_tax_class($price_filter, $tax_class)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @param string $sql SQL join.
         * @return string
         */
        protected function append_product_sorting_table_join($sql)
        {
        }
    }
    /**
     * Stock Reservation class.
     */
    final class ReserveStock
    {
        /**
         * Is stock reservation enabled?
         *
         * @var boolean
         */
        private $enabled = true;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Is stock reservation enabled?
         *
         * @return boolean
         */
        protected function is_enabled()
        {
        }
        /**
         * Query for any existing holds on stock for this item.
         *
         * @param \WC_Product $product Product to get reserved stock for.
         * @param integer     $exclude_order_id Optional order to exclude from the results.
         *
         * @return integer Amount of stock already reserved.
         */
        public function get_reserved_stock(\WC_Product $product, $exclude_order_id = 0)
        {
        }
        /**
         * Put a temporary hold on stock for an order if enough is available.
         *
         * @throws ReserveStockException If stock cannot be reserved.
         *
         * @param \WC_Order $order Order object.
         * @param int       $minutes How long to reserve stock in minutes. Defaults to woocommerce_hold_stock_minutes.
         */
        public function reserve_stock_for_order(\WC_Order $order, $minutes = 0)
        {
        }
        /**
         * Release a temporary hold on stock for an order.
         *
         * @param \WC_Order $order Order object.
         */
        public function release_stock_for_order(\WC_Order $order)
        {
        }
        /**
         * Reserve stock for a product by inserting rows into the DB.
         *
         * @throws ReserveStockException If a row cannot be inserted.
         *
         * @param int       $product_id Product ID which is having stock reserved.
         * @param int       $stock_quantity Stock amount to reserve.
         * @param \WC_Order $order Order object which contains the product.
         * @param int       $minutes How long to reserve stock in minutes.
         */
        private function reserve_stock_for_product($product_id, $stock_quantity, \WC_Order $order, $minutes)
        {
        }
        /**
         * Returns query statement for getting current `_stock` of a product.
         *
         * @todo Once merged to woo core data store, this method can be removed.
         * @internal MAX function below is used to make sure result is a scalar.
         * @param int $product_id Product ID.
         * @return string|void Query statement.
         */
        private function get_query_for_stock($product_id)
        {
        }
        /**
         * Returns query statement for getting reserved stock of a product.
         *
         * @param int     $product_id Product ID.
         * @param integer $exclude_order_id Optional order to exclude from the results.
         * @return string|void Query statement.
         */
        private function get_query_for_reserved_stock($product_id, $exclude_order_id = 0)
        {
        }
    }
    /**
     * ReserveStockException class.
     */
    class ReserveStockException extends \Exception
    {
        /**
         * Sanitized error code.
         *
         * @var string
         */
        protected $error_code;
        /**
         * Error extra data.
         *
         * @var array
         */
        protected $error_data;
        /**
         * Setup exception.
         *
         * @param string $code             Machine-readable error code, e.g `woocommerce_invalid_product_id`.
         * @param string $message          User-friendly translated error message, e.g. 'Product ID is invalid'.
         * @param int    $http_status_code Proper HTTP status code to respond with, e.g. 400.
         * @param array  $data             Extra error data.
         */
        public function __construct($code, $message, $http_status_code = 400, $data = array())
        {
        }
        /**
         * Returns the error code.
         *
         * @return string
         */
        public function getErrorCode()
        {
        }
        /**
         * Returns error data.
         *
         * @return array
         */
        public function getErrorData()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Utils {
    /**
     * BlocksWpQuery query.
     *
     * @deprecated 2.5.0
     */
    class BlocksWpQuery extends \WP_Query
    {
        /**
         * Constructor.
         *
         * Sets up the WordPress query, if parameter is not empty.
         *
         * Unlike the constructor in WP_Query, this does not RUN the query.
         *
         * @param string|array $query URL query string or array of vars.
         */
        public function __construct($query = '')
        {
        }
        /**
         * Get cached posts, if a cache exists.
         *
         * A hash is generated using the array of query_vars. If doing custom queries via filters such as posts_where
         * (where the SQL query is manipulated directly) you can still ensure there is a unique hash by injecting custom
         * query vars via the parse_query filter. For example:
         *
         *      add_filter( 'parse_query', function( $wp_query ) {
         *           $wp_query->query_vars['my_custom_query_var'] = true;
         *      } );
         *
         * Doing so won't have any negative effect on the query itself, and it will cause the hash to change.
         *
         * @param string $transient_version Transient version to allow for invalidation.
         * @return WP_Post[]|int[] Array of post objects or post IDs.
         */
        public function get_cached_posts($transient_version = '')
        {
        }
    }
}
namespace {
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Coupons_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'coupons';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_coupon';
        /**
         * Coupons actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for coupons.
         */
        public function register_routes()
        {
        }
        /**
         * Query args.
         *
         * @param array $args Query args
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Prepare a single coupon output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $data
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Only return writable props from schema.
         * @param  array $schema
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single coupon for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single coupon.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Saves a coupon to the database.
         *
         * @since 3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|int
         */
        protected function save_coupon($request)
        {
        }
        /**
         * Get the Coupon's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Customer_Downloads_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers/(?P<customer_id>[\\d]+)/downloads';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all customer downloads.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a single download output for response.
         *
         * @param stdObject $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($download, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given customer download.
         */
        protected function prepare_links($download, $request)
        {
        }
        /**
         * Get the Customer Download's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Customers_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all customers.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single user.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single customer output for response.
         *
         * @param  WP_User          $user_data User object.
         * @param  WP_REST_Request  $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($user_data, $request)
        {
        }
        /**
         * Update customer meta fields.
         *
         * @param WC_Customer $customer
         * @param WP_REST_Request $request
         */
        protected function update_customer_meta_fields($customer, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_User $customer Customer object.
         * @return array Links for the given customer.
         */
        protected function prepare_links($customer)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get role names.
         *
         * @return array
         */
        protected function get_role_names()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Order_Notes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/notes';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Register the routes for order notes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read order notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create order notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a order note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a order note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Delete a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $note Delivery order_note object.
         * @return array Links for the given order note.
         */
        protected function prepare_links($note)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Orders_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Initialize orders actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $data
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Order $order Order object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given order.
         */
        protected function prepare_links($order, $request)
        {
        }
        /**
         * Query args.
         *
         * @param array $args
         * @param WP_REST_Request $request
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Prepare a single order for create.
         *
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WC_Order $data Object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create base WC Order object.
         * @deprecated 3.0.0
         * @param array $data
         * @return WC_Order
         */
        protected function create_base_order($data)
        {
        }
        /**
         * Only return writable props from schema.
         * @param  array $schema
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Create order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function create_order($request)
        {
        }
        /**
         * Update order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function update_order($request)
        {
        }
        /**
         * Update address.
         *
         * @param WC_Order $order
         * @param array $posted
         * @param string $type
         */
        protected function update_address($order, $posted, $type = 'billing')
        {
        }
        /**
         * Gets the product ID from the SKU or posted ID.
         *
         * @throws WC_REST_Exception When SKU or ID is not valid.
         * @param array           $posted Request data.
         * @param string          $action 'create' to add line item or 'update' to update it.
         * @return int
         */
        protected function get_product_id($posted, $action = 'create')
        {
        }
        /**
         * Maybe set an item prop if the value was posted.
         * @param WC_Order_Item $item
         * @param string $prop
         * @param array $posted Request data.
         */
        protected function maybe_set_item_prop($item, $prop, $posted)
        {
        }
        /**
         * Maybe set item props if the values were posted.
         * @param WC_Order_Item $item
         * @param string[] $props
         * @param array $posted Request data.
         */
        protected function maybe_set_item_props($item, $props, $posted)
        {
        }
        /**
         * Create or update a line item.
         *
         * @param array $posted Line item data.
         * @param string $action 'create' to add line item or 'update' to update it.
         *
         * @return WC_Order_Item_Product
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_line_items($posted, $action = 'create')
        {
        }
        /**
         * Create or update an order shipping method.
         *
         * @param $posted $shipping Item data.
         * @param string $action 'create' to add shipping or 'update' to update it.
         *
         * @return WC_Order_Item_Shipping
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_shipping_lines($posted, $action)
        {
        }
        /**
         * Create or update an order fee.
         *
         * @param array $posted Item data.
         * @param string $action 'create' to add fee or 'update' to update it.
         *
         * @return WC_Order_Item_Fee
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_fee_lines($posted, $action)
        {
        }
        /**
         * Create or update an order coupon.
         *
         * @param array $posted Item data.
         * @param string $action 'create' to add coupon or 'update' to update it.
         *
         * @return WC_Order_Item_Coupon
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_coupon_lines($posted, $action)
        {
        }
        /**
         * Wrapper method to create/update order items.
         * When updating, the item ID provided is checked to ensure it is associated
         * with the order.
         *
         * @param WC_Order $order order
         * @param string $item_type
         * @param array $posted item provided in the request body
         * @throws WC_REST_Exception If item ID is not associated with order
         */
        protected function set_item($order, $item_type, $posted)
        {
        }
        /**
         * Helper method to check if the resource ID associated with the provided item is null.
         * Items can be deleted by setting the resource ID to null.
         *
         * @param array $item Item provided in the request body.
         * @return bool True if the item resource ID is null, false otherwise.
         */
        protected function item_is_null($item)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get order statuses without prefixes.
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V1_Controller
     */
    class WC_REST_Order_Refunds_V1_Controller extends \WC_REST_Orders_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order_refund';
        /**
         * Order refunds actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for order refunds.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single order refund output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Order_Refund $refund Comment object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given order refund.
         */
        protected function prepare_links($refund, $request)
        {
        }
        /**
         * Query args.
         *
         * @param array           $args    Request args.
         * @param WP_REST_Request $request Request object.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Attribute_Terms_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes/(?P<attribute_id>[\\d]+)/terms';
        /**
         * Register the routes for terms.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single product attribute term output for response.
         *
         * @param WP_Term $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term $term
         * @param WP_REST_Request $request
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the Attribute Term's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Attributes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes';
        /**
         * Attribute name.
         *
         * @var string
         */
        protected $attribute = '';
        /**
         * Register the routes for product attributes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all attributes.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product attribute output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $attribute Attribute object.
         * @return array Links for the given attribute.
         */
        protected function prepare_links($attribute)
        {
        }
        /**
         * Get the Attribute's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get attribute name.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return string
         */
        protected function get_taxonomy($request)
        {
        }
        /**
         * Get attribute data.
         *
         * @param int $id Attribute ID.
         * @return stdClass|WP_Error
         */
        protected function get_attribute($id)
        {
        }
        /**
         * Validate attribute slug.
         *
         * @deprecated 3.2.0
         * @param string $slug
         * @param bool $new_data
         * @return bool|WP_Error
         */
        protected function validate_attribute_slug($slug, $new_data = \true)
        {
        }
        /**
         * Schedule to flush rewrite rules.
         *
         * @deprecated 3.2.0
         * @since 3.0.0
         */
        protected function flush_rewrite_rules()
        {
        }
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Reviews_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhook deliveries.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a new product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get all reviews from a product.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a product review.
         *
         * @param WP_REST_Request $request Full details about the request
         *
         * @return bool|WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Prepare a single product review to be inserted into the database.
         *
         * @param  WP_REST_Request $request Request object.
         * @return array|WP_Error  $prepared_review
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review, $request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Shipping_Classes_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/shipping_classes';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_shipping_class';
        /**
         * Prepare a single product shipping class output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Shipping Class schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Tags_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/tags';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_tag';
        /**
         * Prepare a single product tag output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Tag's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Products_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * Initialize product actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get post types.
         *
         * @return array
         */
        protected function get_post_types()
        {
        }
        /**
         * Query args.
         *
         * @param array           $args    Request args.
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param string     $taxonomy Taxonomy slug.
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param  string $name Taxonomy name.
         * @return string
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int   $product_id Product ID.
         * @param array $attribute  Attribute data.
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get product menu order.
         *
         * @deprecated 3.0.0
         * @param WC_Product $product Product instance.
         * @return int
         */
        protected function get_product_menu_order($product)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_product_data($product)
        {
        }
        /**
         * Get an individual variation's data.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_variation_data($product)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WP_Post         $post    Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Product      $product Product object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given product.
         */
        protected function prepare_links($product, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create a single product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Saves a product to the database.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int
         */
        public function save_product($request)
        {
        }
        /**
         * Save product images.
         *
         * @deprecated 3.0.0
         * @param int $product_id
         * @param array $images
         * @throws WC_REST_Exception
         */
        protected function save_product_images($product_id, $images)
        {
        }
        /**
         * Set product images.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         * @param int        $deprecated Deprecated since 3.0.
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @since 3.0.0
         *
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Save product meta.
         *
         * @deprecated 3.0.0
         * @param WC_Product $product
         * @param WP_REST_Request $request
         * @return bool
         * @throws WC_REST_Exception
         */
        protected function save_product_meta($product, $request)
        {
        }
        /**
         * Set product meta.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         * @return WC_Product
         */
        protected function set_product_meta($product, $request)
        {
        }
        /**
         * Save variations.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product      $product          Product instance.
         * @param WP_REST_Request $request          Request data.
         * @return bool
         */
        protected function save_variations_data($product, $request)
        {
        }
        /**
         * Add post meta fields.
         *
         * @param WP_Post         $post    Post data.
         * @param WP_REST_Request $request Request data.
         * @return bool|WP_Error
         */
        protected function add_post_meta_fields($post, $request)
        {
        }
        /**
         * Update post meta fields.
         *
         * @param WP_Post         $post    Post data.
         * @param WP_REST_Request $request Request data.
         * @return bool|WP_Error
         */
        protected function update_post_meta_fields($post, $request)
        {
        }
        /**
         * Clear cache/transients.
         *
         * @param WP_Post $post Post data.
         */
        public function clear_transients($post)
        {
        }
        /**
         * Delete post.
         *
         * @param int|WP_Post $id Post ID or WP_Post instance.
         */
        protected function delete_post($id)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Report_Sales_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/sales';
        /**
         * Report instance.
         *
         * @var WC_Admin_Report
         */
        protected $report;
        /**
         * Register the routes for sales reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read report.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get sales reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @param null $_
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($_, $request)
        {
        }
        /**
         * Setup the report object and parse any date filtering.
         *
         * @param array $filter date filtering
         */
        protected function setup_report($filter)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V1_Controller
     */
    class WC_REST_Report_Top_Sellers_V1_Controller extends \WC_REST_Report_Sales_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/top_sellers';
        /**
         * Get sales reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @param stdClass $top_seller
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($top_seller, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Tax_Classes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'taxes/classes';
        /**
         * Register the routes for tax classes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read tax classes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create tax classes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get all tax classes.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single tax class.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Delete a single tax class.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single tax class output for response.
         *
         * @param array $tax_class Tax class data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($tax_class, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @return array Links for the given tax class.
         */
        protected function prepare_links()
        {
        }
        /**
         * Get the Tax Classes schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Webhook Deliveries controller class.
     *
     * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Webhook_Deliveries_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'webhooks/(?P<webhook_id>[\\d]+)/deliveries';
        /**
         * Register the routes for webhook deliveries.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get all webhook deliveries.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single webhook delivery.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a single webhook delivery output for response.
         *
         * @param stdClass $log Delivery log object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($log, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $log Delivery log object.
         * @return array Links for the given webhook delivery.
         */
        protected function prepare_links($log)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Webhooks_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'webhooks';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_webhook';
        /**
         * Register the routes for webhooks.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhooks.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create webhooks.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
        /**
         * Get all webhooks.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single webhook for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare a single webhook output for response.
         *
         * @param int               $id       Webhook ID or object.
         * @param WP_REST_Request   $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($id, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $id Webhook ID.
         * @return array
         */
        protected function prepare_links($id)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customer_Downloads_V1_Controller
     */
    class WC_REST_Customer_Downloads_V2_Controller extends \WC_REST_Customer_Downloads_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single download output for response.
         *
         * @param stdClass        $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($download, $request)
        {
        }
        /**
         * Get the Customer Download's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customers_V1_Controller
     */
    class WC_REST_Customers_V2_Controller extends \WC_REST_Customers_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single customer output for response.
         *
         * @param  WP_User         $user_data User object.
         * @param  WP_REST_Request $request   Request object.
         * @return WP_REST_Response $response  Response data.
         */
        public function prepare_item_for_response($user_data, $request)
        {
        }
        /**
         * Update customer meta fields.
         *
         * @param WC_Customer     $customer Customer data.
         * @param WP_REST_Request $request  Request data.
         */
        protected function update_customer_meta_fields($customer, $request)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Network Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Network_Orders_V2_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Register the routes for network orders.
         */
        public function register_routes()
        {
        }
        /**
         * Retrieves the item's schema for display / public consumption purposes.
         *
         * @return array Public item schema data.
         */
        public function get_public_item_schema()
        {
        }
        /**
         * Does a permissions check for the proper requested blog
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool $permission
         */
        public function network_orders_permissions_check($request)
        {
        }
        /**
         * Get a collection of orders from the requested blog id
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response
         */
        public function network_orders($request)
        {
        }
        /**
         * Filters the post statuses to on hold and processing for the network order query.
         *
         * @param array $args Query args.
         *
         * @return array
         */
        public function network_orders_filter_args($args)
        {
        }
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Notes_V1_Controller
     */
    class WC_REST_Order_Notes_V2_Controller extends \WC_REST_Order_Notes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment      $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Order_Refunds_V2_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order_refund';
        /**
         * Stores the request.
         *
         * @var array
         */
        protected $request = array();
        /**
         * Order refunds actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for order refunds.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  3.0.0
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * Paymenga gateways controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Payment_Gateways_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'payment_gateways';
        /**
         * Register the route for /payment_gateways and /payment_gateways/<id>
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view payment gateways.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a payment gateway.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit payment gateways.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Get payment gateways.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single payment gateway.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update A Single Payment Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Get a gateway based on the current request object.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|null
         */
        public function get_gateway($request)
        {
        }
        /**
         * Prepare a payment gateway for response.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return WP_REST_Response   $response   Response data.
         */
        public function prepare_item_for_response($gateway, $request)
        {
        }
        /**
         * Return settings associated with this payment gateway.
         *
         * @param WC_Payment_Gateway $gateway Gateway data.
         *
         * @return array
         */
        public function get_settings($gateway)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return array
         */
        protected function prepare_links($gateway, $request)
        {
        }
        /**
         * Get the payment gateway schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attribute_Terms_V1_Controller
     */
    class WC_REST_Product_Attribute_Terms_V2_Controller extends \WC_REST_Product_Attribute_Terms_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attributes_V1_Controller
     */
    class WC_REST_Product_Attributes_V2_Controller extends \WC_REST_Product_Attributes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Reviews_V1_Controller
     */
    class WC_REST_Product_Reviews_V2_Controller extends \WC_REST_Product_Reviews_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to batch manage product reviews.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment      $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Shipping_Classes_V1_Controller
     */
    class WC_REST_Product_Shipping_Classes_V2_Controller extends \WC_REST_Product_Shipping_Classes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Tags_V1_Controller
     */
    class WC_REST_Product_Tags_V2_Controller extends \WC_REST_Product_Tags_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V1_Controller
     */
    class WC_REST_Report_Sales_V2_Controller extends \WC_REST_Report_Sales_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Top_Sellers_V1_Controller
     */
    class WC_REST_Report_Top_Sellers_V2_Controller extends \WC_REST_Report_Top_Sellers_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Settings controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Settings_V2_Controller extends \WC_REST_Controller
    {
        /**
         * WP REST API namespace/version.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'settings';
        /**
         * Register routes.
         *
         * @since 3.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Get all settings groups items.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string $group_id Group ID.
         * @return array Links for the given group.
         */
        protected function prepare_links($group_id)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @since  3.0.0
         * @param array           $item Group object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Filters out bad values from the groups array/filter so we
         * only return known values via the API.
         *
         * @since 3.0.0
         * @param  array $group Group.
         * @return array
         */
        public function filter_group($group)
        {
        }
        /**
         * Callback for allowed keys for each group response.
         *
         * @since  3.0.0
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_group_keys($key)
        {
        }
        /**
         * Returns default settings for groups. null means the field is required.
         *
         * @since  3.0.0
         * @return array
         */
        protected function group_defaults()
        {
        }
        /**
         * Makes sure the current user has access to READ the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get the groups schema, conforming to JSON Schema.
         *
         * @since  3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Shipping methods controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Shipping_Methods_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipping_methods';
        /**
         * Register the route for /shipping_methods and /shipping_methods/<method>
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view shipping methods.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a shipping method.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get shipping methods.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single Shipping Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a shipping method for response.
         *
         * @param  WC_Shipping_Method $method   Shipping method object.
         * @param  WP_REST_Request    $request  Request object.
         * @return WP_REST_Response   $response Response data.
         */
        public function prepare_item_for_response($method, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Shipping_Method $method Shipping method object.
         * @param WP_REST_Request    $request Request object.
         * @return array
         */
        protected function prepare_links($method, $request)
        {
        }
        /**
         * Get the shipping method schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Shipping Zones base class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    abstract class WC_REST_Shipping_Zones_Controller_Base extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipping/zones';
        /**
         * Retrieve a Shipping Zone by it's ID.
         *
         * @param int $zone_id Shipping Zone ID.
         * @return WC_Shipping_Zone|WP_Error
         */
        protected function get_zone($zone_id)
        {
        }
        /**
         * Check whether a given request has permission to read Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to delete Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_items_permissions_check($request)
        {
        }
    }
    /**
     * REST API Shipping Zone Locations class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zone_Locations_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zone Locations.
         */
        public function register_routes()
        {
        }
        /**
         * Get all Shipping Zone Locations.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Update all Shipping Zone Locations.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_items($request)
        {
        }
        /**
         * Prepare the Shipping Zone Location for the REST response.
         *
         * @param array           $item Shipping Zone Location.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @return array Links for the given Shipping Zone Location.
         */
        protected function prepare_links($zone_id)
        {
        }
        /**
         * Get the Shipping Zone Locations schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Shipping Zone Methods class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zone_Methods_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zone Methods.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single Shipping Zone Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all Shipping Zone Methods.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a new shipping zone method instance.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Delete a shipping method instance.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item($request)
        {
        }
        /**
         * Update A Single Shipping Zone Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Updates settings, order, and enabled status on create.
         *
         * @param int                $instance_id Instance ID.
         * @param WC_Shipping_Method $method      Shipping method data.
         * @param WP_REST_Request    $request     Request data.
         *
         * @return WC_Shipping_Method
         */
        public function update_fields($instance_id, $method, $request)
        {
        }
        /**
         * Prepare the Shipping Zone Method for the REST response.
         *
         * @param array           $item Shipping Zone Method.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Return settings associated with this shipping zone method instance.
         *
         * @param WC_Shipping_Method $item Shipping method data.
         *
         * @return array
         */
        public function get_settings($item)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @param int $instance_id Given Shipping Zone Method Instance ID.
         * @return array Links for the given Shipping Zone Method.
         */
        protected function prepare_links($zone_id, $instance_id)
        {
        }
        /**
         * Get the Shipping Zone Methods schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Shipping Zones class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zones_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zones.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single Shipping Zone.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all Shipping Zones.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare the Shipping Zone for the REST response.
         *
         * @param array           $item Shipping Zone.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @return array Links for the given Shipping Zone.
         */
        protected function prepare_links($zone_id)
        {
        }
        /**
         * Get the Shipping Zones schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * System status tools controller.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_System_Status_Tools_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'system_status/tools';
        /**
         * Register the routes for /system_status/tools/*.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view system status tools.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to view a specific system status tool.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to execute a specific system status tool.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * A list of available tools for use in the system status section.
         * 'button' becomes 'action' in the API.
         *
         * @return array
         */
        public function get_tools()
        {
        }
        /**
         * Get a list of system status tools.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return a single tool.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update (execute) a tool.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare a tool item for serialization.
         *
         * @param  array           $item     Object.
         * @param  WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the system status tools schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string $id ID.
         * @return array
         */
        protected function prepare_links($id)
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Actually executes a tool.
         *
         * @param  string $tool Tool.
         * @return array
         */
        public function execute_tool($tool)
        {
        }
    }
    /**
     * System status controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_System_Status_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'system_status';
        /**
         * Register the route for /system_status
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view system status.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get a system status info, by section.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get the system status schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Return an array of sections and the data associated with each.
         *
         * @deprecated 3.9.0
         * @return array
         */
        public function get_item_mappings()
        {
        }
        /**
         * Return an array of sections and the data associated with each.
         *
         * @since 3.9.0
         * @param array $fields List of fields to be included on the response.
         * @return array
         */
        public function get_item_mappings_per_fields($fields)
        {
        }
        /**
         * Get array of environment information. Includes thing like software
         * versions, and various server settings.
         *
         * @deprecated 3.9.0
         * @return array
         */
        public function get_environment_info()
        {
        }
        /**
         * Check if field item exists.
         *
         * @since 3.9.0
         * @param string $section Fields section.
         * @param array  $items List of items to check for.
         * @param array  $fields List of fields to be included on the response.
         * @return bool
         */
        private function check_if_field_item_exists($section, $items, $fields)
        {
        }
        /**
         * Get array of environment information. Includes thing like software
         * versions, and various server settings.
         *
         * @param array $fields List of fields to be included on the response.
         * @return array
         */
        public function get_environment_info_per_fields($fields)
        {
        }
        /**
         * Add prefix to table.
         *
         * @param string $table Table name.
         * @return stromg
         */
        protected function add_db_table_prefix($table)
        {
        }
        /**
         * Get array of database information. Version, prefix, and table existence.
         *
         * @return array
         */
        public function get_database_info()
        {
        }
        /**
         * Get array of counts of objects. Orders, products, etc.
         *
         * @return array
         */
        public function get_post_type_counts()
        {
        }
        /**
         * Get a list of plugins active on the site.
         *
         * @return array
         */
        public function get_active_plugins()
        {
        }
        /**
         * Get a list of inplugins active on the site.
         *
         * @return array
         */
        public function get_inactive_plugins()
        {
        }
        /**
         * Format plugin data, including data on updates, into a standard format.
         *
         * @since 3.6.0
         * @param string $plugin Plugin directory/file.
         * @param array  $data Plugin data from WP.
         * @return array Formatted data.
         */
        protected function format_plugin_data($plugin, $data)
        {
        }
        /**
         * Get a list of Dropins and MU plugins.
         *
         * @since 3.6.0
         * @return array
         */
        public function get_dropins_mu_plugins()
        {
        }
        /**
         * Get info on the current active theme, info on parent theme (if presnet)
         * and a list of template overrides.
         *
         * @return array
         */
        public function get_theme_info()
        {
        }
        /**
         * Get some setting values for the site that are useful for debugging
         * purposes. For full settings access, use the settings api.
         *
         * @return array
         */
        public function get_settings()
        {
        }
        /**
         * Returns security tips.
         *
         * @return array
         */
        public function get_security_info()
        {
        }
        /**
         * Returns a mini-report on WC pages and if they are configured correctly:
         * Present, visible, and including the correct shortcode.
         *
         * @return array
         */
        public function get_pages()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Prepare the system status response
         *
         * @param  array           $system_status System status data.
         * @param  WP_REST_Request $request       Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($system_status, $request)
        {
        }
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Tax_Classes_V1_Controller
     */
    class WC_REST_Tax_Classes_V2_Controller extends \WC_REST_Tax_Classes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Webhook Deliveries controller class.
     *
     * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhook_Deliveries_V1_Controller
     */
    class WC_REST_Webhook_Deliveries_V2_Controller extends \WC_REST_Webhook_Deliveries_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single webhook delivery output for response.
         *
         * @param  stdClass        $log Delivery log object.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($log, $request)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhooks_V1_Controller
     */
    class WC_REST_Webhooks_V2_Controller extends \WC_REST_Webhooks_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single webhook output for response.
         *
         * @param int             $id       Webhook ID.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($id, $request)
        {
        }
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customer_Downloads_V2_Controller
     */
    class WC_REST_Customer_Downloads_Controller extends \WC_REST_Customer_Downloads_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customers_V2_Controller
     */
    class WC_REST_Customers_Controller extends \WC_REST_Customers_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get formatted item data.
         *
         * @param WC_Data $object WC_Data instance.
         *
         * @since  3.0.0
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data continents controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Continents_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/continents';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Return the list of countries and states for a given continent.
         *
         * @since  3.5.0
         * @param  string          $continent_code Continent code.
         * @param  WP_REST_Request $request        Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_continent($continent_code = \false, $request)
        {
        }
        /**
         * Return the list of states for all continents.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of locations for a given continent.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given continent.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data Currencies controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     */
    class WC_REST_Data_Currencies_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/currencies';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get currency information.
         *
         * @param  string          $code    Currency code.
         * @param  WP_REST_Request $request Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_currency($code = \false, $request)
        {
        }
        /**
         * Return the list of currencies.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return information for a specific currency.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Return information for the current site currency.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_current_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given currency.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the currency schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Network Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Network_Orders_V2_Controller
     */
    class WC_REST_Network_Orders_Controller extends \WC_REST_Network_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Notes_V2_Controller
     */
    class WC_REST_Order_Notes_Controller extends \WC_REST_Order_Notes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment      $note    Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Create a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Refunds_V2_Controller
     */
    class WC_REST_Order_Refunds_Controller extends \WC_REST_Order_Refunds_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
    }
    /**
     * Paymenga gateways controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Payment_Gateways_V2_Controller
     */
    class WC_REST_Payment_Gateways_Controller extends \WC_REST_Payment_Gateways_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a payment gateway for response.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return WP_REST_Response   $response   Response data.
         */
        public function prepare_item_for_response($gateway, $request)
        {
        }
        /**
         * Return settings associated with this payment gateway.
         *
         * @param WC_Payment_Gateway $gateway Gateway instance.
         *
         * @return array
         */
        public function get_settings($gateway)
        {
        }
        /**
         * Get the payment gateway schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attribute_Terms_V2_Controller
     */
    class WC_REST_Product_Attribute_Terms_Controller extends \WC_REST_Product_Attribute_Terms_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attributes_V2_Controller
     */
    class WC_REST_Product_Attributes_Controller extends \WC_REST_Product_Attributes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Shipping_Classes_V2_Controller
     */
    class WC_REST_Product_Shipping_Classes_Controller extends \WC_REST_Product_Shipping_Classes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Tags_V2_Controller
     */
    class WC_REST_Product_Tags_Controller extends \WC_REST_Product_Tags_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Reports Coupons Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Coupons_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Customers Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Customers_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Orders Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Orders_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Products Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Products_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Reviews Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Reviews_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/reviews/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V2_Controller
     */
    class WC_REST_Report_Sales_Controller extends \WC_REST_Report_Sales_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Top_Sellers_V2_Controller
     */
    class WC_REST_Report_Top_Sellers_Controller extends \WC_REST_Report_Top_Sellers_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Settings controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Settings_V2_Controller
     */
    class WC_REST_Settings_Controller extends \WC_REST_Settings_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Update a setting.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get the groups schema, conforming to JSON Schema.
         *
         * @since  3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Shipping methods controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Methods_V2_Controller
     */
    class WC_REST_Shipping_Methods_Controller extends \WC_REST_Shipping_Methods_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zone Locations class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zone_Locations_V2_Controller
     */
    class WC_REST_Shipping_Zone_Locations_Controller extends \WC_REST_Shipping_Zone_Locations_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zone Methods class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zone_Methods_V2_Controller
     */
    class WC_REST_Shipping_Zone_Methods_Controller extends \WC_REST_Shipping_Zone_Methods_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zones class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_V2_Controller
     */
    class WC_REST_Shipping_Zones_Controller extends \WC_REST_Shipping_Zones_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * System status controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_System_Status_V2_Controller
     */
    class WC_REST_System_Status_Controller extends \WC_REST_System_Status_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * System status tools controller.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_System_Status_Tools_V2_Controller
     */
    class WC_REST_System_Status_Tools_Controller extends \WC_REST_System_Status_Tools_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Tax_Classes_V2_Controller
     */
    class WC_REST_Tax_Classes_Controller extends \WC_REST_Tax_Classes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhooks_V2_Controller
     */
    class WC_REST_Webhooks_Controller extends \WC_REST_Webhooks_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi {
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '1.0.15';
        /**
         * Init the package - load the REST API Server class.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi\Utilities {
    /**
     * Singleton trait.
     */
    trait SingletonTrait
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Prevent cloning.
         */
        private function __clone()
        {
        }
        /**
         * Prevent unserializing.
         */
        private function __wakeup()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi {
    /**
     * Class responsible for loading the REST API and all REST API namespaces.
     */
    class Server
    {
        use \Automattic\WooCommerce\RestApi\Utilities\SingletonTrait;
        /**
         * REST API namespaces and endpoints.
         *
         * @var array
         */
        protected $controllers = [];
        /**
         * Hook into WordPress ready to init the REST API as needed.
         */
        public function init()
        {
        }
        /**
         * Register REST API routes.
         */
        public function register_rest_routes()
        {
        }
        /**
         * Get API namespaces - new namespaces should be registered here.
         *
         * @return array List of Namespaces and Main controller classes.
         */
        protected function get_rest_namespaces()
        {
        }
        /**
         * List of controllers in the wc/v1 namespace.
         *
         * @return array
         */
        protected function get_v1_controllers()
        {
        }
        /**
         * List of controllers in the wc/v2 namespace.
         *
         * @return array
         */
        protected function get_v2_controllers()
        {
        }
        /**
         * List of controllers in the wc/v3 namespace.
         *
         * @return array
         */
        protected function get_v3_controllers()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi\Utilities {
    /**
     * ImageAttachment class.
     */
    class ImageAttachment
    {
        /**
         * Attachment ID.
         *
         * @var integer
         */
        public $id = 0;
        /**
         * Object attached to.
         *
         * @var integer
         */
        public $object_id = 0;
        /**
         * Constructor.
         *
         * @param integer $id Attachment ID.
         * @param integer $object_id Object ID.
         */
        public function __construct($id = 0, $object_id = 0)
        {
        }
        /**
         * Upload an attachment file.
         *
         * @throws \WC_REST_Exception REST API exceptions.
         * @param string $src URL to file.
         */
        public function upload_image_from_src($src)
        {
        }
        /**
         * Update attachment alt text.
         *
         * @param string $text Text to set.
         */
        public function update_alt_text($text)
        {
        }
        /**
         * Update attachment name.
         *
         * @param string $text Text to set.
         */
        public function update_name($text)
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_ActionClaim
     */
    class ActionScheduler_ActionClaim
    {
        private $id = '';
        private $action_ids = array();
        public function __construct($id, array $action_ids)
        {
        }
        public function get_id()
        {
        }
        public function get_actions()
        {
        }
    }
    /**
     * Class ActionScheduler_ActionFactory
     */
    class ActionScheduler_ActionFactory
    {
        /**
         * @param string $status The action's status in the data store
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass to callbacks when the hook is triggered
         * @param ActionScheduler_Schedule $schedule The action's schedule
         * @param string $group A group to put the action in
         *
         * @return ActionScheduler_Action An instance of the stored action
         */
        public function get_stored_action($status, $hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
        /**
         * Enqueue an action to run one time, as soon as possible (rather a specific scheduled time).
         *
         * This method creates a new action with the NULLSchedule. This schedule maps to a MySQL datetime string of
         * 0000-00-00 00:00:00. This is done to create a psuedo "async action" type that is fully backward compatible.
         * Existing queries to claim actions claim by date, meaning actions scheduled for 0000-00-00 00:00:00 will
         * always be claimed prior to actions scheduled for a specific date. This makes sure that any async action is
         * given priority in queue processing. This has the added advantage of making sure async actions can be
         * claimed by both the existing WP Cron and WP CLI runners, as well as a new async request runner.
         *
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function async($hook, $args = array(), $group = '')
        {
        }
        /**
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param int $when Unix timestamp when the action will run
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function single($hook, $args = array(), $when = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a given interval.
         *
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param int $first Unix timestamp for the first run
         * @param int $interval Seconds between runs
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function recurring($hook, $args = array(), $first = \null, $interval = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a Cron schedule.
         *
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param int $base_timestamp The first instance of the action will be scheduled
         *        to run at a time calculated after this timestamp matching the cron
         *        expression. This can be used to delay the first instance of the action.
         * @param int $schedule A cron definition string
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function cron($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '')
        {
        }
        /**
         * Create a successive instance of a recurring or cron action.
         *
         * Importantly, the action will be rescheduled to run based on the current date/time.
         * That means when the action is scheduled to run in the past, the next scheduled date
         * will be pushed forward. For example, if a recurring action set to run every hour
         * was scheduled to run 5 seconds ago, it will be next scheduled for 1 hour in the
         * future, which is 1 hour and 5 seconds from when it was last scheduled to run.
         *
         * Alternatively, if the action is scheduled to run in the future, and is run early,
         * likely via manual intervention, then its schedule will change based on the time now.
         * For example, if a recurring action set to run every day, and is run 12 hours early,
         * it will run again in 24 hours, not 36 hours.
         *
         * This slippage is less of an issue with Cron actions, as the specific run time can
         * be set for them to run, e.g. 1am each day. In those cases, and entire period would
         * need to be missed before there was any change is scheduled, e.g. in the case of an
         * action scheduled for 1am each day, the action would need to run an entire day late.
         *
         * @param ActionScheduler_Action $action The existing action.
         *
         * @return string The ID of the stored action
         * @throws InvalidArgumentException If $action is not a recurring action.
         */
        public function repeat($action)
        {
        }
        /**
         * @param ActionScheduler_Action $action
         *
         * @return int The ID of the stored action
         */
        protected function store(\ActionScheduler_Action $action)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView_Deprecated
     *
     * Store deprecated public functions previously found in the ActionScheduler_AdminView class.
     * Keeps them out of the way of the main class.
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView_Deprecated
    {
        public function action_scheduler_post_type_args($args)
        {
        }
        /**
         * Customise the post status related views displayed on the Scheduled Actions administration screen.
         *
         * @param array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         * @return array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         */
        public function list_table_views($views)
        {
        }
        /**
         * Do not include the "Edit" action for the Scheduled Actions administration screen.
         *
         * Hooked to the 'bulk_actions-edit-action-scheduler' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public function bulk_actions($actions)
        {
        }
        /**
         * Completely customer the columns displayed on the Scheduled Actions administration screen.
         *
         * Because we can't filter the content of the default title and date columns, we need to recreate our own
         * custom columns for displaying those post fields. For the column content, @see self::list_table_column_content().
         *
         * @param array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         */
        public function list_table_columns($columns)
        {
        }
        /**
         * Make our custom title & date columns use defaulting title & date sorting.
         *
         * @param array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         */
        public static function list_table_sortable_columns($columns)
        {
        }
        /**
         * Print the content for our custom columns.
         *
         * @param string $column_name The key for the column for which we should output our content.
         * @param int $post_id The ID of the 'scheduled-action' post for which this row relates.
         */
        public static function list_table_column_content($column_name, $post_id)
        {
        }
        /**
         * Hide the inline "Edit" action for all 'scheduled-action' posts.
         *
         * Hooked to the 'post_row_actions' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public static function row_actions($actions, $post)
        {
        }
        /**
         * Run an action when triggered from the Action Scheduler administration screen.
         *
         * @codeCoverageIgnore
         */
        public static function maybe_execute_action()
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This funciton goes one step
         * further to display two degrees of accuracy.
         *
         * Based on Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @param int $interval A interval in seconds.
         * @return string A human friendly string representation of the interval.
         */
        public static function admin_notices()
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string $orderby MySQL orderby string.
         * @param WP_Query $query Instance of a WP_Query object
         * @return string MySQL orderby string.
         */
        public function custom_orderby($orderby, $query)
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string $search MySQL search string.
         * @param WP_Query $query Instance of a WP_Query object
         * @return string MySQL search string.
         */
        public function search_post_password($search, $query)
        {
        }
        /**
         * Change messages when a scheduled action is updated.
         *
         * @param  array $messages
         * @return array
         */
        public function post_updated_messages($messages)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView extends \ActionScheduler_AdminView_Deprecated
    {
        private static $admin_view = \NULL;
        private static $screen_id = 'tools_page_action-scheduler';
        /** @var ActionScheduler_ListTable */
        protected $list_table;
        /**
         * @return ActionScheduler_AdminView
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function system_status_report()
        {
        }
        /**
         * Registers action-scheduler into WooCommerce > System status.
         *
         * @param array $tabs An associative array of tab key => label.
         * @return array $tabs An associative array of tab key => label, including Action Scheduler's tabs
         */
        public function register_system_status_tab(array $tabs)
        {
        }
        /**
         * Include Action Scheduler's administration under the Tools menu.
         *
         * A menu under the Tools menu is important for backward compatibility (as that's
         * where it started), and also provides more convenient access than the WooCommerce
         * System Status page, and for sites where WooCommerce isn't active.
         */
        public function register_menu()
        {
        }
        /**
         * Triggers processing of any pending actions.
         */
        public function process_admin_ui()
        {
        }
        /**
         * Renders the Admin UI
         */
        public function render_admin_ui()
        {
        }
        /**
         * Get the admin UI object and process any requested actions.
         *
         * @return ActionScheduler_ListTable
         */
        protected function get_list_table()
        {
        }
        /**
         * Provide more information about the screen and its data in the help tab.
         */
        public function add_help_tabs()
        {
        }
    }
    /**
     * ActionScheduler_AsyncRequest_QueueRunner class.
     */
    class ActionScheduler_AsyncRequest_QueueRunner extends \WP_Async_Request
    {
        /**
         * Data store for querying actions
         *
         * @var ActionScheduler_Store
         * @access protected
         */
        protected $store;
        /**
         * Prefix for ajax hooks
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'as';
        /**
         * Action for ajax hooks
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request_queue_runner';
        /**
         * Initiate new async request
         */
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        /**
         * Handle async requests
         *
         * Run a queue, and maybe dispatch another async request to run another queue
         * if there are still pending actions after completing a queue in this request.
         */
        protected function handle()
        {
        }
        /**
         * If the async request runner is needed and allowed to run, dispatch a request.
         */
        public function maybe_dispatch()
        {
        }
        /**
         * Only allow async requests when needed.
         *
         * Also allow 3rd party code to disable running actions via async requests.
         */
        protected function allow()
        {
        }
        /**
         * Chaining async requests can crash MySQL. A brief sleep call in PHP prevents that.
         */
        protected function get_sleep_seconds()
        {
        }
    }
    /**
     * Class ActionScheduler_Compatibility
     */
    class ActionScheduler_Compatibility
    {
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
        /**
         * Attempts to raise the PHP memory limit for memory intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it.
         *
         * Wrapper for wp_raise_memory_limit(), added in WordPress v4.6.0
         *
         * @return bool|int|string The limit that was set or false on failure.
         */
        public static function raise_memory_limit()
        {
        }
        /**
         * Attempts to raise the PHP timeout for time intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it. Wrapper for wc_set_time_limit(), when available.
         *
         * @param int The time limit in seconds.
         */
        public static function raise_time_limit($limit = 0)
        {
        }
    }
    /**
     * Class ActionScheduler_DataController
     *
     * The main plugin/initialization class for the data stores.
     *
     * Responsible for hooking everything up with WordPress.
     *
     * @package Action_Scheduler
     *
     * @since 3.0.0
     */
    class ActionScheduler_DataController
    {
        /** Action data store class name. */
        const DATASTORE_CLASS = 'ActionScheduler_DBStore';
        /** Logger data store class name. */
        const LOGGER_CLASS = 'ActionScheduler_DBLogger';
        /** Migration status option name. */
        const STATUS_FLAG = 'action_scheduler_migration_status';
        /** Migration status option value. */
        const STATUS_COMPLETE = 'complete';
        /** Migration minimum required PHP version. */
        const MIN_PHP_VERSION = '5.5';
        /** @var ActionScheduler_DataController */
        private static $instance;
        /** @var int */
        private static $sleep_time = 0;
        /** @var int */
        private static $free_ticks = 50;
        /**
         * Get a flag indicating whether the migration environment dependencies are met.
         *
         * @return bool
         */
        public static function dependencies_met()
        {
        }
        /**
         * Get a flag indicating whether the migration is complete.
         *
         * @return bool Whether the flag has been set marking the migration as complete
         */
        public static function is_migration_complete()
        {
        }
        /**
         * Mark the migration as complete.
         */
        public static function mark_migration_complete()
        {
        }
        /**
         * Unmark migration when a plugin is de-activated. Will not work in case of silent activation, for example in an update.
         * We do this to mitigate the bug of lost actions which happens if there was an AS 2.x to AS 3.x migration in the past, but that plugin is now
         * deactivated and the site was running on AS 2.x again.
         */
        public static function mark_migration_incomplete()
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public static function set_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public static function set_logger_class($class)
        {
        }
        /**
         * Set the sleep time in seconds.
         *
         * @param integer $sleep_time The number of seconds to pause before resuming operation.
         */
        public static function set_sleep_time($sleep_time)
        {
        }
        /**
         * Set the tick count required for freeing memory.
         *
         * @param integer $free_ticks The number of ticks to free memory on.
         */
        public static function set_free_ticks($free_ticks)
        {
        }
        /**
         * Free memory if conditions are met.
         *
         * @param int $ticks Current tick count.
         */
        public static function maybe_free_memory($ticks)
        {
        }
        /**
         * Reduce memory footprint by clearing the database query and object caches.
         */
        public static function free_memory()
        {
        }
        /**
         * Connect to table datastores if migration is complete.
         * Otherwise, proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * ActionScheduler DateTime class.
     *
     * This is a custom extension to DateTime that
     */
    class ActionScheduler_DateTime extends \DateTime
    {
        /**
         * UTC offset.
         *
         * Only used when a timezone is not set. When a timezone string is
         * used, this will be set to 0.
         *
         * @var int
         */
        protected $utcOffset = 0;
        /**
         * Get the unix timestamp of the current object.
         *
         * Missing in PHP 5.2 so just here so it can be supported consistently.
         *
         * @return int
         */
        public function getTimestamp()
        {
        }
        /**
         * Set the UTC offset.
         *
         * This represents a fixed offset instead of a timezone setting.
         *
         * @param $offset
         */
        public function setUtcOffset($offset)
        {
        }
        /**
         * Returns the timezone offset.
         *
         * @return int
         * @link http://php.net/manual/en/datetime.getoffset.php
         */
        public function getOffset()
        {
        }
        /**
         * Set the TimeZone associated with the DateTime
         *
         * @param DateTimeZone $timezone
         *
         * @return static
         * @link http://php.net/manual/en/datetime.settimezone.php
         */
        public function setTimezone($timezone)
        {
        }
        /**
         * Get the timestamp with the WordPress timezone offset added or subtracted.
         *
         * @since  3.0.0
         * @return int
         */
        public function getOffsetTimestamp()
        {
        }
    }
    /**
     * ActionScheduler Exception Interface.
     *
     * Facilitates catching Exceptions unique to Action Scheduler.
     *
     * @package ActionScheduler
     * @since %VERSION%
     */
    interface ActionScheduler_Exception
    {
    }
    /**
     * Class ActionScheduler_FatalErrorMonitor
     */
    class ActionScheduler_FatalErrorMonitor
    {
        /** @var ActionScheduler_ActionClaim */
        private $claim = \NULL;
        /** @var ActionScheduler_Store */
        private $store = \NULL;
        private $action_id = 0;
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        public function attach(\ActionScheduler_ActionClaim $claim)
        {
        }
        public function detach()
        {
        }
        public function track_current_action($action_id)
        {
        }
        public function untrack_action()
        {
        }
        public function handle_unexpected_shutdown()
        {
        }
    }
    /**
     * InvalidAction Exception.
     *
     * Used for identifying actions that are invalid in some way.
     *
     * @package ActionScheduler
     */
    class ActionScheduler_InvalidActionException extends \InvalidArgumentException implements \ActionScheduler_Exception
    {
        /**
         * Create a new exception when the action's schedule cannot be fetched.
         *
         * @param string $action_id The action ID with bad args.
         * @return static
         */
        public static function from_schedule($action_id, $schedule)
        {
        }
        /**
         * Create a new exception when the action's args cannot be decoded to an array.
         *
         * @author Jeremy Pry
         *
         * @param string $action_id The action ID with bad args.
         * @return static
         */
        public static function from_decoding_args($action_id, $args = array())
        {
        }
    }
    /**
     * Action Scheduler Abstract List Table class
     *
     * This abstract class enhances WP_List_Table making it ready to use.
     *
     * By extending this class we can focus on describing how our table looks like,
     * which columns needs to be shown, filter, ordered by and more and forget about the details.
     *
     * This class supports:
     *	- Bulk actions
     *	- Search
     *  - Sortable columns
     *  - Automatic translations of the columns
     *
     * @codeCoverageIgnore
     * @since  2.0.0
     */
    abstract class ActionScheduler_Abstract_ListTable extends \WP_List_Table
    {
        /**
         * The table name
         */
        protected $table_name;
        /**
         * Package name, used to get options from WP_List_Table::get_items_per_page.
         */
        protected $package;
        /**
         * How many items do we render per page?
         */
        protected $items_per_page = 10;
        /**
         * Enables search in this table listing. If this array
         * is empty it means the listing is not searchable.
         */
        protected $search_by = array();
        /**
         * Columns to show in the table listing. It is a key => value pair. The
         * key must much the table column name and the value is the label, which is
         * automatically translated.
         */
        protected $columns = array();
        /**
         * Defines the row-actions. It expects an array where the key
         * is the column name and the value is an array of actions.
         *
         * The array of actions are key => value, where key is the method name
         * (with the prefix row_action_<key>) and the value is the label
         * and title.
         */
        protected $row_actions = array();
        /**
         * The Primary key of our table
         */
        protected $ID = 'ID';
        /**
         * Enables sorting, it expects an array
         * of columns (the column names are the values)
         */
        protected $sort_by = array();
        protected $filter_by = array();
        /**
         * @var array The status name => count combinations for this table's items. Used to display status filters.
         */
        protected $status_counts = array();
        /**
         * @var array Notices to display when loading the table. Array of arrays of form array( 'class' => {updated|error}, 'message' => 'This is the notice text display.' ).
         */
        protected $admin_notices = array();
        /**
         * @var string Localised string displayed in the <h1> element above the able.
         */
        protected $table_header;
        /**
         * Enables bulk actions. It must be an array where the key is the action name
         * and the value is the label (which is translated automatically). It is important
         * to notice that it will check that the method exists (`bulk_$name`) and will throw
         * an exception if it does not exists.
         *
         * This class will automatically check if the current request has a bulk action, will do the
         * validations and afterwards will execute the bulk method, with two arguments. The first argument
         * is the array with primary keys, the second argument is a string with a list of the primary keys,
         * escaped and ready to use (with `IN`).
         */
        protected $bulk_actions = array();
        /**
         * Makes translation easier, it basically just wraps
         * `_x` with some default (the package name).
         * 
         * @deprecated 3.0.0
         */
        protected function translate($text, $context = '')
        {
        }
        /**
         * Reads `$this->bulk_actions` and returns an array that WP_List_Table understands. It
         * also validates that the bulk method handler exists. It throws an exception because
         * this is a library meant for developers and missing a bulk method is a development-time error.
         */
        protected function get_bulk_actions()
        {
        }
        /**
         * Checks if the current request has a bulk action. If that is the case it will validate and will
         * execute the bulk method handler. Regardless if the action is valid or not it will redirect to
         * the previous page removing the current arguments that makes this request a bulk action.
         */
        protected function process_bulk_action()
        {
        }
        /**
         * Default code for deleting entries.
         * validated already by process_bulk_action()
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Prepares the _column_headers property which is used by WP_Table_List at rendering.
         * It merges the columns and the sortable columns.
         */
        protected function prepare_column_headers()
        {
        }
        /**
         * Reads $this->sort_by and returns the columns name in a format that WP_Table_List
         * expects
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Returns the columns names for rendering. It adds a checkbox for selecting everything
         * as the first column
         */
        public function get_columns()
        {
        }
        /**
         * Get prepared LIMIT clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared LIMIT clause for items query.
         */
        protected function get_items_query_limit()
        {
        }
        /**
         * Returns the number of items to offset/skip for this current view.
         *
         * @return int
         */
        protected function get_items_offset()
        {
        }
        /**
         * Get prepared OFFSET clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared OFFSET clause for items query.
         */
        protected function get_items_query_offset()
        {
        }
        /**
         * Prepares the ORDER BY sql statement. It uses `$this->sort_by` to know which
         * columns are sortable. This requests validates the orderby $_GET parameter is a valid
         * column and sortable. It will also use order (ASC|DESC) using DESC by default.
         */
        protected function get_items_query_order()
        {
        }
        /**
         * Return the sortable column specified for this request to order the results by, if any.
         *
         * @return string
         */
        protected function get_request_orderby()
        {
        }
        /**
         * Return the sortable column order specified for this request.
         *
         * @return string
         */
        protected function get_request_order()
        {
        }
        /**
         * Return the status filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_status()
        {
        }
        /**
         * Return the search filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_search_query()
        {
        }
        /**
         * Process and return the columns name. This is meant for using with SQL, this means it
         * always includes the primary key.
         *
         * @return array
         */
        protected function get_table_columns()
        {
        }
        /**
         * Check if the current request is doing a "full text" search. If that is the case
         * prepares the SQL to search texts using LIKE.
         *
         * If the current request does not have any search or if this list table does not support
         * that feature it will return an empty string.
         *
         * TODO:
         *   - Improve search doing LIKE by word rather than by phrases.
         *
         * @return string
         */
        protected function get_items_query_search()
        {
        }
        /**
         * Prepares the SQL to filter rows by the options defined at `$this->filter_by`. Before trusting
         * any data sent by the user it validates that it is a valid option.
         */
        protected function get_items_query_filters()
        {
        }
        /**
         * Prepares the data to feed WP_Table_List.
         *
         * This has the core for selecting, sorting and filting data. To keep the code simple
         * its logic is split among many methods (get_items_query_*).
         *
         * Beside populating the items this function will also count all the records that matches
         * the filtering criteria and will do fill the pagination variables.
         */
        public function prepare_items()
        {
        }
        public function extra_tablenav($which)
        {
        }
        /**
         * Set the data for displaying. It will attempt to unserialize (There is a chance that some columns
         * are serialized). This can be override in child classes for futher data transformation.
         */
        protected function set_items(array $items)
        {
        }
        /**
         * Renders the checkbox for each row, this is the first column and it is named ID regardless
         * of how the primary key is named (to keep the code simpler). The bulk actions will do the proper
         * name transformation though using `$this->ID`.
         */
        public function column_cb($row)
        {
        }
        /**
         * Renders the row-actions.
         *
         * This method renders the action menu, it reads the definition from the $row_actions property,
         * and it checks that the row action method exists before rendering it.
         *
         * @param array $row     Row to render
         * @param $column_name   Current row
         * @return
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        protected function process_row_actions()
        {
        }
        /**
         * Default column formatting, it will escape everythig for security.
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_header()
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_admin_notices()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Renders the table list, we override the original class to render the table inside a form
         * and to render any needed HTML (like the search box). By doing so the callee of a function can simple
         * forget about any extra HTML.
         */
        protected function display_table()
        {
        }
        /**
         * Process any pending actions.
         */
        public function process_actions()
        {
        }
        /**
         * Render the list table page, including header, notices, status filters and table.
         */
        public function display_page()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_placeholder()
        {
        }
    }
    /**
     * Implements the admin view of the actions.
     * @codeCoverageIgnore
     */
    class ActionScheduler_ListTable extends \ActionScheduler_Abstract_ListTable
    {
        /**
         * The package name.
         *
         * @var string
         */
        protected $package = 'action-scheduler';
        /**
         * Columns to show (name => label).
         *
         * @var array
         */
        protected $columns = array();
        /**
         * Actions (name => label).
         *
         * @var array
         */
        protected $row_actions = array();
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * A logger to use for getting action logs to display
         *
         * @var ActionScheduler_Logger
         */
        protected $logger;
        /**
         * A ActionScheduler_QueueRunner runner instance (or child class)
         *
         * @var ActionScheduler_QueueRunner
         */
        protected $runner;
        /**
         * Bulk actions. The key of the array is the method name of the implementation:
         *
         *     bulk_<key>(array $ids, string $sql_in).
         *
         * See the comments in the parent class for further details
         *
         * @var array
         */
        protected $bulk_actions = array();
        /**
         * Flag variable to render our notifications, if any, once.
         *
         * @var bool
         */
        protected static $did_notification = \false;
        /**
         * Array of seconds for common time periods, like week or month, alongside an internationalised string representation, i.e. "Day" or "Days"
         *
         * @var array
         */
        private static $time_periods;
        /**
         * Sets the current data store object into `store->action` and initialises the object.
         *
         * @param ActionScheduler_Store $store
         * @param ActionScheduler_Logger $logger
         * @param ActionScheduler_QueueRunner $runner
         */
        public function __construct(\ActionScheduler_Store $store, \ActionScheduler_Logger $logger, \ActionScheduler_QueueRunner $runner)
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This function goes one step
         * further to display two degrees of accuracy.
         *
         * Inspired by the Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @param int $interval A interval in seconds.
         * @param int $periods_to_include Depth of time periods to include, e.g. for an interval of 70, and $periods_to_include of 2, both minutes and seconds would be included. With a value of 1, only minutes would be included.
         * @return string A human friendly string representation of the interval.
         */
        private static function human_interval($interval, $periods_to_include = 2)
        {
        }
        /**
         * Returns the recurrence of an action or 'Non-repeating'. The output is human readable.
         *
         * @param ActionScheduler_Action $action
         *
         * @return string
         */
        protected function get_recurrence($action)
        {
        }
        /**
         * Serializes the argument of an action to render it in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table
         *
         * @return string
         */
        public function column_args(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param array $row Action array.
         * @return string
         */
        public function column_log_entries(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param ActionScheduler_LogEntry $log_entry
         * @param DateTimezone $timezone
         * @return string
         */
        protected function get_log_entry_html(\ActionScheduler_LogEntry $log_entry, \DateTimezone $timezone)
        {
        }
        /**
         * Only display row actions for pending actions.
         *
         * @param array  $row         Row to render
         * @param string $column_name Current row
         *
         * @return string
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        /**
         * Renders admin notifications
         *
         * Notifications:
         *  1. When the maximum number of tasks are being executed simultaneously.
         *  2. Notifications when a task is manually executed.
         *  3. Tables are missing.
         */
        public function display_admin_notices()
        {
        }
        /**
         * Prints the scheduled date in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table
         *
         * @return string
         */
        public function column_schedule($row)
        {
        }
        /**
         * Get the scheduled date in a human friendly format.
         *
         * @param ActionScheduler_Schedule $schedule
         * @return string
         */
        protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Bulk delete
         *
         * Deletes actions based on their ID. This is the handler for the bulk delete. It assumes the data
         * properly validated by the callee and it will delete the actions without any extra validation.
         *
         * @param array $ids
         * @param string $ids_sql Inherited and unused
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id
         */
        protected function row_action_cancel($action_id)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id
         */
        protected function row_action_run($action_id)
        {
        }
        /**
         * Force the data store schema updates.
         */
        protected function recreate_tables()
        {
        }
        /**
         * Implements the logic behind processing an action once an action link is clicked on the list table.
         *
         * @param int $action_id
         * @param string $row_action_type The type of action to perform on the action.
         */
        protected function process_row_action($action_id, $row_action_type)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function prepare_items()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_button_text()
        {
        }
    }
    /**
     * Class ActionScheduler_LogEntry
     */
    class ActionScheduler_LogEntry
    {
        /**
         * @var int $action_id
         */
        protected $action_id = '';
        /**
         * @var string $message
         */
        protected $message = '';
        /**
         * @var Datetime $date
         */
        protected $date;
        /**
         * Constructor
         *
         * @param mixed  $action_id Action ID
         * @param string $message   Message
         * @param Datetime $date    Datetime object with the time when this log entry was created. If this parameter is
         *                          not provided a new Datetime object (with current time) will be created.
         */
        public function __construct($action_id, $message, $date = \null)
        {
        }
        /**
         * Returns the date when this log entry was created
         *
         * @return Datetime
         */
        public function get_date()
        {
        }
        public function get_action_id()
        {
        }
        public function get_message()
        {
        }
    }
    /**
     * Class ActionScheduler_NullLogEntry
     */
    class ActionScheduler_NullLogEntry extends \ActionScheduler_LogEntry
    {
        public function __construct($action_id = '', $message = '')
        {
        }
    }
    /**
     * Abstract class for setting a basic lock to throttle some action.
     *
     * Class ActionScheduler_Lock
     */
    abstract class ActionScheduler_Lock
    {
        /** @var ActionScheduler_Lock */
        private static $locker = \NULL;
        /** @var int */
        protected static $lock_duration = \MINUTE_IN_SECONDS;
        /**
         * Check if a lock is set for a given lock type.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        public function is_locked($lock_type)
        {
        }
        /**
         * Set a lock.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        public abstract function set($lock_type);
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public abstract function get_expiration($lock_type);
        /**
         * Get the amount of time to set for a given lock. 60 seconds by default.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return int
         */
        protected function get_duration($lock_type)
        {
        }
        /**
         * @return ActionScheduler_Lock
         */
        public static function instance()
        {
        }
    }
    /**
     * Provide a way to set simple transient locks to block behaviour
     * for up-to a given duration.
     *
     * Class ActionScheduler_OptionLock
     * @since 3.0.0
     */
    class ActionScheduler_OptionLock extends \ActionScheduler_Lock
    {
        /**
         * Set a lock using options for a given amount of time (60 seconds by default).
         *
         * Using an autoloaded option avoids running database queries or other resource intensive tasks
         * on frequently triggered hooks, like 'init' or 'shutdown'.
         *
         * For example, ActionScheduler_QueueRunner->maybe_dispatch_async_request() uses a lock to avoid
         * calling ActionScheduler_QueueRunner->has_maximum_concurrent_batches() every time the 'shutdown',
         * hook is triggered, because that method calls ActionScheduler_QueueRunner->store->get_claim_count()
         * to find the current number of claims in the database.
         *
         * @param string $lock_type A string to identify different lock types.
         * @bool True if lock value has changed, false if not or if set failed.
         */
        public function set($lock_type)
        {
        }
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public function get_expiration($lock_type)
        {
        }
        /**
         * Get the key to use for storing the lock in the transient
         *
         * @param string $lock_type A string to identify different lock types.
         * @return string
         */
        protected function get_key($lock_type)
        {
        }
    }
    /**
     * Class ActionScheduler_QueueCleaner
     */
    class ActionScheduler_QueueCleaner
    {
        /** @var int */
        protected $batch_size;
        /** @var ActionScheduler_Store */
        private $store = \null;
        /**
         * 31 days in seconds.
         *
         * @var int
         */
        private $month_in_seconds = 2678400;
        /**
         * ActionScheduler_QueueCleaner constructor.
         *
         * @param ActionScheduler_Store $store      The store instance.
         * @param int                   $batch_size The batch size.
         */
        public function __construct(\ActionScheduler_Store $store = \null, $batch_size = 20)
        {
        }
        public function delete_old_actions()
        {
        }
        /**
         * Unclaim pending actions that have not been run within a given time limit.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow a queue to run before unclaiming its pending actions. Default 300 (5 minutes).
         */
        public function reset_timeouts($time_limit = 300)
        {
        }
        /**
         * Mark actions that have been running for more than a given time limit as failed, based on
         * the assumption some uncatachable and unloggable fatal error occurred during processing.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow an action to run before it is considered to have failed. Default 300 (5 minutes).
         */
        public function mark_failures($time_limit = 300)
        {
        }
        /**
         * Do all of the cleaning actions.
         *
         * @param int $time_limit The number of seconds to use as the timeout and failure period. Default 300 (5 minutes).
         * @author Jeremy Pry
         */
        public function clean($time_limit = 300)
        {
        }
        /**
         * Get the batch size for cleaning the queue.
         *
         * @author Jeremy Pry
         * @return int
         */
        protected function get_batch_size()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @deprecated 2.1.1
         * @return int The number of seconds.
         */
        protected function get_maximum_execution_time()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner extends \ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /** @var ActionScheduler_QueueCleaner */
        protected $cleaner;
        /** @var ActionScheduler_FatalErrorMonitor */
        protected $monitor;
        /** @var ActionScheduler_Store */
        protected $store;
        /**
         * The created time.
         *
         * Represents when the queue runner was constructed and used when calculating how long a PHP request has been running.
         * For this reason it should be as close as possible to the PHP request start time.
         *
         * @var int
         */
        private $created_time;
        /**
         * ActionScheduler_Abstract_QueueRunner constructor.
         *
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Process an individual action.
         *
         * @param int $action_id The action ID to process.
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         */
        public function process_action($action_id, $context = '')
        {
        }
        /**
         * Schedule the next instance of the action if necessary.
         *
         * @param ActionScheduler_Action $action
         * @param int $action_id
         */
        protected function schedule_next_instance(\ActionScheduler_Action $action, $action_id)
        {
        }
        /**
         * Run the queue cleaner.
         *
         * @author Jeremy Pry
         */
        protected function run_cleanup()
        {
        }
        /**
         * Get the number of concurrent batches a runner allows.
         *
         * @return int
         */
        public function get_allowed_concurrent_batches()
        {
        }
        /**
         * Check if the number of allowed concurrent batches is met or exceeded.
         *
         * @return bool
         */
        public function has_maximum_concurrent_batches()
        {
        }
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @return int The number of seconds.
         */
        protected function get_time_limit()
        {
        }
        /**
         * Get the number of seconds the process has been running.
         *
         * @return int The number of seconds.
         */
        protected function get_execution_time()
        {
        }
        /**
         * Check if the host's max execution time is (likely) to be exceeded if processing more actions.
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
         * @return bool
         */
        protected function time_likely_to_be_exceeded($processed_actions)
        {
        }
        /**
         * Get memory limit
         *
         * Based on WP_Background_Process::get_memory_limit()
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90% of the maximum WordPress memory.
         *
         * Based on WP_Background_Process::memory_exceeded()
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * See if the batch limits have been exceeded, which is when memory usage is almost at
         * the maximum limit, or the time to process more actions will exceed the max time limit.
         *
         * Based on WC_Background_Process::batch_limits_exceeded()
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
         * @return bool
         */
        protected function batch_limits_exceeded($processed_actions)
        {
        }
        /**
         * Process actions in the queue.
         *
         * @author Jeremy Pry
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public abstract function run($context = '');
    }
    /**
     * Class ActionScheduler_QueueRunner
     */
    class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        const WP_CRON_HOOK = 'action_scheduler_run_queue';
        const WP_CRON_SCHEDULE = 'every_minute';
        /** @var ActionScheduler_AsyncRequest_QueueRunner */
        protected $async_request;
        /** @var ActionScheduler_QueueRunner  */
        private static $runner = \null;
        /**
         * @return ActionScheduler_QueueRunner
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * ActionScheduler_QueueRunner constructor.
         *
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null, \ActionScheduler_AsyncRequest_QueueRunner $async_request = \null)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Hook check for dispatching an async request.
         */
        public function hook_dispatch_async_request()
        {
        }
        /**
         * Unhook check for dispatching an async request.
         */
        public function unhook_dispatch_async_request()
        {
        }
        /**
         * Check if we should dispatch an async request to process actions.
         *
         * This method is attached to 'shutdown', so is called frequently. To avoid slowing down
         * the site, it mitigates the work performed in each request by:
         * 1. checking if it's in the admin context and then
         * 2. haven't run on the 'shutdown' hook within the lock time (60 seconds by default)
         * 3. haven't exceeded the number of allowed batches.
         *
         * The order of these checks is important, because they run from a check on a value:
         * 1. in memory - is_admin() maps to $GLOBALS or the WP_ADMIN constant
         * 2. in memory - transients use autoloaded options by default
         * 3. from a database query - has_maximum_concurrent_batches() run the query
         *    $this->store->get_claim_count() to find the current number of claims in the DB.
         *
         * If all of these conditions are met, then we request an async runner check whether it
         * should dispatch a request to process pending actions.
         */
        public function maybe_dispatch_async_request()
        {
        }
        /**
         * Process actions in the queue. Attached to self::WP_CRON_HOOK i.e. 'action_scheduler_run_queue'
         *
         * The $context param of this method defaults to 'WP Cron', because prior to Action Scheduler 3.0.0
         * that was the only context in which this method was run, and the self::WP_CRON_HOOK hook had no context
         * passed along with it. New code calling this method directly, or by triggering the self::WP_CRON_HOOK,
         * should set a context as the first parameter. For an example of this, refer to the code seen in
         * @see ActionScheduler_AsyncRequest_QueueRunner::handle()
         *
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public function run($context = 'WP Cron')
        {
        }
        /**
         * Process a batch of actions pending in the queue.
         *
         * Actions are processed by claiming a set of pending actions then processing each one until either the batch
         * size is completed, or memory or time limits are reached, defined by @see $this->batch_limits_exceeded().
         *
         * @param int $size The maximum number of actions to process in the batch.
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        protected function do_batch($size = 100, $context = '')
        {
        }
        /**
         * Running large batches can eat up memory, as WP adds data to its object cache.
         *
         * If using a persistent object store, this has the side effect of flushing that
         * as well, so this is disabled by default. To enable:
         *
         * add_filter( 'action_scheduler_queue_runner_flush_cache', '__return_true' );
         */
        protected function clear_caches()
        {
        }
        public function add_wp_cron_schedule($schedules)
        {
        }
    }
    /**
     * Class ActionScheduler_Versions
     */
    class ActionScheduler_Versions
    {
        /**
         * @var ActionScheduler_Versions
         */
        private static $instance = \NULL;
        private $versions = array();
        public function register($version_string, $initialization_callback)
        {
        }
        public function get_versions()
        {
        }
        public function latest_version()
        {
        }
        public function latest_version_callback()
        {
        }
        /**
         * @return ActionScheduler_Versions
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public static function initialize_latest_version()
        {
        }
    }
    /**
     * Class ActionScheduler_WPCommentCleaner
     *
     * @since 3.0.0
     */
    class ActionScheduler_WPCommentCleaner
    {
        /**
         * Post migration hook used to cleanup the WP comment table.
         *
         * @var string
         */
        protected static $cleanup_hook = 'action_scheduler/cleanup_wp_comment_logs';
        /**
         * An instance of the ActionScheduler_wpCommentLogger class to interact with the comments table.
         *
         * This instance should only be used as an interface. It should not be initialized.
         *
         * @var ActionScheduler_wpCommentLogger
         */
        protected static $wp_comment_logger = \null;
        /**
         * The key used to store the cached value of whether there are logs in the WP comment table.
         *
         * @var string
         */
        protected static $has_logs_option_key = 'as_has_wp_comment_logs';
        /**
         * Initialize the class and attach callbacks.
         */
        public static function init()
        {
        }
        /**
         * Determines if there are log entries in the wp comments table.
         *
         * Uses the flag set on migration completion set by @see self::maybe_schedule_cleanup().
         *
         * @return boolean Whether there are scheduled action comments in the comments table.
         */
        public static function has_logs()
        {
        }
        /**
         * Schedules the WP Post comment table cleanup to run in 6 months if it's not already scheduled.
         * Attached to the migration complete hook 'action_scheduler/migration_complete'.
         */
        public static function maybe_schedule_cleanup()
        {
        }
        /**
         * Delete all action comments from the WP Comments table.
         */
        public static function delete_all_action_comments()
        {
        }
        /**
         * Registers admin notices about the orphaned action logs.
         */
        public static function register_admin_notice()
        {
        }
        /**
         * Prints details about the orphaned action logs and includes information on where to learn more.
         */
        public static function print_admin_notice()
        {
        }
    }
    /**
     * Class ActionScheduler_wcSystemStatus
     */
    class ActionScheduler_wcSystemStatus
    {
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        function __construct($store)
        {
        }
        /**
         * Display action data, including number of actions grouped by status and the oldest & newest action in each status.
         *
         * Helpful to identify issues, like a clogged queue.
         */
        public function render()
        {
        }
        /**
         * Get oldest and newest scheduled dates for a given set of statuses.
         *
         * @param array $status_keys Set of statuses to find oldest & newest action for.
         * @return array
         */
        protected function get_oldest_and_newest($status_keys)
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param string $status Action status label/name string.
         * @param string $date_type Oldest or Newest.
         * @return DateTime
         */
        protected function get_action_status_date($status, $date_type = 'oldest')
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param array $status_labels Set of statuses to find oldest & newest action for.
         * @param array $action_counts Number of actions grouped by status.
         * @param array $oldest_and_newest Date of the oldest and newest action with each status.
         */
        protected function get_template($status_labels, $action_counts, $oldest_and_newest)
        {
        }
        /**
         * is triggered when invoking inaccessible methods in an object context.
         *
         * @param string $name
         * @param array  $arguments
         *
         * @return mixed
         * @link https://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
         */
        public function __call($name, $arguments)
        {
        }
    }
    /**
     * Class ActionScheduler
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler
    {
        private static $plugin_file = '';
        /** @var ActionScheduler_ActionFactory */
        private static $factory = \NULL;
        /** @var bool */
        private static $data_store_initialized = \false;
        public static function factory()
        {
        }
        public static function store()
        {
        }
        public static function lock()
        {
        }
        public static function logger()
        {
        }
        public static function runner()
        {
        }
        public static function admin_view()
        {
        }
        /**
         * Get the absolute system path to the plugin directory, or a file therein
         * @static
         * @param string $path
         * @return string
         */
        public static function plugin_path($path)
        {
        }
        /**
         * Get the absolute URL to the plugin directory, or a file therein
         * @static
         * @param string $path
         * @return string
         */
        public static function plugin_url($path)
        {
        }
        public static function autoload($class)
        {
        }
        /**
         * Initialize the plugin
         *
         * @static
         * @param string $plugin_file
         */
        public static function init($plugin_file)
        {
        }
        /**
         * Check whether the AS data store has been initialized.
         *
         * @param string $function_name The name of the function being called. Optional. Default `null`.
         * @return bool
         */
        public static function is_initialized($function_name = \null)
        {
        }
        /**
         * Determine if the class is one of our abstract classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_abstract($class)
        {
        }
        /**
         * Determine if the class is one of our migration classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_migration($class)
        {
        }
        /**
         * Determine if the class is one of our WP CLI classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_cli($class)
        {
        }
        public final function __clone()
        {
        }
        public final function __wakeup()
        {
        }
        private final function __construct()
        {
        }
        /** Deprecated **/
        public static function get_datetime_object($when = \null, $timezone = 'UTC')
        {
        }
        /**
         * Issue deprecated warning if an Action Scheduler function is called in the shutdown hook.
         *
         * @param string $function_name The name of the function being called.
         * @deprecated 3.1.6.
         */
        public static function check_shutdown_hook($function_name)
        {
        }
    }
    /**
     * Class ActionScheduler_Schedule
     */
    interface ActionScheduler_Schedule
    {
        /**
         * @param DateTime $after
         * @return DateTime|null
         */
        public function next(\DateTime $after = \NULL);
        /**
         * @return bool
         */
        public function is_recurring();
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Schedule_Deprecated implements \ActionScheduler_Schedule
    {
        /**
         * Get the date & time this schedule was created to run, or calculate when it should be run
         * after a given date & time.
         *
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function next(\DateTime $after = \NULL)
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Abstract_Schedule extends \ActionScheduler_Schedule_Deprecated
    {
        /**
         * The date & time the schedule is set to run.
         *
         * @var DateTime
         */
        private $scheduled_date = \NULL;
        /**
         * Timestamp equivalent of @see $this->scheduled_date
         *
         * @var int
         */
        protected $scheduled_timestamp = \NULL;
        /**
         * @param DateTime $date The date & time to run the action.
         */
        public function __construct(\DateTime $date)
        {
        }
        /**
         * Check if a schedule should recur.
         *
         * @return bool
         */
        public abstract function is_recurring();
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected abstract function calculate_next(\DateTime $after);
        /**
         * Get the next date & time when this schedule should run after a given date & time.
         *
         * @param DateTime $after
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * Get the date & time the schedule is set to run.
         *
         * @return DateTime|null
         */
        public function get_date()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         * @return array
         */
        public function __sleep()
        {
        }
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_RecurringSchedule
     */
    abstract class ActionScheduler_Abstract_RecurringSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * The date & time the first instance of this schedule was setup to run (which may not be this instance).
         *
         * Schedule objects are attached to an action object. Each schedule stores the run date for that
         * object as the start date - @see $this->start - and logic to calculate the next run date after
         * that - @see $this->calculate_next(). The $first_date property also keeps a record of when the very
         * first instance of this chain of schedules ran.
         *
         * @var DateTime
         */
        private $first_date = \NULL;
        /**
         * Timestamp equivalent of @see $this->first_date
         *
         * @var int
         */
        protected $first_timestamp = \NULL;
        /**
         * The recurrance between each time an action is run using this schedule.
         * Used to calculate the start date & time. Can be a number of seconds, in the
         * case of ActionScheduler_IntervalSchedule, or a cron expression, as in the
         * case of ActionScheduler_CronSchedule. Or something else.
         *
         * @var mixed
         */
        protected $recurrence;
        /**
         * @param DateTime $date The date & time to run the action.
         * @param mixed $recurrence The data used to determine the schedule's recurrance.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $date, $recurrence, \DateTime $first = \null)
        {
        }
        /**
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Get the date & time of the first schedule in this recurring series.
         *
         * @return DateTime|null
         */
        public function get_first_date()
        {
        }
        /**
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. This was addressed in
         * Action Scheduler 3.0.0, where properties and property names were aligned for better
         * inheritance. To maintain backward compatibility with scheduled serialized and stored
         * prior to 3.0, we need to correctly map the old property names.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schema
     *
     * @package Action_Scheduler
     *
     * @codeCoverageIgnore
     *
     * Utility class for creating/updating custom tables
     */
    abstract class ActionScheduler_Abstract_Schema
    {
        /**
         * @var int Increment this value in derived class to trigger a schema update.
         */
        protected $schema_version = 1;
        /**
         * @var array Names of tables that will be registered by this class.
         */
        protected $tables = [];
        /**
         * Register tables with WordPress, and create them if needed.
         *
         * @param bool $force_update Optional. Default false. Use true to always run the schema update.
         *
         * @return void
         */
        public function register_tables($force_update = \false)
        {
        }
        /**
         * @param string $table The name of the table
         *
         * @return string The CREATE TABLE statement, suitable for passing to dbDelta
         */
        protected abstract function get_table_definition($table);
        /**
         * Determine if the database schema is out of date
         * by comparing the integer found in $this->schema_version
         * with the option set in the WordPress options table
         *
         * @return bool
         */
        private function schema_update_required()
        {
        }
        /**
         * Update the option in WordPress to indicate that
         * our schema is now up to date
         *
         * @return void
         */
        private function mark_schema_update_complete()
        {
        }
        /**
         * Update the schema for the given table
         *
         * @param string $table The name of the table to update
         *
         * @return void
         */
        private function update_table($table)
        {
        }
        /**
         * @param string $table
         *
         * @return string The full name of the table, including the
         *                table prefix for the current blog
         */
        protected function get_full_table_name($table)
        {
        }
    }
    /**
     * Class ActionScheduler_Logger
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Logger
    {
        private static $logger = \NULL;
        /**
         * @return ActionScheduler_Logger
         */
        public static function instance()
        {
        }
        /**
         * @param string $action_id
         * @param string $message
         * @param DateTime $date
         *
         * @return string The log entry ID
         */
        public abstract function log($action_id, $message, \DateTime $date = \NULL);
        /**
         * @param string $entry_id
         *
         * @return ActionScheduler_LogEntry
         */
        public abstract function get_entry($entry_id);
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_LogEntry[]
         */
        public abstract function get_logs($action_id);
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function hook_stored_action()
        {
        }
        public function unhook_stored_action()
        {
        }
        public function log_stored_action($action_id)
        {
        }
        public function log_canceled_action($action_id)
        {
        }
        public function log_started_action($action_id, $context = '')
        {
        }
        public function log_completed_action($action_id, $action = \NULL, $context = '')
        {
        }
        public function log_failed_action($action_id, \Exception $exception, $context = '')
        {
        }
        public function log_timed_out_action($action_id, $timeout)
        {
        }
        public function log_unexpected_shutdown($action_id, $error)
        {
        }
        public function log_reset_action($action_id)
        {
        }
        public function log_ignored_action($action_id, $context = '')
        {
        }
        /**
         * @param string $action_id
         * @param Exception|NULL $exception The exception which occured when fetching the action. NULL by default for backward compatibility.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function log_failed_fetch_action($action_id, \Exception $exception = \NULL)
        {
        }
        public function log_failed_schedule_next_instance($action_id, \Exception $exception)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * Implemented here for backward compatibility. Should be implemented in parent loggers
         * for more performant bulk logging.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_Store_Deprecated
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store_Deprecated
    {
        /**
         * Mark an action that failed to fetch correctly as failed.
         *
         * @since 2.2.6
         *
         * @param int $action_id The ID of the action.
         */
        public function mark_failed_fetch_action($action_id)
        {
        }
        /**
         * Add base hooks
         *
         * @since 2.2.6
         */
        protected static function hook()
        {
        }
        /**
         * Remove base hooks
         *
         * @since 2.2.6
         */
        protected static function unhook()
        {
        }
        /**
         * Get the site's local time.
         *
         * @deprecated 2.1.0
         * @return DateTimeZone
         */
        protected function get_local_timezone()
        {
        }
    }
    /**
     * Class ActionScheduler_Store
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store extends \ActionScheduler_Store_Deprecated
    {
        const STATUS_COMPLETE = 'complete';
        const STATUS_PENDING = 'pending';
        const STATUS_RUNNING = 'in-progress';
        const STATUS_FAILED = 'failed';
        const STATUS_CANCELED = 'canceled';
        const DEFAULT_CLASS = 'ActionScheduler_wpPostStore';
        /** @var ActionScheduler_Store */
        private static $store = \NULL;
        /** @var int */
        protected static $max_args_length = 191;
        /**
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date Optional Date of the first instance
         *        to store. Otherwise uses the first date of the action's
         *        schedule.
         *
         * @return int The action ID
         */
        public abstract function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL);
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_Action
         */
        public abstract function fetch_action($action_id);
        /**
         * @param string $hook Hook name/slug.
         * @param array  $params Hook arguments.
         * @return string ID of the next action matching the criteria.
         */
        public abstract function find_action($hook, $params = array());
        /**
         * @param array  $query Query parameters.
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return array|int The IDs of or count of actions matching the query.
         */
        public abstract function query_actions($query = array(), $query_type = 'select');
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        public abstract function action_counts();
        /**
         * @param string $action_id
         */
        public abstract function cancel_action($action_id);
        /**
         * @param string $action_id
         */
        public abstract function delete_action($action_id);
        /**
         * @param string $action_id
         *
         * @return DateTime The date the action is schedule to run, or the date that it ran.
         */
        public abstract function get_date($action_id);
        /**
         * @param int      $max_actions
         * @param DateTime $before_date Claim only actions schedule before the given date. Defaults to now.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         */
        public abstract function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '');
        /**
         * @return int
         */
        public abstract function get_claim_count();
        /**
         * @param ActionScheduler_ActionClaim $claim
         */
        public abstract function release_claim(\ActionScheduler_ActionClaim $claim);
        /**
         * @param string $action_id
         */
        public abstract function unclaim_action($action_id);
        /**
         * @param string $action_id
         */
        public abstract function mark_failure($action_id);
        /**
         * @param string $action_id
         */
        public abstract function log_execution($action_id);
        /**
         * @param string $action_id
         */
        public abstract function mark_complete($action_id);
        /**
         * @param string $action_id
         *
         * @return string
         */
        public abstract function get_status($action_id);
        /**
         * @param string $action_id
         * @return mixed
         */
        public abstract function get_claim_id($action_id);
        /**
         * @param string $claim_id
         * @return array
         */
        public abstract function find_actions_by_claim_id($claim_id);
        /**
         * @param string $comparison_operator
         * @return string
         */
        protected function validate_sql_comparator($comparison_operator)
        {
        }
        /**
         * Get the time MySQL formated date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        protected function get_scheduled_date_string(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        /**
         * Get the time MySQL formated date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        protected function get_scheduled_date_string_local(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        /**
         * Validate that we could decode action arguments.
         *
         * @param mixed $args      The decoded arguments.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the decoded arguments are invalid.
         */
        protected function validate_args($args, $action_id)
        {
        }
        /**
         * Validate a ActionScheduler_Schedule object.
         *
         * @param mixed $schedule  The unserialized ActionScheduler_Schedule object.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the schedule is invalid.
         */
        protected function validate_schedule($schedule, $action_id)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * with custom tables, we use an indexed VARCHAR column instead.
         *
         * @param  ActionScheduler_Action $action Action to be validated.
         * @throws InvalidArgumentException When json encoded args is too long.
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @since 3.0.0
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Cancel a set of action IDs.
         *
         * @since 3.0.0
         *
         * @param array $action_ids List of action IDs.
         *
         * @return void
         */
        private function bulk_cancel_actions($action_ids)
        {
        }
        /**
         * @return array
         */
        public function get_status_labels()
        {
        }
        /**
         * Check if there are any pending scheduled actions due to run.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        public function has_pending_actions_due()
        {
        }
        /**
         * Callable initialization function optionally overridden in derived classes.
         */
        public function init()
        {
        }
        /**
         * Callable function to mark an action as migrated optionally overridden in derived classes.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * @return ActionScheduler_Store
         */
        public static function instance()
        {
        }
    }
    /**
     * Class ActionScheduler_TimezoneHelper
     */
    abstract class ActionScheduler_TimezoneHelper
    {
        private static $local_timezone = \NULL;
        /**
         * Set a DateTime's timezone to the WordPress site's timezone, or a UTC offset
         * if no timezone string is available.
         *
         * @since  2.1.0
         *
         * @param DateTime $date
         * @return ActionScheduler_DateTime
         */
        public static function set_local_timezone(\DateTime $date)
        {
        }
        /**
         * Helper to retrieve the timezone string for a site until a WP core method exists
         * (see https://core.trac.wordpress.org/ticket/24730).
         *
         * Adapted from wc_timezone_string() and https://secure.php.net/manual/en/function.timezone-name-from-abbr.php#89155.
         *
         * If no timezone string is set, and its not possible to match the UTC offset set for the site to a timezone
         * string, then an empty string will be returned, and the UTC offset should be used to set a DateTime's
         * timezone.
         *
         * @since 2.1.0
         * @return string PHP timezone string for the site or empty if no timezone string is available.
         */
        protected static function get_local_timezone_string($reset = \false)
        {
        }
        /**
         * Get timezone offset in seconds.
         *
         * @since  2.1.0
         * @return float
         */
        protected static function get_local_timezone_offset()
        {
        }
        /**
         * @deprecated 2.1.0
         */
        public static function get_local_timezone($reset = \FALSE)
        {
        }
    }
    /**
     * Class ActionScheduler_Action
     */
    class ActionScheduler_Action
    {
        protected $hook = '';
        protected $args = array();
        /** @var ActionScheduler_Schedule */
        protected $schedule = \NULL;
        protected $group = '';
        public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \NULL, $group = '')
        {
        }
        public function execute()
        {
        }
        /**
         * @param string $hook
         */
        protected function set_hook($hook)
        {
        }
        public function get_hook()
        {
        }
        protected function set_schedule(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * @return ActionScheduler_Schedule
         */
        public function get_schedule()
        {
        }
        protected function set_args(array $args)
        {
        }
        public function get_args()
        {
        }
        /**
         * @param string $group
         */
        protected function set_group($group)
        {
        }
        /**
         * @return string
         */
        public function get_group()
        {
        }
        /**
         * @return bool If the action has been finished
         */
        public function is_finished()
        {
        }
    }
    /**
     * Class ActionScheduler_FinishedAction
     */
    class ActionScheduler_FinishedAction extends \ActionScheduler_Action
    {
        public function execute()
        {
        }
        public function is_finished()
        {
        }
    }
    /**
     * Class ActionScheduler_CanceledAction
     *
     * Stored action which was canceled and therefore acts like a finished action but should always return a null schedule,
     * regardless of schedule passed to its constructor.
     */
    class ActionScheduler_CanceledAction extends \ActionScheduler_FinishedAction
    {
        /**
         * @param string $hook
         * @param array $args
         * @param ActionScheduler_Schedule $schedule
         * @param string $group
         */
        public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
    }
    /**
     * Class ActionScheduler_NullAction
     */
    class ActionScheduler_NullAction extends \ActionScheduler_Action
    {
        public function __construct($hook = '', array $args = array(), \ActionScheduler_Schedule $schedule = \NULL)
        {
        }
        public function execute()
        {
        }
    }
    /**
     * Class ActionScheduler_DBLogger
     *
     * Action logs data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBLogger extends \ActionScheduler_Logger
    {
        /**
         * Add a record to an action log.
         *
         * @param int      $action_id Action ID.
         * @param string   $message Message to be saved in the log entry.
         * @param DateTime $date Timestamp of the log entry.
         *
         * @return int     The log entry ID.
         */
        public function log($action_id, $message, \DateTime $date = \null)
        {
        }
        /**
         * Retrieve an action log entry.
         *
         * @param int $entry_id Log entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Create an action log entry from a database record.
         *
         * @param object $record Log entry database record object.
         *
         * @return ActionScheduler_LogEntry
         */
        private function create_entry_from_db_record($record)
        {
        }
        /**
         * Retrieve the an action's log entries from the database.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        /**
         * Initialize the data store.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Delete the action logs for an action.
         *
         * @param int $action_id Action ID.
         */
        public function clear_deleted_action_logs($action_id)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_DBStore
     *
     * Action data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStore extends \ActionScheduler_Store
    {
        /** @var int */
        protected static $max_args_length = 8000;
        /** @var int */
        protected static $max_index_length = 191;
        /**
         * Initialize the data store
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Save an action.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param DateTime               $date Optional schedule date. Default null.
         *
         * @return int Action ID.
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $date = \null)
        {
        }
        /**
         * Generate a hash from json_encoded $args using MD5 as this isn't for security.
         *
         * @param string $args JSON encoded action args.
         * @return string
         */
        protected function hash_args($args)
        {
        }
        /**
         * Get action args query param value from action args.
         *
         * @param array $args Action args.
         * @return string
         */
        protected function get_args_for_query($args)
        {
        }
        /**
         * Get a group's ID based on its name/slug.
         *
         * @param string $slug The string name of a group.
         * @param bool $create_if_not_exists Whether to create the group if it does not already exist. Default, true - create the group.
         *
         * @return int The group's ID, if it exists or is created, or 0 if it does not exist and is not created.
         */
        protected function get_group_id($slug, $create_if_not_exists = \true)
        {
        }
        /**
         * Create an action group.
         *
         * @param string $slug Group slug.
         *
         * @return int Group ID.
         */
        protected function create_group($slug)
        {
        }
        /**
         * Retrieve an action.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_Action
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Create a null action.
         *
         * @return ActionScheduler_NullAction
         */
        protected function get_null_action()
        {
        }
        /**
         * Create an action from a database record.
         *
         * @param object $data Action database record.
         *
         * @return ActionScheduler_Action|ActionScheduler_CanceledAction|ActionScheduler_FinishedAction
         */
        protected function make_action_from_db_record($data)
        {
        }
        /**
         * Find an action.
         *
         * @param string $hook Action hook.
         * @param array  $params Parameters of the action to find.
         *
         * @return string|null ID of the next action matching the criteria or NULL if not found.
         */
        public function find_action($hook, $params = [])
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @param array  $query Filtering options.
         * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count.
         *
         * @return string SQL statement already properly escaped.
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count of list of action IDs.
         *
         * @param array  $query Query parameters.
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return null|string|array The IDs of actions matching the query
         */
        public function query_actions($query = [], $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status.
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * Cancel an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Bulk cancel actions.
         *
         * @since 3.0.0
         *
         * @param array $query_args Query parameters.
         */
        protected function bulk_cancel_actions($query_args)
        {
        }
        /**
         * Delete an action.
         *
         * @param int $action_id Action ID.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date for an action.
         *
         * @param string $action_id Action ID.
         *
         * @throws \InvalidArgumentException
         * @return \DateTime The local date the action is scheduled to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Get the GMT schedule date for an action.
         *
         * @param int $action_id Action ID.
         *
         * @throws \InvalidArgumentException
         * @return \DateTime The GMT date the action is scheduled to run, or the date that it ran.
         */
        protected function get_date_gmt($action_id)
        {
        }
        /**
         * Stake a claim on actions.
         *
         * @param int       $max_actions Maximum number of action to include in claim.
         * @param \DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Generate a new action claim.
         *
         * @return int Claim ID.
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Mark actions claimed.
         *
         * @param string    $claim_id Claim Id.
         * @param int       $limit Number of action to include in claim.
         * @param \DateTime $before_date Should use UTC timezone.
         *
         * @return int The number of actions that were claimed.
         * @throws \RuntimeException
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get the number of active claims.
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Return an action's claim ID, as stored in the claim_id column.
         *
         * @param string $action_id Action ID.
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Retrieve the action IDs of action in a claim.
         *
         * @param string $claim_id Claim ID.
         *
         * @return int[]
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Release actions from a claim and delete the claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Remove the claim from an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Mark an action as failed.
         *
         * @param int $action_id Action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Add execution message to action log.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an action as complete.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an action's status.
         *
         * @param int $action_id Action ID.
         *
         * @return string
         */
        public function get_status($action_id)
        {
        }
    }
    /**
     * Class ActionScheduler_HybridStore
     *
     * A wrapper around multiple stores that fetches data from both.
     *
     * @since 3.0.0
     */
    class ActionScheduler_HybridStore extends \ActionScheduler_Store
    {
        const DEMARKATION_OPTION = 'action_scheduler_hybrid_store_demarkation';
        private $primary_store;
        private $secondary_store;
        private $migration_runner;
        /**
         * @var int The dividing line between IDs of actions created
         *          by the primary and secondary stores.
         *
         * Methods that accept an action ID will compare the ID against
         * this to determine which store will contain that ID. In almost
         * all cases, the ID should come from the primary store, but if
         * client code is bypassing the API functions and fetching IDs
         * from elsewhere, then there is a chance that an unmigrated ID
         * might be requested.
         */
        private $demarkation_id = 0;
        /**
         * ActionScheduler_HybridStore constructor.
         *
         * @param Config $config Migration config object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config = \null)
        {
        }
        /**
         * Initialize the table data store tables.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * When the actions table is created, set its autoincrement
         * value to be one higher than the posts table to ensure that
         * there are no ID collisions.
         *
         * @param string $table_name
         * @param string $table_suffix
         *
         * @return void
         * @codeCoverageIgnore
         */
        public function set_autoincrement($table_name, $table_suffix)
        {
        }
        /**
         * Store the demarkation id in WP options.
         *
         * @param int $id The ID to set as the demarkation point between the two stores
         *                Leave null to use the next ID from the WP posts table.
         *
         * @return int The new ID.
         *
         * @codeCoverageIgnore
         */
        private function set_demarkation_id($id = \null)
        {
        }
        /**
         * Find the first matching action from the secondary store.
         * If it exists, migrate it to the primary store immediately.
         * After it migrates, the secondary store will logically contain
         * the next matching action, so return the result thence.
         *
         * @param string $hook
         * @param array  $params
         *
         * @return string
         */
        public function find_action($hook, $params = [])
        {
        }
        /**
         * Find actions matching the query in the secondary source first.
         * If any are found, migrate them immediately. Then the secondary
         * store will contain the canonical results.
         *
         * @param array $query
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return int[]
         */
        public function query_actions($query = [], $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * If any actions would have been claimed by the secondary store,
         * migrate them immediately, then ask the primary store for the
         * canonical claim.
         *
         * @param int           $max_actions
         * @param DateTime|null $before_date
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Migrate a list of actions to the table data store.
         *
         * @param array $action_ids List of action IDs.
         */
        private function migrate($action_ids)
        {
        }
        /**
         * Save an action to the primary store.
         *
         * @param ActionScheduler_Action $action Action object to be saved.
         * @param DateTime               $date Optional. Schedule date. Default null.
         *
         * @return int The action ID
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $date = \null)
        {
        }
        /**
         * Retrieve an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Cancel an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Delete an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Mark an existing action as failed whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Log the execution of an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an existing action complete whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an existing action status whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_status($action_id)
        {
        }
        /**
         * Return which store an action is stored in.
         *
         * @param int  $action_id ID of the action.
         * @param bool $primary_first Optional flag indicating search the primary store first.
         * @return ActionScheduler_Store
         */
        protected function get_store_from_action_id($action_id, $primary_first = \false)
        {
        }
        /* * * * * * * * * * * * * * * * * * * * * * * * * * *
         * All claim-related functions should operate solely
         * on the primary store.
         * * * * * * * * * * * * * * * * * * * * * * * * * * */
        /**
         * Get the claim count from the table data store.
         */
        public function get_claim_count()
        {
        }
        /**
         * Retrieve the claim ID for an action from the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Release a claim in the table data store.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Release claims on an action in the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Retrieve a list of action IDs by claim.
         *
         * @param int $claim_id Claim ID.
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
    }
    /**
     * Class ActionScheduler_wpCommentLogger
     */
    class ActionScheduler_wpCommentLogger extends \ActionScheduler_Logger
    {
        const AGENT = 'ActionScheduler';
        const TYPE = 'action_log';
        /**
         * @param string $action_id
         * @param string $message
         * @param DateTime $date
         *
         * @return string The log entry ID
         */
        public function log($action_id, $message, \DateTime $date = \NULL)
        {
        }
        protected function create_wp_comment($action_id, $message, \DateTime $date)
        {
        }
        /**
         * @param string $entry_id
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        protected function get_comment($comment_id)
        {
        }
        /**
         * @param WP_Comment_Query $query
         */
        public function filter_comment_queries($query)
        {
        }
        /**
         * @param array $clauses
         * @param WP_Comment_Query $query
         *
         * @return array
         */
        public function filter_comment_query_clauses($clauses, $query)
        {
        }
        /**
         * Make sure Action Scheduler logs are excluded from comment feeds, which use WP_Query, not
         * the WP_Comment_Query class handled by @see self::filter_comment_queries().
         *
         * @param string $where
         * @param WP_Query $query
         *
         * @return string
         */
        public function filter_comment_feed($where, $query)
        {
        }
        /**
         * Return a SQL clause to exclude Action Scheduler comments.
         *
         * @return string
         */
        protected function get_where_clause()
        {
        }
        /**
         * Remove action log entries from wp_count_comments()
         *
         * @param array $stats
         * @param int $post_id
         *
         * @return object
         */
        public function filter_comment_count($stats, $post_id)
        {
        }
        /**
         * Retrieve the comment counts from our cache, or the database if the cached version isn't set.
         *
         * @return object
         */
        protected function get_comment_count()
        {
        }
        /**
         * Delete comment count cache whenever there is new comment or the status of a comment changes. Cache
         * will be regenerated next time ActionScheduler_wpCommentLogger::filter_comment_count() is called.
         */
        public function delete_comment_count_cache()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function disable_comment_counting()
        {
        }
        public function enable_comment_counting()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore
     */
    class ActionScheduler_wpPostStore extends \ActionScheduler_Store
    {
        const POST_TYPE = 'scheduled-action';
        const GROUP_TAXONOMY = 'action-group';
        const SCHEDULE_META_KEY = '_action_manager_schedule';
        const DEPENDENCIES_MET = 'as-post-store-dependencies-met';
        /** @var DateTimeZone */
        protected $local_timezone = \NULL;
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        protected function create_post_array(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        protected function save_post_array($post_array)
        {
        }
        public function filter_insert_post_data($postdata)
        {
        }
        /**
         * Create a (probably unique) post name for scheduled actions in a more performant manner than wp_unique_post_slug().
         *
         * When an action's post status is transitioned to something other than 'draft', 'pending' or 'auto-draft, like 'publish'
         * or 'failed' or 'trash', WordPress will find a unique slug (stored in post_name column) using the wp_unique_post_slug()
         * function. This is done to ensure URL uniqueness. The approach taken by wp_unique_post_slug() is to iterate over existing
         * post_name values that match, and append a number 1 greater than the largest. This makes sense when manually creating a
         * post from the Edit Post screen. It becomes a bottleneck when automatically processing thousands of actions, with a
         * database containing thousands of related post_name values.
         *
         * WordPress 5.1 introduces the 'pre_wp_unique_post_slug' filter for plugins to address this issue.
         *
         * We can short-circuit WordPress's wp_unique_post_slug() approach using the 'pre_wp_unique_post_slug' filter. This
         * method is available to be used as a callback on that filter. It provides a more scalable approach to generating a
         * post_name/slug that is probably unique. Because Action Scheduler never actually uses the post_name field, or an
         * action's slug, being probably unique is good enough.
         *
         * For more backstory on this issue, see:
         * - https://github.com/woocommerce/action-scheduler/issues/44 and
         * - https://core.trac.wordpress.org/ticket/21112
         *
         * @param string $override_slug Short-circuit return value.
         * @param string $slug          The desired slug (post_name).
         * @param int    $post_ID       Post ID.
         * @param string $post_status   The post status.
         * @param string $post_type     Post type.
         * @return string
         */
        public function set_unique_post_slug($override_slug, $slug, $post_ID, $post_status, $post_type)
        {
        }
        protected function save_post_schedule($post_id, $schedule)
        {
        }
        protected function save_action_group($post_id, $group)
        {
        }
        public function fetch_action($action_id)
        {
        }
        protected function get_post($action_id)
        {
        }
        protected function get_null_action()
        {
        }
        protected function make_action_from_post($post)
        {
        }
        /**
         * @param string $post_status
         *
         * @throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels()
         * @return string
         */
        protected function get_action_status_by_post_status($post_status)
        {
        }
        /**
         * @param string $action_status
         * @throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels()
         * @return string
         */
        protected function get_post_status_by_action_status($action_status)
        {
        }
        /**
         * @param string $hook
         * @param array $params
         *
         * @return string ID of the next action matching the criteria or NULL if not found
         */
        public function find_action($hook, $params = array())
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @param array $query Filtering options
         * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count
         * @throws InvalidArgumentException if $select_or_count not count or select
         * @return string SQL statement. The returned SQL is already properly escaped.
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * @param array $query
         * @param string $query_type Whether to select or count the results. Default, select.
         * @return string|array The IDs of actions matching the query
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        public function action_counts()
        {
        }
        /**
         * @param string $action_id
         *
         * @throws InvalidArgumentException
         */
        public function cancel_action($action_id)
        {
        }
        public function delete_action($action_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @throws InvalidArgumentException
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @throws InvalidArgumentException
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date_gmt($action_id)
        {
        }
        /**
         * @param int      $max_actions
         * @param DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         * @throws RuntimeException When there is an error staking a claim.
         * @throws InvalidArgumentException When the given group is not valid.
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * @return int
         */
        public function get_claim_count()
        {
        }
        protected function generate_claim_id()
        {
        }
        /**
         * @param string   $claim_id
         * @param int      $limit
         * @param DateTime $before_date Should use UTC timezone.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return int The number of actions that were claimed
         * @throws RuntimeException When there is a database error.
         * @throws InvalidArgumentException When the group is invalid.
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get IDs of actions within a certain group and up to a certain date/time.
         *
         * @param string   $group The group to use in finding actions.
         * @param int      $limit The number of actions to retrieve.
         * @param DateTime $date  DateTime object representing cutoff time for actions. Actions retrieved will be
         *                        up to and including this DateTime.
         *
         * @return array IDs of actions in the appropriate group and before the appropriate time.
         * @throws InvalidArgumentException When the group does not exist.
         */
        protected function get_actions_by_group($group, $limit, \DateTime $date)
        {
        }
        /**
         * @param string $claim_id
         * @return array
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * @param string $action_id
         */
        public function unclaim_action($action_id)
        {
        }
        public function mark_failure($action_id)
        {
        }
        /**
         * Return an action's claim ID, as stored in the post password column
         *
         * @param string $action_id
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Return an action's status, as stored in the post status column
         *
         * @param string $action_id
         * @return mixed
         */
        public function get_status($action_id)
        {
        }
        private function get_post_column($action_id, $column_name)
        {
        }
        /**
         * @param string $action_id
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Record that an action was completed.
         *
         * @param int $action_id ID of the completed action.
         * @throws InvalidArgumentException|RuntimeException
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Mark action as migrated when there is an error deleting the action.
         *
         * @param int $action_id Action ID.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * Determine whether the post store can be migrated.
         *
         * @return bool
         */
        public function migration_dependencies_met($setting)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * as we prepare to move to custom tables, and can use an indexed VARCHAR column instead, we want to warn
         * developers of this impending requirement.
         *
         * @param ActionScheduler_Action $action
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostStatusRegistrar
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostStatusRegistrar
    {
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_args()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_failed_labels()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_running_labels()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostTypeRegistrar
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostTypeRegistrar
    {
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_type_args()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_TaxonomyRegistrar
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_TaxonomyRegistrar
    {
        public function register()
        {
        }
        protected function taxonomy_args()
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class ActionMigrator
    {
        /** var ActionScheduler_Store */
        private $source;
        /** var ActionScheduler_Store */
        private $destination;
        /** var LogMigrator */
        private $log_migrator;
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         * @param ActionScheduler_Store $destination_store Destination store object.
         * @param LogMigrator           $log_migrator Log migrator object.
         */
        public function __construct(\ActionScheduler_Store $source_store, \ActionScheduler_Store $destination_store, \Action_Scheduler\Migration\LogMigrator $log_migrator)
        {
        }
        /**
         * Migrate an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int 0|new action ID
         */
        public function migrate($source_action_id)
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_DBStoreMigrator
     *
     * A  class for direct saving of actions to the table data store during migration.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStoreMigrator extends \ActionScheduler_DBStore
    {
        /**
         * Save an action with optional last attempt date.
         *
         * Normally, saving an action sets its attempted date to 0000-00-00 00:00:00 because when an action is first saved,
         * it can't have been attempted yet, but migrated completed actions will have an attempted date, so we need to save
         * that when first saving the action.
         *
         * @param ActionScheduler_Action $action
         * @param \DateTime $scheduled_date Optional date of the first instance to store.
         * @param \DateTime $last_attempt_date Optional date the action was last attempted.
         *
         * @return string The action ID
         * @throws \RuntimeException When the action is not saved.
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null, \DateTime $last_attempt_date = \null)
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class BatchFetcher
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class BatchFetcher
    {
        /** var ActionScheduler_Store */
        private $store;
        /**
         * BatchFetcher constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         */
        public function __construct(\ActionScheduler_Store $source_store)
        {
        }
        /**
         * Retrieve a list of actions.
         *
         * @param int $count The number of actions to retrieve
         *
         * @return int[] A list of action IDs
         */
        public function fetch($count = 10)
        {
        }
        /**
         * Generate a list of prioritized of action search parameters.
         *
         * @param int $count Number of actions to find.
         *
         * @return array
         */
        private function get_query_strategies($count)
        {
        }
    }
    /**
     * Class Config
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * A config builder for the ActionScheduler\Migration\Runner class
     */
    class Config
    {
        /** @var ActionScheduler_Store */
        private $source_store;
        /** @var ActionScheduler_Logger */
        private $source_logger;
        /** @var ActionScheduler_Store */
        private $destination_store;
        /** @var ActionScheduler_Logger */
        private $destination_logger;
        /** @var Progress bar */
        private $progress_bar;
        /** @var bool */
        private $dry_run = false;
        /**
         * Config constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the configured source store.
         *
         * @return ActionScheduler_Store
         */
        public function get_source_store()
        {
        }
        /**
         * Set the configured source store.
         *
         * @param ActionScheduler_Store $store Source store object.
         */
        public function set_source_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured source loger.
         *
         * @return ActionScheduler_Logger
         */
        public function get_source_logger()
        {
        }
        /**
         * Set the configured source logger.
         *
         * @param ActionScheduler_Logger $logger
         */
        public function set_source_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get the configured destination store.
         *
         * @return ActionScheduler_Store
         */
        public function get_destination_store()
        {
        }
        /**
         * Set the configured destination store.
         *
         * @param ActionScheduler_Store $store
         */
        public function set_destination_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured destination logger.
         *
         * @return ActionScheduler_Logger
         */
        public function get_destination_logger()
        {
        }
        /**
         * Set the configured destination logger.
         *
         * @param ActionScheduler_Logger $logger
         */
        public function set_destination_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get flag indicating whether it's a dry run.
         *
         * @return bool
         */
        public function get_dry_run()
        {
        }
        /**
         * Set flag indicating whether it's a dry run.
         *
         * @param bool $dry_run
         */
        public function set_dry_run($dry_run)
        {
        }
        /**
         * Get progress bar object.
         *
         * @return ActionScheduler\WPCLI\ProgressBar
         */
        public function get_progress_bar()
        {
        }
        /**
         * Set progress bar object.
         *
         * @param ActionScheduler\WPCLI\ProgressBar $progress_bar
         */
        public function set_progress_bar(\Action_Scheduler\WP_CLI\ProgressBar $progress_bar)
        {
        }
    }
    /**
     * Class Controller
     *
     * The main plugin/initialization class for migration to custom tables.
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Controller
    {
        private static $instance;
        /** @var Action_Scheduler\Migration\Scheduler */
        private $migration_scheduler;
        /** @var string */
        private $store_classname;
        /** @var string */
        private $logger_classname;
        /** @var bool */
        private $migrate_custom_store;
        /**
         * Controller constructor.
         *
         * @param Scheduler $migration_scheduler Migration scheduler object.
         */
        protected function __construct(\Action_Scheduler\Migration\Scheduler $migration_scheduler)
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public function get_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public function get_logger_class($class)
        {
        }
        /**
         * Get flag indicating whether a custom datastore is in use.
         *
         * @return bool
         */
        public function has_custom_datastore()
        {
        }
        /**
         * Set up the background migration process
         *
         * @return void
         */
        public function schedule_migration()
        {
        }
        /**
         * Get the default migration config object
         *
         * @return ActionScheduler\Migration\Config
         */
        public function get_migration_config_object()
        {
        }
        /**
         * Hook dashboard migration notice.
         */
        public function hook_admin_notices()
        {
        }
        /**
         * Show a dashboard notice that migration is in progress.
         */
        public function display_migration_notice()
        {
        }
        /**
         * Add store classes. Hook migration.
         */
        private function hook()
        {
        }
        /**
         * Possibly hook the migration scheduler action.
         *
         * @author Jeremy Pry
         */
        public function maybe_hook_migration()
        {
        }
        /**
         * Allow datastores to enable migration to AS tables.
         */
        public function allow_migration()
        {
        }
        /**
         * Proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * Class DryRun_ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class DryRun_ActionMigrator extends \Action_Scheduler\Migration\ActionMigrator
    {
        /**
         * Simulate migrating an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int
         */
        public function migrate($source_action_id)
        {
        }
    }
    /**
     * Class LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class LogMigrator
    {
        /** @var ActionScheduler_Logger */
        private $source;
        /** @var ActionScheduler_Logger */
        private $destination;
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Logger $source_logger Source logger object.
         * @param ActionScheduler_Logger $destination_Logger Destination logger object.
         */
        public function __construct(\ActionScheduler_Logger $source_logger, \ActionScheduler_Logger $destination_Logger)
        {
        }
        /**
         * Migrate an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class DryRun_LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @codeCoverageIgnore
     */
    class DryRun_LogMigrator extends \Action_Scheduler\Migration\LogMigrator
    {
        /**
         * Simulate migrating an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class Runner
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Runner
    {
        /** @var ActionScheduler_Store */
        private $source_store;
        /** @var ActionScheduler_Store */
        private $destination_store;
        /** @var ActionScheduler_Logger */
        private $source_logger;
        /** @var ActionScheduler_Logger */
        private $destination_logger;
        /** @var BatchFetcher */
        private $batch_fetcher;
        /** @var ActionMigrator */
        private $action_migrator;
        /** @var LogMigrator */
        private $log_migrator;
        /** @var ProgressBar */
        private $progress_bar;
        /**
         * Runner constructor.
         *
         * @param Config $config Migration configuration object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config)
        {
        }
        /**
         * Run migration batch.
         *
         * @param int $batch_size Optional batch size. Default 10.
         *
         * @return int Size of batch processed.
         */
        public function run($batch_size = 10)
        {
        }
        /**
         * Migration a batch of actions.
         *
         * @param array $action_ids List of action IDs to migrate.
         */
        public function migrate_actions(array $action_ids)
        {
        }
        /**
         * Initialize destination store and logger.
         */
        public function init_destination()
        {
        }
    }
    /**
     * Class Scheduler
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Scheduler
    {
        /** Migration action hook. */
        const HOOK = 'action_scheduler/migration_hook';
        /** Migration action group. */
        const GROUP = 'action-scheduler-migration';
        /**
         * Set up the callback for the scheduled job.
         */
        public function hook()
        {
        }
        /**
         * Remove the callback for the scheduled job.
         */
        public function unhook()
        {
        }
        /**
         * The migration callback.
         */
        public function run_migration()
        {
        }
        /**
         * Mark the migration complete.
         */
        public function mark_complete()
        {
        }
        /**
         * Get a flag indicating whether the migration is scheduled.
         *
         * @return bool Whether there is a pending action in the store to handle the migration
         */
        public function is_migration_scheduled()
        {
        }
        /**
         * Schedule the migration.
         *
         * @param int $when Optional timestamp to run the next migration batch. Defaults to now.
         *
         * @return string The action ID
         */
        public function schedule_migration($when = 0)
        {
        }
        /**
         * Remove the scheduled migration action.
         */
        public function unschedule_migration()
        {
        }
        /**
         * Get migration batch schedule interval.
         *
         * @return int Seconds between migration runs. Defaults to 0 seconds to allow chaining migration via Async Runners.
         */
        private function get_schedule_interval()
        {
        }
        /**
         * Get migration batch size.
         *
         * @return int Number of actions to migrate in each batch. Defaults to 250.
         */
        private function get_batch_size()
        {
        }
        /**
         * Get migration runner object.
         *
         * @return Runner
         */
        private function get_migration_runner()
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_SimpleSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $timestamp = \NULL;
        /**
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Serialize schedule with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * scheduled date for single actions always being seen as "now" if downgrading to
         * Action Scheduler < 3.0.0, we need to also store the data with the old property names
         * so if it's unserialized in AS < 3.0, the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_CanceledSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $timestamp = \NULL;
        /**
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * Cancelled actions should never have a next schedule, even if get_next()
         * is called with $after < $this->scheduled_date.
         *
         * @param DateTime $after
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_CronSchedule
     */
    class ActionScheduler_CronSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $start_timestamp = \NULL;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $cron = \NULL;
        /**
         * Wrapper for parent constructor to accept a cron expression string and map it to a CronExpression for this
         * objects $recurrence property.
         *
         * @param DateTime $start The date & time to run the action at or after. If $start aligns with the CronSchedule passed via $recurrence, it will be used. If it does not align, the first matching date after it will be used.
         * @param CronExpression|string $recurrence The CronExpression used to calculate the schedule's next instance.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $start, $recurrence, \DateTime $first = \null)
        {
        }
        /**
         * Calculate when an instance of this schedule would start based on a given
         * date & time using its the CronExpression.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * Serialize cron schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, reccuring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize cron schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_IntervalSchedule
     */
    class ActionScheduler_IntervalSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $start_timestamp = \NULL;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $interval_in_seconds = \NULL;
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return int
         */
        public function interval_in_seconds()
        {
        }
        /**
         * Serialize interval schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, reccuring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null/false/0 recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize interval schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_NullSchedule
     */
    class ActionScheduler_NullSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * Make the $date param optional and default to null.
         *
         * @param null $date The date & time to run the action.
         */
        public function __construct(\DateTime $date = \null)
        {
        }
        /**
         * This schedule has no scheduled DateTime, so we need to override the parent __sleep()
         * @return array
         */
        public function __sleep()
        {
        }
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_LoggerSchema
     *
     * @codeCoverageIgnore
     *
     * Creates a custom table for storing action logs
     */
    class ActionScheduler_LoggerSchema extends \ActionScheduler_Abstract_Schema
    {
        const LOG_TABLE = 'actionscheduler_logs';
        /**
         * @var int Increment this value to trigger a schema update.
         */
        protected $schema_version = 2;
        public function __construct()
        {
        }
        protected function get_table_definition($table)
        {
        }
    }
    /**
     * Class ActionScheduler_StoreSchema
     *
     * @codeCoverageIgnore
     *
     * Creates custom tables for storing scheduled actions
     */
    class ActionScheduler_StoreSchema extends \ActionScheduler_Abstract_Schema
    {
        const ACTIONS_TABLE = 'actionscheduler_actions';
        const CLAIMS_TABLE = 'actionscheduler_claims';
        const GROUPS_TABLE = 'actionscheduler_groups';
        /**
         * @var int Increment this value to trigger a schema update.
         */
        protected $schema_version = 3;
        public function __construct()
        {
        }
        protected function get_table_definition($table)
        {
        }
    }
}
namespace {
    /**
     * Deprecated API functions for scheduling actions
     *
     * Functions with the wc prefix were deprecated to avoid confusion with
     * Action Scheduler being included in WooCommerce core, and it providing
     * a different set of APIs for working with the action queue.
     */
    /**
     * Schedule an action to run one time
     *
     * @param int $timestamp When the job will run
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @return string The job ID
     */
    function wc_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int $timestamp When the first instance of the job will run
     * @param int $interval_in_seconds How long to wait between runs
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int $timestamp The schedule will start on or after this time
     * @param string $schedule A cron-link schedule string
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel the next occurrence of a job.
     *
     * @param string $hook The hook that the job will trigger
     * @param array $args Args that would have been passed to the job
     * @param string $group
     *
     * @deprecated 2.1.0
     */
    function wc_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * @param string $hook
     * @param array $args
     * @param string $group
     *
     * @deprecated 2.1.0
     *
     * @return int|bool The timestamp for the next occurrence, or false if nothing was found
     */
    function wc_next_scheduled_action($hook, $args = \NULL, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array $args Possible arguments, with their default values:
     *        'hook' => '' - the name of the action that will be triggered
     *        'args' => NULL - the args array that will be passed with the action
     *        'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'group' => '' - the group the action belongs to
     *        'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING
     *        'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID
     *        'per_page' => 5 - Number of results to return
     *        'offset' => 0
     *        'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', or 'date'
     *        'order' => 'ASC'
     * @param string $return_format OBJECT, ARRAY_A, or ids
     *
     * @deprecated 2.1.0
     *
     * @return array
     */
    function wc_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * General API functions for scheduling actions
     */
    /**
     * Enqueue an action to run one time, as soon as possible
     *
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @return int The action ID.
     */
    function as_enqueue_async_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action to run one time
     *
     * @param int $timestamp When the job will run.
     * @param string $hook The hook to trigger.
     * @param array $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return int The action ID.
     */
    function as_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int $timestamp When the first instance of the job will run.
     * @param int $interval_in_seconds How long to wait between runs.
     * @param string $hook The hook to trigger.
     * @param array $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return int The action ID.
     */
    function as_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int $base_timestamp The first instance of the action will be scheduled
     *        to run at a time calculated after this timestamp matching the cron
     *        expression. This can be used to delay the first instance of the action.
     * @param string $schedule A cron-link schedule string
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger.
     * @param array $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return int The action ID.
     */
    function as_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel the next occurrence of a scheduled action.
     *
     * While only the next instance of a recurring or cron action is unscheduled by this method, that will also prevent
     * all future instances of that recurring or cron action from being run. Recurring and cron actions are scheduled in
     * a sequence instead of all being scheduled at once. Each successive occurrence of a recurring action is scheduled
     * only after the former action is run. If the next instance is never run, because it's unscheduled by this function,
     * then the following instance will never be scheduled (or exist), which is effectively the same as being unscheduled
     * by this method also.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     *
     * @return string|null The scheduled action ID if a scheduled action was found, or null if no matching action found.
     */
    function as_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel all occurrences of a scheduled action.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     */
    function as_unschedule_all_actions($hook, $args = array(), $group = '')
    {
    }
    /**
     * Check if there is an existing action in the queue with a given hook, args and group combination.
     *
     * An action in the queue could be pending, in-progress or async. If the is pending for a time in
     * future, its scheduled date will be returned as a timestamp. If it is currently being run, or an
     * async action sitting in the queue waiting to be processed, in which case boolean true will be
     * returned. Or there may be no async, in-progress or pending action for this hook, in which case,
     * boolean false will be the return value.
     *
     * @param string $hook
     * @param array $args
     * @param string $group
     *
     * @return int|bool The timestamp for the next occurrence of a pending scheduled action, true for an async or in-progress action or false if there is no matching action.
     */
    function as_next_scheduled_action($hook, $args = \NULL, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array $args Possible arguments, with their default values:
     *        'hook' => '' - the name of the action that will be triggered
     *        'args' => NULL - the args array that will be passed with the action
     *        'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'group' => '' - the group the action belongs to
     *        'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING
     *        'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID
     *        'per_page' => 5 - Number of results to return
     *        'offset' => 0
     *        'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', or 'date'
     *        'order' => 'ASC'
     *
     * @param string $return_format OBJECT, ARRAY_A, or ids.
     *
     * @return array
     */
    function as_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * Helper function to create an instance of DateTime based on a given
     * string and timezone. By default, will return the current date/time
     * in the UTC timezone.
     *
     * Needed because new DateTime() called without an explicit timezone
     * will create a date/time in PHP's timezone, but we need to have
     * assurance that a date/time uses the right timezone (which we almost
     * always want to be UTC), which means we need to always include the
     * timezone when instantiating datetimes rather than leaving it up to
     * the PHP default.
     *
     * @param mixed $date_string A date/time string. Valid formats are explained in http://php.net/manual/en/datetime.formats.php.
     * @param string $timezone A timezone identifier, like UTC or Europe/Lisbon. The list of valid identifiers is available http://php.net/manual/en/timezones.php.
     *
     * @return ActionScheduler_DateTime
     */
    function as_get_datetime_object($date_string = \null, $timezone = 'UTC')
    {
    }
    /**
     * Returns core WC pages to connect to WC-Admin.
     *
     * @return array
     */
    function wc_admin_get_core_pages_to_connect()
    {
    }
    /**
     * Filter breadcrumbs for core pages that aren't explicitly connected.
     *
     * @param array $breadcrumbs Breadcrumb pieces.
     * @return array Filtered breadcrumb pieces.
     */
    function wc_admin_filter_core_page_breadcrumbs($breadcrumbs)
    {
    }
    /**
     * Render the WC-Admin header bar on all WooCommerce core pages.
     *
     * @param bool $is_connected Whether the current page is connected.
     * @param bool $current_page The current page, if connected.
     * @return bool Whether to connect the page.
     */
    function wc_admin_connect_core_pages($is_connected, $current_page)
    {
    }
    /**
     * Format a number using the decimal and thousands separator settings in WooCommerce.
     *
     * @param mixed $number Number to be formatted.
     * @return string
     */
    function wc_admin_number_format($number)
    {
    }
    /**
     * Retrieves a URL to relative path inside WooCommerce admin with
     * the provided query parameters.
     *
     * @param  string $path Relative path of the desired page.
     * @param  array  $query Query parameters to append to the path.
     *
     * @return string       Fully qualified URL pointing to the desired path.
     */
    function wc_admin_url($path = \null, $query = array())
    {
    }
    /**
     * Record an event using Tracks.
     *
     * @internal WooCommerce core only includes Tracks in admin, not the REST API, so we need to include it.
     * @param string $event_name Event name for tracks.
     * @param array  $properties Properties to pass along with event.
     */
    function wc_admin_record_tracks_event($event_name, $properties = array())
    {
    }
    function wc_admin_get_feature_config()
    {
    }
    /**
     * Connect an existing page to WooCommerce Admin.
     * Passthrough to PageController::connect_page().
     *
     * @param array $options Options for PageController::connect_page().
     */
    function wc_admin_connect_page($options)
    {
    }
    /**
     * Register JS-powered WooCommerce Admin Page.
     * Passthrough to PageController::register_page().
     *
     * @param array $options Options for PageController::register_page().
     */
    function wc_admin_register_page($options)
    {
    }
    /**
     * Is this page connected to WooCommerce Admin?
     * Passthrough to PageController::is_connected_page().
     *
     * @return boolean True if the page is connected to WooCommerce Admin.
     */
    function wc_admin_is_connected_page()
    {
    }
    /**
     * Is this a WooCommerce Admin Page?
     * Passthrough to PageController::is_registered_page().
     *
     * @return boolean True if the page is a WooCommerce Admin page.
     */
    function wc_admin_is_registered_page()
    {
    }
    /**
     * Get breadcrumbs for WooCommerce Admin Page navigation.
     * Passthrough to PageController::get_breadcrumbs().
     *
     * @return array Navigation pieces (breadcrumbs).
     */
    function wc_admin_get_breadcrumbs()
    {
    }
}
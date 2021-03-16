<?php

/**
 * @see https://github.com/spatie/laravel-query-builder
 */

return [

	/*
     * By default the package will use the `include`, `filter`, `sort`
     * and `fields` query parameters as described in the readme.
     *
     * You can customize these query string parameters here.
     */
	'parameters' => [
		'include' => 'include',

		'filter' => 'filter',

		'sort' => 'sort',

		'fields' => 'fields',

		'append' => 'append',
	],

	/*
     * Related model counts are included using the relationship name suffixed with this string.
     * For example: GET /users?include=postsCount
     */
	'count_suffix' => 'Count',

	/*
     * By default the package will throw an `InvalidFilterQuery` exception when a filter in the
     * URL is not allowed in the `allowedFilters()` method.
     */
	'disable_invalid_filter_query_exception' => true,

];

<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
{
    /**
     *  @OA\Post(
     *      path="/api/register",
     *      tags={"User"},
     *      summary="Returns a Sample Register User API response",
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      example="Your Name"
     *                  ),
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      format="email",
     *                      example="your@mail.com"
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="string",
     *                      example="yourpassword"
     *                  ),
     *                  @OA\Property(
     *                      property="street",
     *                      type="string",
     *                      example="Your Address"
     *                  ),
     *                  @OA\Property(
     *                      property="city",
     *                      type="string",
     *                      example="Your City"
     *                  ),
     *                  @OA\Property(
     *                      property="country",
     *                      type="string",
     *                      example="Your Country"
     *                  ),
     *                  @OA\Property(
     *                      property="postcode",
     *                      type="integer",
     *                      example="Your Postal Code Address"
     *                  ),
     *                  @OA\Property(
     *                      property="phone",
     *                      type="integer",
     *                      example="Your Phone Number"
     *                  ),
     *              )
     *          ),
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      example="Your Name"
     *                  ),
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      format="email",
     *                      example="your@mail.com"
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="string",
     *                      example="yourpassword"
     *                  ),
     *                  @OA\Property(
     *                      property="street",
     *                      type="string",
     *                      example="Your Address"
     *                  ),
     *                  @OA\Property(
     *                      property="city",
     *                      type="string",
     *                      example="Your City"
     *                  ),
     *                  @OA\Property(
     *                      property="country",
     *                      type="string",
     *                      example="Your Country"
     *                  ),
     *                  @OA\Property(
     *                      property="postcode",
     *                      type="integer",
     *                      example="Your Postal Code Address"
     *                  ),
     *                  @OA\Property(
     *                      property="phone",
     *                      type="integer",
     *                      example="Your Phone Number"
     *                  ),
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="avatar",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="name",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="email",
     *                                      type="string"
     *                                  ),
     *                                   @OA\Property(
     *                                       property="street",
     *                                       type="string"
     *                                          ),
     *                                   @OA\Property(
     *                                       property="city",
     *                                       type="string"
     *                                   ),
     *                                   @OA\Property(
     *                                       property="country",
     *                                       type="string"
     *                                   ),
     *                                   @OA\Property(
     *                                       property="postcode",
     *                                       type="string"
     *                                   ),
     *                                  @OA\Property(
     *                                      property="phone",
     *                                      type="string"
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "data": {
     *                                  "id":"integer",
     *                                  "avatar":"string",
     *                                  "name":"string",
     *                                  "email":"string",
     *                                  "street":"string",
     *                                  "city":"string",
     *                                  "country":"string",
     *                                  "postcode":"string",
     *                                  "phone":"integer"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="success", 
     *                  type="boolean",
     *                  example="false"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="null",
     *                  example="null"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="object",
     *                  @OA\Property(
     *                      property="name",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="email",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="street",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="city",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="country",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="postcode",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="phone",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  )
     *              )
     *          )
     *      )
     *  )
     *  @OA\Post(
     *      path="/api/login",
     *      tags={"User"},
     *      summary="Returns a Sample Login User API response",
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      example="your@mail.com"
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="string",
     *                      example="yourpassword"
     *                  ),
     *              )
     *          ),
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      example="your@mail.com"
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="string",
     *                      example="yourpassword"
     *                  ),
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="token",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "token": "Your Token!"
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="message",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "message": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="success", 
     *                  type="boolean",
     *                  example="false"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="null",
     *                  example="null"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="object",
     *                  @OA\Property(
     *                      property="email",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="password",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  )
     *              )
     *          )
     *      )
     *  )
     *  @OA\Get(
     *      path="/api/user",
     *      tags={"User"},
     *      summary="Returns a Sample Get All Users API response",
     *      @OA\Parameter(
     *          name="page",
     *          in="query",
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="count",
     *                              type="integer"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="current_page",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="data",
     *                                      type="array",
     *                                      @OA\Items(
     *                                          @OA\Property(
     *                                              property="id",
     *                                              type="integer"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="avatar",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="name",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="email",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="address",
     *                                              type="object",
     *                                                  @OA\Property(
     *                                                      property="street",
     *                                                      type="string"
     *                                                  ),
     *                                                  @OA\Property(
     *                                                      property="city",
     *                                                      type="string"
     *                                                  ),
     *                                                  @OA\Property(
     *                                                      property="country",
     *                                                      type="string"
     *                                                  ),
     *                                                  @OA\Property(
     *                                                      property="postcode",
     *                                                      type="string"
     *                                                  )
     *                                          ),
     *                                          @OA\Property(
     *                                              property="phone",
     *                                              type="string"
     *                                          )        
     *                                      )
     *                                  ),
     *                                  @OA\Property(
     *                                      property="first_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="from",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="last_page",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="last_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="next_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="path",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="per_page",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="prev_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="to",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="total",
     *                                      type="integer",
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "count": "integer",
     *                              "data": {
     *                                  "current_page": "integer",
     *                                  "data": {{
     *                                      "id":"integer",
     *                                      "avatar":"string",
     *                                      "name":"string",
     *                                      "email":"string",
     *                                      "address": {
     *                                          "street":"string",
     *                                          "city":"string",
     *                                          "country":"string",
     *                                          "postcode":"string"
     *                                      },
     *                                      "phone":"integer"
     *                                  }},
     *                                  "first_page_url": "string",
     *                                  "from": "integer",
     *                                  "last_page": "integer",
     *                                  "last_page_url": "string",
     *                                  "next_page_url": "string",
     *                                  "path": "string",
     *                                  "per_page": "integer",
     *                                  "prev_page_url": "string",
     *                                  "to": "integer",
     *                                  "total": "integer"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      )
     *  )
     *  @OA\Get(
     *      path="/api/user/{userId}",
     *      tags={"User"},
     *      summary="Returns a Sample User By ID API response",
     *      @OA\Parameter(
     *          name="userId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="avatar",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="name",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="email",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="address",
     *                                      type="object",
     *                                          @OA\Property(
     *                                              property="street",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="city",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="country",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="postcode",
     *                                              type="string"
     *                                          )
     *                                  ),
     *                                  @OA\Property(
     *                                      property="phone",
     *                                      type="string"
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "data": {
     *                                  "id":"integer",
     *                                  "avatar":"string",
     *                                  "name":"string",
     *                                  "email":"string",
     *                                  "address": {
     *                                      "street":"string",
     *                                      "city":"string",
     *                                      "country":"string",
     *                                      "postcode":"string"
     *                                  },
     *                                  "phone":"integer"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="400",
     *          description="Bad Request",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "data": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      )
     *  ),
     *  @OA\Get(
     *      path="/api/profile",
     *      tags={"User"},
     *      summary="Returns a Sample Profile API response",
     *      security={
     *          {"bearer": {}}
     *      },
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="id",
     *                              type="integer"
     *                          ),
     *                          @OA\Property(
     *                              property="avatar",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="name",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="email",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="street",
     *                              type="string"
     *                                  ),
     *                          @OA\Property(
     *                              property="city",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="country",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="postcode",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="phone",
     *                              type="string"
     *                          ),
     *                          @OA\Property(
     *                              property="created_at",
     *                              type="timestamp"
     *                          ),
     *                          @OA\Property(
     *                              property="updated_at",
     *                              type="timestamp"
     *                          ),
     *                          @OA\Property(
     *                              property="deleted_at",
     *                              type="timestamp"
     *                          ),
     *                          example={
     *                              "id":"integer",
     *                              "avatar":"string",
     *                              "name":"string",
     *                              "email":"string",
     *                              "street":"string",
     *                              "city":"string",
     *                              "country":"string",
     *                              "postcode":"string",
     *                              "phone":"integer",
     *                              "created_at":"timestamp",
     *                              "updated_at":"timestamp",
     *                              "deleted_at":"timestamp"
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="message",
     *                              type="string",
     *                          ),
     *                          example={
     *                              "message": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      )
     *  )
     */

    /**
     *  @OA\Get(
     *      path="/api/gallery",
     *      tags={"Gallery"},
     *      summary="Returns a Sample Get All Galleries API response",
     *      @OA\Parameter(
     *          name="page",
     *          in="query",
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="count",
     *                              type="integer"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="current_page",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="data",
     *                                      type="array",
     *                                      @OA\Items(
     *                                          @OA\Property(
     *                                              property="id",
     *                                              type="integer"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="user_id",
     *                                              type="integer"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="title",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="image",
     *                                              type="string"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="created_at",
     *                                              type="timestamp"
     *                                          ),
     *                                          @OA\Property(
     *                                              property="updated_at",
     *                                              type="timestamp"
     *                                          )
     *                                      )
     *                                  ),
     *                                  @OA\Property(
     *                                      property="first_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="from",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="last_page",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="last_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="next_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="path",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="per_page",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="prev_page_url",
     *                                      type="string",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="to",
     *                                      type="integer",
     *                                  ),
     *                                  @OA\Property(
     *                                      property="total",
     *                                      type="integer",
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "count": "integer",
     *                              "data": {
     *                                  "current_page": "integer",
     *                                  "data": {{
     *                                      "id":"integer",
     *                                      "user_id":"string",
     *                                      "title":"string",
     *                                      "image":"string",
     *                                      "created_at":"timestamp",
     *                                      "updated_at":"timestamp"
     *                                  }},
     *                                  "first_page_url": "string",
     *                                  "from": "integer",
     *                                  "last_page": "integer",
     *                                  "last_page_url": "string",
     *                                  "next_page_url": "string",
     *                                  "path": "string",
     *                                  "per_page": "integer",
     *                                  "prev_page_url": "string",
     *                                  "to": "integer",
     *                                  "total": "integer"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *  )
     *  @OA\Get(
     *      path="/api/gallery/{galleryId}",
     *      tags={"Gallery"},
     *      summary="Returns a Sample Get Gallery By ID API response",
     *      @OA\Parameter(
     *          name="galleryId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="user_id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="title",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="image",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="created_at",
     *                                      type="timestamp"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="updated_at",
     *                                      type="timestamp"
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "data": {
     *                                  "id":"integer",
     *                                  "user_id":"string",
     *                                  "title":"string",
     *                                  "image":"string",
     *                                  "created_at":"timestamp",
     *                                  "updated_at":"timestamp"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="400",
     *          description="Bad Request",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "data": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      )
     *  )
     *  @OA\Post(
     *      path="/api/gallery",
     *      tags={"Gallery"},
     *      summary="Returns a Sample New Gallery API response",
     *      security={
     *          {"bearer": {}}
     *      },
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="title",
     *                      type="string",
     *                      example="Image Name"
     *                  ),
     *                  @OA\Property(
     *                      property="image",
     *                      type="file"
     *                  ),
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="user_id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="title",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="image",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="created_at",
     *                                      type="timestamp"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="updated_at",
     *                                      type="timestamp"
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "data": {
     *                                  "id":"integer",
     *                                  "user_id":"string",
     *                                  "title":"string",
     *                                  "image":"string",
     *                                  "created_at":"timestamp",
     *                                  "updated_at":"timestamp"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="message",
     *                              type="string",
     *                          ),
     *                          example={
     *                              "message": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="success", 
     *                  type="boolean",
     *                  example="false"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="null",
     *                  example="null"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="object",
     *                  @OA\Property(
     *                      property="title",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="image",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  )
     *              )
     *          )
     *      )
     *  )
     *  @OA\Post(
     *      path="/api/gallery/{galleryId}",
     *      tags={"Gallery"},
     *      summary="Returns a Sample Update Gallery By ID API response",
     *      security={
     *          {"bearer": {}}
     *      },
     *      @OA\Parameter(
     *          name="galleryId",
     *          in="path",
     *          required=true,
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="title",
     *                      type="string",
     *                      example="Image Name"
     *                  ),
     *                  @OA\Property(
     *                      property="image",
     *                      type="file"
     *                  ),
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="object",
     *                                  @OA\Property(
     *                                      property="id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="user_id",
     *                                      type="integer"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="title",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="image",
     *                                      type="string"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="created_at",
     *                                      type="timestamp"
     *                                  ),
     *                                  @OA\Property(
     *                                      property="updated_at",
     *                                      type="timestamp"
     *                                  )
     *                          ),
     *                          example={
     *                              "success": true,
     *                              "data": {
     *                                  "id":"integer",
     *                                  "user_id":"string",
     *                                  "title":"string",
     *                                  "image":"string",
     *                                  "created_at":"timestamp",
     *                                  "updated_at":"timestamp"
     *                              }
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="400",
     *          description="Bad Request",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "data": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="403",
     *          description="Forbidden",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="message",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "message": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="success", 
     *                  type="boolean",
     *                  example="false"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="null",
     *                  example="null"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="object",
     *                  @OA\Property(
     *                      property="title",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="image",
     *                      type="array",
     *                      @OA\Items(
     *                          type="string",
     *                          example="Error Message!",
     *                      )
     *                  )
     *              )
     *          )
     *      )
     *  )
     *  @OA\Delete(
     *      path="/api/gallery/{galleryId}",
     *      tags={"Gallery"},
     *      summary="Returns a Sample Delete Gallery API response",
     *      security={
     *          {"bearer": {}}
     *      },
     *      @OA\Parameter(
     *          name="galleryId",
     *          in="path",
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *         )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Successful Operation",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="message",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "message": "Success Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="400",
     *          description="Bad Request",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="data",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "data": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="message",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "message": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      ),
     *      @OA\Response(
     *          response="403",
     *          description="Forbidden",
     *          content= {
     *              @OA\MediaType(
     *                  mediaType="application/json",
     *                      @OA\Schema(
     *                          @OA\Property(
     *                              property="success",
     *                              type="boolean"
     *                          ),
     *                          @OA\Property(
     *                              property="message",
     *                              type="string"
     *                          ),
     *                          example={
     *                              "success": false,
     *                              "message": "Error Message!",
     *                          }
     *                      )
     *              )
     *          }
     *      )
     *  )
     */
}

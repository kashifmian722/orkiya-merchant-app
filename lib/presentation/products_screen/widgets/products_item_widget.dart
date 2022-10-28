import '../controller/products_controller.dart';
import '../models/products_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

// ignore: must_be_immutable
class ProductsItemWidget extends StatelessWidget {
  ProductsItemWidget(this.productsItemModelObj);

  ProductsItemModel productsItemModelObj;

  var controller = Get.find<ProductsController>();

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: getPadding(
        top: 17.0,
        bottom: 17.0,
      ),
      child: Row(
        crossAxisAlignment: CrossAxisAlignment.center,
        mainAxisSize: MainAxisSize.max,
        children: [
          Row(
            crossAxisAlignment: CrossAxisAlignment.center,
            mainAxisSize: MainAxisSize.max,
            children: [
              CommonImageView(
                svgPath: ImageConstant.imgMaskgroup3,
                height: getVerticalSize(
                  54.00,
                ),
                width: getHorizontalSize(
                  87.00,
                ),
              ),
              Padding(
                padding: getPadding(
                  left: 23,
                  top: 21,
                  bottom: 18,
                ),
                child: Text(
                  "lbl_product_name_1".tr,
                  overflow: TextOverflow.ellipsis,
                  textAlign: TextAlign.left,
                  style: AppStyle.txtABeeZeeItalic15.copyWith(
                    height: 1.00,
                  ),
                ),
              ),
            ],
          ),
          Padding(
            padding: getPadding(
              left: 122,
              top: 18,
              bottom: 18,
            ),
            child: CommonImageView(
              svgPath: ImageConstant.imgEdit,
              height: getSize(
                18.00,
              ),
              width: getSize(
                18.00,
              ),
            ),
          ),
        ],
      ),
    );
  }
}

import '../controller/add_order_controller.dart';
import '../models/add_order_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

// ignore: must_be_immutable
class AddOrderItemWidget extends StatelessWidget {
  AddOrderItemWidget(this.addOrderItemModelObj);

  AddOrderItemModel addOrderItemModelObj;

  var controller = Get.find<AddOrderController>();

  @override
  Widget build(BuildContext context) {
    return Align(
      alignment: Alignment.center,
      child: Padding(
        padding: getPadding(
          top: 11.3899995,
          right: 4,
          bottom: 11.3899995,
        ),
        child: Row(
          crossAxisAlignment: CrossAxisAlignment.center,
          mainAxisSize: MainAxisSize.max,
          children: [
            Padding(
              padding: getPadding(
                bottom: 1,
              ),
              child: Text(
                "lbl_name".tr,
                overflow: TextOverflow.ellipsis,
                textAlign: TextAlign.left,
                style: AppStyle.txtABeeZeeItalic13.copyWith(
                  height: 1.00,
                ),
              ),
            ),
            Padding(
              padding: getPadding(
                left: 71,
              ),
              child: Row(
                crossAxisAlignment: CrossAxisAlignment.center,
                mainAxisSize: MainAxisSize.max,
                children: [
                  Padding(
                    padding: getPadding(
                      bottom: 1,
                    ),
                    child: Text(
                      "lbl_unit_price".tr,
                      overflow: TextOverflow.ellipsis,
                      textAlign: TextAlign.left,
                      style: AppStyle.txtABeeZeeItalic13.copyWith(
                        height: 1.00,
                      ),
                    ),
                  ),
                  Padding(
                    padding: getPadding(
                      left: 27,
                    ),
                    child: Text(
                      "lbl_quantity".tr,
                      overflow: TextOverflow.ellipsis,
                      textAlign: TextAlign.left,
                      style: AppStyle.txtABeeZeeItalic13.copyWith(
                        height: 1.00,
                      ),
                    ),
                  ),
                  Padding(
                    padding: getPadding(
                      left: 19,
                      bottom: 1,
                    ),
                    child: Text(
                      "lbl_total_price".tr,
                      overflow: TextOverflow.ellipsis,
                      textAlign: TextAlign.left,
                      style: AppStyle.txtABeeZeeItalic13.copyWith(
                        height: 1.00,
                      ),
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}

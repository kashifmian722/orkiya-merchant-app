import '../controller/orders_controller.dart';
import '../models/orders_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

// ignore: must_be_immutable
class OrdersItemWidget extends StatelessWidget {
  OrdersItemWidget(this.ordersItemModelObj);

  OrdersItemModel ordersItemModelObj;

  var controller = Get.find<OrdersController>();

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: getPadding(
        left: 20,
        top: 5.5,
        right: 73,
        bottom: 5.5,
      ),
      child: Row(
        crossAxisAlignment: CrossAxisAlignment.center,
        mainAxisSize: MainAxisSize.max,
        children: [
          Text(
            "lbl_order".tr,
            overflow: TextOverflow.ellipsis,
            textAlign: TextAlign.left,
            style: AppStyle.txtABeeZeeRegular11.copyWith(
              height: 1.00,
            ),
          ),
          Padding(
            padding: getPadding(
              left: 38,
            ),
            child: Text(
              "lbl_time".tr,
              overflow: TextOverflow.ellipsis,
              textAlign: TextAlign.left,
              style: AppStyle.txtABeeZeeRegular11.copyWith(
                height: 1.00,
              ),
            ),
          ),
          Padding(
            padding: getPadding(
              left: 26,
            ),
            child: Text(
              "lbl_order_status".tr,
              overflow: TextOverflow.ellipsis,
              textAlign: TextAlign.left,
              style: AppStyle.txtABeeZeeRegular11.copyWith(
                height: 1.00,
              ),
            ),
          ),
          Padding(
            padding: getPadding(
              left: 28,
            ),
            child: Text(
              "lbl_order_value".tr,
              overflow: TextOverflow.ellipsis,
              textAlign: TextAlign.left,
              style: AppStyle.txtABeeZeeRegular11.copyWith(
                height: 1.00,
              ),
            ),
          ),
        ],
      ),
    );
  }
}

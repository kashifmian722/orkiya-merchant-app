import '../controller/dashboard_controller.dart';
import '../models/dashboard_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

// ignore: must_be_immutable
class DashboardItemWidget extends StatelessWidget {
  DashboardItemWidget(this.dashboardItemModelObj);

  DashboardItemModel dashboardItemModelObj;

  var controller = Get.find<DashboardController>();

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: getPadding(
        left: 21,
        top: 7.5,
        right: 22,
        bottom: 7.5,
      ),
      child: Row(
        crossAxisAlignment: CrossAxisAlignment.center,
        mainAxisSize: MainAxisSize.max,
        children: [
          Padding(
            padding: getPadding(
              top: 2,
              bottom: 2,
            ),
            child: Text(
              "lbl_order_number".tr,
              overflow: TextOverflow.ellipsis,
              textAlign: TextAlign.left,
              style: AppStyle.txtABeeZeeRegular11.copyWith(
                height: 1.00,
              ),
            ),
          ),
          Padding(
            padding: getPadding(
              left: 16,
            ),
            child: Text(
              "lbl_time".tr,
              overflow: TextOverflow.ellipsis,
              textAlign: TextAlign.left,
              style: AppStyle.txtABeeZeeRegular15.copyWith(
                height: 1.00,
              ),
            ),
          ),
          Padding(
            padding: getPadding(
              left: 49,
              top: 2,
              bottom: 2,
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
              left: 30,
              top: 2,
              bottom: 2,
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

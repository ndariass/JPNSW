package Util;

import android.content.Context;
import android.webkit.GeolocationPermissions;
import android.webkit.JavascriptInterface;
import android.widget.Toast;

/**
 * Created by WALTER on 9/04/16.
 */
public class WebAppInterface {
    Context mContext;

    /** Instantiate the interface and set the context */
    public WebAppInterface(Context c) {
        mContext = c;
    }

    /** Show a toast from the web page */
    @JavascriptInterface
    public void showToast(String toast) {
        Toast.makeText(mContext, toast, Toast.LENGTH_SHORT).show();
    }

    @JavascriptInterface
    public void onGeolocationPermissionsShowPrompt(String origin, GeolocationPermissions.Callback callback) {
        System.out.println("permissionspopup");
        callback.invoke(origin, true, false);
    }
}

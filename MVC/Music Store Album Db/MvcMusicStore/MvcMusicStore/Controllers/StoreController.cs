﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace MvcMusicStore.Controllers
{
    public class StoreController : Controller
    {
        //
        // GET: Store
        public string Index()
        {
            return "Hello from Store.Index()";
        }
        //
        // get: /Store/Browse?genre=?Disco
        public string Browse(string genre)
        {
            string message =
                HttpUtility.HtmlEncode("Store.Browse, Genre = " +
                genre);
            return message;
        }
        //
        // get: /Store/Details/5
        public string Details(int id)
        {
            string message = "Store.Details, ID = " + id;
            return message;

        }
    }
}
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;


namespace admin_web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class author_storiesController : ControllerBase
    {
        private Iauthor_storiesBusiness _truyenBusiness;
        public author_storiesController(Iauthor_storiesBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_author_quantity")]
        [HttpGet]
        public List<author_storiesModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
    }
}
